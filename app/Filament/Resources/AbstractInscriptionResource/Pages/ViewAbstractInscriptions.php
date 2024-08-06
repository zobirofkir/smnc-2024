<?php
namespace App\Filament\Resources\AbstractInscriptionResource\Pages;
 
use App\Filament\Resources\AbstractInscriptionResource;
use App\Mail\AbstractInscriptionConfirmed;
use App\Mail\ConferenceInscriptionConfirmed;
use App\Models\AbstractInscription;
use App\Models\Rate;
use Filament\Actions\Action;
use Filament\Resources\Pages\ViewRecord;
use Illuminate\Support\Facades\Mail;
use Filament\Forms\Components\Radio;

class ViewAbstractInscriptions extends ViewRecord
{
    protected static string $resource = AbstractInscriptionResource::class;

    public function verifyAbstractInscriptionAction()
    {
        return Action::make('verify')
            ->icon('heroicon-m-check-badge')
            ->color('success')
            ->action(function(AbstractInscription $abstractInscription) {
                $abstractInscription->accepted = true;
                $abstractInscription->save();

                Mail::to(auth()->user())->send(new AbstractInscriptionConfirmed());
            })->visible(fn ($record): bool => !$record->accepted);
    }

    public function rejectAbstractInscriptionAction()
    {
        return Action::make('reject')
            ->icon('heroicon-m-x-circle')
            ->color('danger')
            ->action(function(AbstractInscription $abstractInscription) {
                $abstractInscription->accepted = false;
                $abstractInscription->save();
            })->visible(fn ($record): bool => $record->accepted === 1 || $record->accepted === null);
    }

    public function rate()
    {
        return Action::make('évaluer')
            ->icon('heroicon-m-document-check')
            ->color('success')
            ->form([
                Radio::make('note')->label('La note')
                    ->options([
                        '1' => '1',
                        '2' => '2',
                        '3' => '3',
                        '4' => '4',
                        '5' => '5',
                    ])->required()
            ])
            ->action(function (array $data, AbstractInscription $abstract): void {
                Rate::create([
                    'user_id' => auth()->user()->id,
                    'abstract_inscription_id' => $abstract->id,
                    'note' => $data['note'] ?? 0
                ]);
            })->visible(function ($record) {
                $countRates = Rate::query()
                    ->where('user_id', '=', auth()->user()->id)
                    ->where('abstract_inscription_id', '=', $record->id)
                    ->count();
                return $countRates === 0;
            });
    }

    public function next()
    {
        return Action::make('suivante')
            ->hiddenLabel()
            ->icon('heroicon-m-forward')
            ->url(AbstractInscriptionResource::getUrl('view', [$this->record->next()->id]));
    }

    public function back()
    {
        return Action::make('back')
            ->hiddenLabel()
            ->icon('heroicon-m-backward')
            ->url(AbstractInscriptionResource::getUrl('view', [$this->record->previous()->id]));
    }

    protected function getHeaderActions(): array
    {
        $actions = [];
//        $actions[] = $this->verifyAbstractInscriptionAction();
//        $actions[] = $this->rejectAbstractInscriptionAction();
//        $actions[] = $this->rate();
        if ($this->record->previous()) {
            $actions[] = $this->back();
        }

        if ($this->record->next()) {
            $actions[] = $this->next();
        }
        return $actions;
    }
}
