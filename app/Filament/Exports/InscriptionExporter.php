<?php

namespace App\Filament\Exports;

use App\Models\ConferenceInscription;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class InscriptionExporter extends Exporter
{
    protected static ?string $model = ConferenceInscription::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('first_name')->label('Prénom'),
            ExportColumn::make('last_name')->label('Nom'),
            ExportColumn::make('activity_area')->label('Secteur activité'),
            ExportColumn::make('city')->label('Ville'),
            ExportColumn::make('business_address')->label('Adresse professionnelle'),
            ExportColumn::make('email')->label('E-mail'),
            ExportColumn::make('phone_number')->label('Téléphone GSM'),
            ExportColumn::make('business_phone_number')->label('Téléphone professionnel'),
            ExportColumn::make('status')->label('Statut'),
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Votre export d’inscription est terminé et ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exportées.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . " échec de l'exportation.";
        }

        return $body;
    }
}
