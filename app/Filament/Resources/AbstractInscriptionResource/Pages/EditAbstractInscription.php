<?php

namespace App\Filament\Resources\AbstractInscriptionResource\Pages;

use App\Filament\Resources\AbstractInscriptionResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;

class EditAbstractInscription extends EditRecord
{
    protected static string $resource = AbstractInscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\DeleteAction::make(),
        ];
    }
}
