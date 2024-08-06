<?php

namespace App\Filament\Resources;

use App\Filament\Exports\InscriptionExporter;
use App\Filament\Resources\ConferenceInscriptionResource\Pages;
use App\Filament\Resources\ConferenceInscriptionResource\RelationManagers;
use App\Models\ConferenceInscription;
use App\Models\MatchingList;
use Filament\Forms;
use Filament\Forms\Form;
use Filament\Infolists\Components\Section;
use Filament\Infolists\Components\Split;
use Filament\Infolists\Components\TextEntry;
use Filament\Infolists\Infolist;
use Filament\Resources\Resource;
use Filament\Tables;
use Filament\Tables\Table;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\SoftDeletingScope;

class ConferenceInscriptionResource extends Resource
{
    protected static ?string $model = ConferenceInscription::class;
    protected static ?string $navigationGroup = 'Les Inscriptions';
    protected static ?string $navigationLabel = 'Congrès inscription';
    protected static ?string $navigationIcon = 'heroicon-o-user-group';
    protected static ?string $modelLabel = 'Congrès inscription';

    public static ?int $navigationSort = 1;


    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                Forms\Components\Select::make('status')
                    ->options([
                        'Membre titulaire de la SMN' => 'Membre titulaire de la SMN',
                        'Résident' => 'Résident',
                        'Membre associé de la SMN' => 'Membre associé de la SMN',
                        'Non membre de la SMN' => 'Non membre de la SMN',
                        ])
                    ->label('Statut')
                    ->required(),
            ]);
    }

    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                Tables\Columns\TextColumn::make('first_name')->label('Prénom'),
                Tables\Columns\TextColumn::make('last_name')->label('Nom'),
                Tables\Columns\TextColumn::make('status')->label('Statut'),
                Tables\Columns\TextColumn::make('email')->label('E-mail'),
                Tables\Columns\TextColumn::make('phone_number')->label('Téléphone GSM'),
                Tables\Columns\TextColumn::make('city')->label('Ville'),
            ])
            ->filters([
                //
            ])
            ->actions([
                Tables\Actions\EditAction::make()->slideOver(),
                Tables\Actions\ViewAction::make()->slideOver(),
            ])
            ->bulkActions([
                Tables\Actions\ExportBulkAction::make()
                    ->exporter(InscriptionExporter::class),
                Tables\Actions\DeleteBulkAction::make()
            ]);
    }

    public static function infolist(Infolist $infolist): Infolist
    {
        $matchingList = MatchingList::query()
            ->where('email', 'like', "%" . $infolist->record->email . "%")
            ->orWhere('phone1', 'like', "%" . $infolist->record->phone_number . "%")
            ->orWhere('phone1', 'like', "%" . $infolist->record->business_phone_number . "%")
            ->orWhere('phone2', 'like', "%" . $infolist->record->phone_number . "%")
            ->orWhere('phone2', 'like', "%" . $infolist->record->business_phone_number . "%")
            ->orWhere('name', 'like', "%" . $infolist->record->first_name . "%")
            ->orWhere('name', 'like', "%" . $infolist->record->last_name . "%")
            ->get();


        $schema = [];
        $schema[] = Section::make()
            ->columns([
                'sm' => 1,
                'xl' => 2,
            ])
            ->schema([
                Section::make('Informations personnelles')
                    ->schema([
                        TextEntry::make('first_name')->label('Prénom'),
                        TextEntry::make('last_name')->label('Nom'),
                        TextEntry::make('email')->label('E-mail'),
                        TextEntry::make('phone_number')->label('Téléphone GSM'),
                        TextEntry::make('city')->label('Ville'),
                    ])->columnSpan(1),
                Section::make('Informations professionnel')
                    ->schema([
                        TextEntry::make('activity_area')->label('Secteur activité'),
                        TextEntry::make('status')->label('Statut'),
                        TextEntry::make('business_address')->label('Adresse professionnelle'),
                        TextEntry::make('business_phone_number')->label('Téléphone professionnel'),
                    ])->columnSpan(1),
            ]);


        if ($matchingList->count()) {
            $matchingSchema = [];
            foreach ($matchingList as $item) {
                $matchingSchema[] = TextEntry::make('Nom et Prénom')->default($item->name);
                $matchingSchema[] = TextEntry::make('Phone')->default($item->phone1);
                $matchingSchema[] = TextEntry::make('Phone 2')->default($item->phone2);
                $matchingSchema[] = TextEntry::make('E-mail')->default($item->email);
            }

            $schema[] = Section::make('Matching')->schema($matchingSchema)->columns(4);
        }


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
            'index' => Pages\ListConferenceInscriptions::route('/'),
            'view' => Pages\ViewConferenceInscription::route('/{record}'),
        ];
    }
}
