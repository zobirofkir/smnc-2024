<?php

namespace App\Filament\Resources\ConferenceInscriptionResource\Pages;

use App\Filament\Resources\ConferenceInscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;
use Filament\Resources\Components\Tab;
use Illuminate\Database\Eloquent\Builder;

class ListConferenceInscriptions extends ListRecords
{
    protected static string $resource = ConferenceInscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            //
        ];
    }

    public function getTabs(): array
    {
        return [
            'ask' => Tab::make('Besoin de vérification')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('user_id', '=', null)->where('rejected', '=', false)),
            'verified' => Tab::make('Confirmé')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('user_id', '!=', null)->where('rejected', '=', false)),
            'rejected' => Tab::make('Rejeté')
                ->modifyQueryUsing(fn(Builder $query) => $query->where('rejected', '=', true)),
        ];
    }

}
