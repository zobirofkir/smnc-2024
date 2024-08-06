<?php

namespace App\Filament\Resources;

use App\Filament\Imports\MatchListImporter;
use App\Filament\Resources\MatchingListResource\Pages;
use App\Models\MatchingList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class MatchingListResource extends Resource
{
    protected static ?string $model = MatchingList::class;

    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';

    protected static ?string $navigationGroup = 'Setting';

    protected static ?string $navigationLabel = 'Matching list';

    protected static ?string $modelLabel = 'Matching list';

    public static ?int $navigationSort = 30;



    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                //
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('name'),
                Tables\Columns\TextColumn::make('phone1'),
                Tables\Columns\TextColumn::make('phone2'),
                Tables\Columns\TextColumn::make('email'),
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
            ])
            ->bulkActions([
                Tables\Actions\BulkActionGroup::make([
                    Tables\Actions\DeleteBulkAction::make(),
                ]),
            ])->headerActions([
                Tables\Actions\ImportAction::make()
                    ->importer(MatchListImporter::class)
            ]);
    }

    public static function getRelations(): array
    {
        return [
            //
        ];
    }

    public static function getPages(): array
    {
        return [
            'index' => Pages\ListMatchingLists::route('/'),
//            'create' => Pages\CreateMatchingList::route('/create'),
//            'edit' => Pages\EditMatchingList::route('/{record}/edit'),
        ];
    }
}
