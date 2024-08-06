<?php

namespace App\Http\Controllers\Payment;

use App\Events\InscriptionPayed;
use App\Http\Controllers\Controller;
use App\Models\Payment;
use Illuminate\Http\Request;

class PayWithTransferBank extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $inscription = auth()->user()?->inscription;

        if (!$inscription) {
            return response()->json([])->setStatusCode(401);
        }

        $fileName = 'inscription_'. $inscription->first_name . '_' . $inscription->last_name . '_' . time() . '.' . $request->transfer_bank->extension();
        $request->transfer_bank->move(public_path('payments'), $fileName);

        $total = $request->get('total');
        $payedBy = 'transfer bank';
        $status = $inscription->status;
        $room = $request->get('room') ?? null;
        $nights = $request->get('nights') ?? null;
        $meals = $request->get('meals') ?? null;
        $roommate = $request->get('roommate') ?? '-';
        $depart_day = $request->get('depart_day') ?? '';


        $info = "
            Inscription:
            <ul>
                <li><strong>$status</strong></li>
            </ul>
            <br />

        ";

        if ($room && $nights) {
            $info .= "
                Hébergement: <strong>$depart_day</strong>
                <ul>
                    <li>Chambre: <strong>$room</strong></li>
                    <li>Nuits: <strong>$nights</strong></li>
                </ul>
                <br>
            ";
        }

        if($room === 'Chambre Twin') {
            $info .= "
                Colocataire: <strong>$roommate</strong>
                <br><br><br>
            ";
        }


        if ($meals) {
            $info .= "
                Accompagnement:
                <ul>
                    <li>Repas: <strong>$meals</strong></li>
                </ul>
            ";
        }

        $payment = Payment::create([
            'conference_inscription_id' => $inscription->id,
            'total' => $total,
            'payed_by' => $payedBy,
            'info' => $info,
            'bank_transfer' => $fileName
        ]);

        $request->session()->flash('message', 'Nous vous contacterons bientôt ' . $inscription->first_name . ' sur cet email ' . $inscription->email . ' pour vous informer si votre paiement est confirmé ou non.');
        InscriptionPayed::dispatch($payment);
        return response()->json([])->setStatusCode(201);
    }
}
