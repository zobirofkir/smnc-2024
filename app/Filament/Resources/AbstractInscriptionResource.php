<?php

namespace App\Filament\Resources;

use App\Enums\TypeAbstractInscription;
use App\Filament\Exports\AbstractExporter;
use App\Filament\Exports\InscriptionExporter;
use App\Filament\Resources\AbstractInscriptionResource\Pages;
use App\Filament\Resources\AbstractInscriptionResource\RelationManagers;
use App\Models\AbstractInscription;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class AbstractInscriptionResource extends Resource
{
    protected static ?string $model = AbstractInscription::class;

    protected static ?string $navigationGroup = 'Les Inscriptions';
    protected static ?string $navigationLabel = 'Abstract inscription';
    protected static ?string $modelLabel = 'Abstract inscription';
    protected static ?string $navigationIcon = 'heroicon-o-rectangle-stack';
    protected static ?int $navigationSort = 2;

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
                Tables\Columns\TextColumn::make('conferenceInscription.first_name')->label('Prénom')->badge(),
                Tables\Columns\TextColumn::make('conferenceInscription.last_name')->label('Nom')->badge(),
                Tables\Columns\TextColumn::make('title')->label('Titre')->grow()->wrap(),
//                Tables\Columns\TextColumn::make('userRate.note')->when()->label('Note')->badge()->default('-'),
                Tables\Columns\TextColumn::make('rates_avg_note')->avg('rates', 'note')->label('Note moyenne')->badge()->sortable(),
            ])
            ->filters([
                //
            ])
            ->actions([
//                Tables\Actions\EditAction::make(),
                Tables\Actions\ViewAction::make()->slideOver(),

            ])
            ->bulkActions([
                Tables\Actions\DeleteBulkAction::make(),
                Tables\Actions\ExportBulkAction::make()
                    ->exporter(AbstractExporter::class)
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        $schema = [];
        $presenter = collect($infolist->record->authors)->where('presenter', '=', true)->first();
        $authors = collect($infolist->record->authors)->where('presenter', '=', false);


        $schema[] = Section::make('Soumis par:')->schema([
            TextEntry::make('Prénom:')->default($infolist->record->conferenceInscription->first_name)->inlineLabel()->badge(),
            TextEntry::make('Nom:')->default($infolist->record->conferenceInscription->last_name)->inlineLabel()->badge(),
        ]);

        if ($presenter) {
            $schema[] = Section::make('Auteur présentateur')->schema([
                TextEntry::make('Prénom')->default($presenter->first_name),
                TextEntry::make('Nom')->default($presenter->last_name),
                TextEntry::make('Affiliation')->default($presenter->affiliation),
            ])->columns(3);
        }


        $authorsSchema = [];
        foreach ($authors as $author) {
            $authorsSchema[] = TextEntry::make('Prénom')->default($author->first_name);
            $authorsSchema[] = TextEntry::make('Nom')->default($author->last_name);
            $authorsSchema[] = TextEntry::make('Affiliation')->default($author->affiliation);
        }
        $schema[] = Section::make('Liste des auteurs')->schema($authorsSchema)->columns(3);

        $abstractSchema = [];
        $abstractSchema[] = TextEntry::make('type')->badge();
        $abstractSchema[] = TextEntry::make('address');
        $abstractSchema[] = TextEntry::make('chu');
        $abstractSchema[] = TextEntry::make('faculty');
        $abstractSchema[] = TextEntry::make('university');

        $abstractSchema[] = TextEntry::make('title');
        $abstractSchema[] = TextEntry::make('introduction');

        if ($infolist->record->type === TypeAbstractInscription::TYPE1->value) {
            $abstractSchema[] = TextEntry::make('observation');
        }

        if ($infolist->record->type == TypeAbstractInscription::TYPE2->value) {
            $abstractSchema[] = TextEntry::make('materiel_and_methods');
            $abstractSchema[] = TextEntry::make('results');
        }

        $abstractSchema[] = TextEntry::make('discussion');
        $abstractSchema[] = TextEntry::make('conclusion');

        $schema[] = Section::make('Abstract Information')->schema($abstractSchema);

        return $infolist->schema($schema);
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
            'index' => Pages\ListAbstractInscriptions::route('/'),
            'view' => Pages\ViewAbstractInscriptions::route('/{record}'),
//            'create' => Pages\CreateAbstractInscription::route('/create'),
//            'edit' => Pages\EditAbstractInscription::route('/{record}/edit'),
        ];
    }
}
