<?php

namespace App\Filament\Resources\MatchingListResource\Pages;

use App\Filament\Resources\MatchingListResource;
use Filament\Actions;
use Filament\Resources\Pages\ListRecords;

class ListMatchingLists extends ListRecords
{
    protected static string $resource = MatchingListResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\CreateAction::make(),
        ];
    }
}
