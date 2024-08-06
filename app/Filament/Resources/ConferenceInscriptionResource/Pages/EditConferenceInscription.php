<?php

namespace App\Filament\Resources\ConferenceInscriptionResource\Pages;

use App\Filament\Resources\ConferenceInscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditConferenceInscription extends EditRecord
{
    protected static string $resource = ConferenceInscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }
}
