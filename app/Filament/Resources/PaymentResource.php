<?php

namespace App\Filament\Resources;

use App\Filament\Resources\PaymentResource\Pages;
use App\Models\Payment;
use Filament\Forms\Form;
use Filament\Resources\Resource;
use Filament\Tables\Table;
use Filament\Tables\Actions\Action;
use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Filters\SelectFilter;
use Illuminate\Support\Facades\Mail;
use App\Mail\PaymentAcceptedMail;
use App\Mail\PaymentRejectedMail;
use Illuminate\Support\Facades\Auth;

class PaymentResource extends Resource
{
    protected static ?string $model = Payment::class;
    protected static ?string $navigationIcon = 'heroicon-o-banknotes';
    protected static ?string $navigationGroup = 'Finance';
    protected static ?string $modelLabel = 'Paiements';
    public static ?int $navigationSort = 20;

    /**
     * Define the form schema.
     */
    public static function form(Form $form): Form
    {
        return $form
            ->schema([
                // Add your form schema here
            ]);
    }

    /**
     * Define the table schema.
     */
    public static function table(Table $table): Table
    {
        return $table
            ->columns([
                TextColumn::make('conferenceInscription.first_name')
                    ->label('Prénom')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('conferenceInscription.last_name')
                    ->label('Nom')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('conferenceInscription.status')
                    ->label('Statut')
                    ->sortable()
                    ->searchable(),

                TextColumn::make('total')
                    ->money('MAD')
                    ->label('Total')
                    ->badge()
                    ->sortable(),

                TextColumn::make('info')
                    ->label('Info')
                    ->html()
                    ->sortable(),
            ])
            ->filters([
                SelectFilter::make('status')
                    ->label('Statut')
                    ->options([
                        'accepted' => 'Accepté',
                        'rejected' => 'Rejeté',
                    ]),
            ])
            ->actions([
                Action::make('reçu de paiement')
                    ->url(fn (Payment $record): string => asset('payments') . '/' . $record->bank_transfer)
                    ->openUrlInNewTab(),

                Action::make('validate')
                    ->label('Valider')
                    ->action(function (Payment $record) {
                        $record->update(['status' => 'accepted']);

                        Mail::to($record->conferenceInscription->email)
                            ->send(new PaymentAcceptedMail($record));

                        $user = Auth::user();
                        if ($user && $user->email) {
                            Mail::to($user->email)
                                ->send(new PaymentAcceptedMail($record));
                        }
                    })
                    ->requiresConfirmation()
                    ->color('success')
                    ->button()
                    ->visible(fn (Payment $record) => $record->status !== 'accepted' && $record->status !== 'rejected'),

                Action::make('reject')
                    ->label('Rejeter')
                    ->action(function (Payment $record) {
                        $record->update(['status' => 'rejected']);

                        Mail::to($record->conferenceInscription->email)
                            ->send(new PaymentRejectedMail($record));
                    })
                    ->requiresConfirmation()
                    ->color('danger')
                    ->button()
                    ->visible(fn (Payment $record) => $record->status !== 'rejected' && $record->status !== 'accepted'),
            ])
            ->bulkActions([
                // Add your bulk actions here
            ])
            ->defaultSort('status', 'desc');
    }

    /**
     * Define the resource relations.
     */
    public static function getRelations(): array
    {
        return [
            // Add your relations here
        ];
    }

    /**
     * Define the resource pages.
     */
    public static function getPages(): array
    {
        return [
            'index' => Pages\ListPayments::route('/'),
        ];
    }
}
