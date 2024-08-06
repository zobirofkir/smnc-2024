<?php

namespace App\Filament\Exports;

use App\Models\AbstractInscription;
use Filament\Actions\Exports\ExportColumn;
use Filament\Actions\Exports\Exporter;
use Filament\Actions\Exports\Models\Export;

class AbstractExporter extends Exporter
{
    protected static ?string $model = AbstractInscription::class;

    public static function getColumns(): array
    {
        return [
            ExportColumn::make('conferenceInscription.last_name')->label('Nom'),
            ExportColumn::make('conferenceInscription.first_name')->label('Prénom'),

            ExportColumn::make('title')->label('Titre'),
            ExportColumn::make('introduction'),
            ExportColumn::make('observation'),
            ExportColumn::make('discussion'),
            ExportColumn::make('conclusion'),
            ExportColumn::make('materiel_and_methods'),
            ExportColumn::make('results'),
            ExportColumn::make('address'),
            ExportColumn::make('chu'),
            ExportColumn::make('faculty'),
            ExportColumn::make('university'),
            ExportColumn::make('rates_avg_note')->avg('rates', 'note')->label('Note moyenne')
        ];
    }

    public static function getCompletedNotificationBody(Export $export): string
    {
        $body = 'Your abstract export has completed and ' . number_format($export->successful_rows) . ' ' . str('row')->plural($export->successful_rows) . ' exported.';

        if ($failedRowsCount = $export->getFailedRowsCount()) {
            $body .= ' ' . number_format($failedRowsCount) . ' ' . str('row')->plural($failedRowsCount) . ' failed to export.';
        }

        return $body;
    }
}
