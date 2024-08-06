<?php

namespace App\Filament\Resources\ConferenceInscriptionResource\Pages;

use App\Events\ConferenceInscriptionVerified;
use App\Filament\Resources\ConferenceInscriptionResource;
use App\Models\ConferenceInscription;
use App\Models\User;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Str;

class ViewConferenceInscription extends ViewRecord
{
    protected static string $resource = ConferenceInscriptionResource::class;

    public function verifyConferenceInscriptionAction()
    {
        return Action::make('verify')
            ->icon('heroicon-m-check-badge')
            ->color('success')
            ->action(function(ConferenceInscription $conferenceInscription) {
                $user = User::query()->where('email', '=', $conferenceInscription->email)->first();
                $password = $conferenceInscription->first_name . '123'; // Password format: first_name + '123'

                if (!$user) {
                    // Create a new user with the specified password
                    $user = User::query()->create([
                        'name' => $conferenceInscription->first_name . ' ' . $conferenceInscription->last_name,
                        'email' => $conferenceInscription->email,
                        'password' => $password, // No hashing as per preference
                    ]);
                }

                $conferenceInscription->user()->associate($user);
                $conferenceInscription->rejected = false;
                $conferenceInscription->save();

                ConferenceInscriptionVerified::dispatch($user, $password);
            })->visible(fn ($record): bool => !$record->user && !$record->rejected); // Updated visibility condition

    }

    public function rejectConferenceInscriptionAction()
    {
        return Action::make('reject')
            ->icon('heroicon-m-x-circle')
            ->color('danger')
            ->action(function(ConferenceInscription $conferenceInscription) {
                $conferenceInscription->rejected = true;
                $conferenceInscription->save();
            })->visible(fn ($record): bool => !$record->rejected); // Ensure visibility is correct
    }

    protected function getHeaderActions(): array
    {
        return [
            $this->verifyConferenceInscriptionAction(),
            $this->rejectConferenceInscriptionAction(),
        ];
    }
}
