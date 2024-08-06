<?php

namespace App\Filament\Resources\AbstractInscriptionResource\Pages;

use App\Enums\TypeAbstractInscription;
use App\Filament\Resources\AbstractInscriptionResource;
use Filament\Actions;
use Filament\Resources\Components\Tab;
use Filament\Resources\Pages\ListRecords;
use Illuminate\Database\Eloquent\Builder;

class ListAbstractInscriptions extends ListRecords
{
    protected static string $resource = AbstractInscriptionResource::class;

    protected function getHeaderActions(): array
    {
        return [
//            Actions\CreateAction::make(),
        ];
    }

    public function getTabs(): array
    {
        return [
//            'ask' => Tab::make('Need Verification')->modifyQueryUsing(fn(Builder $query) => $query->where('accepted', '=', null)),
//            'verified' => Tab::make('Confirmed')->modifyQueryUsing(fn(Builder $query) => $query->where('accepted', '=', true)),
//            'rejected' => Tab::make('Rejected')->modifyQueryUsing(fn(Builder $query) => $query->where('accepted', '=', false)),
            'type1' => Tab::make(TypeAbstractInscription::TYPE1->value)->modifyQueryUsing(fn(Builder $query) => $query->where('type', '=', TypeAbstractInscription::TYPE1->value)),
            'type2' => Tab::make(TypeAbstractInscription::TYPE2->value)->modifyQueryUsing(fn(Builder $query) => $query->where('type', '=', TypeAbstractInscription::TYPE2->value))
        ];
    }
}
