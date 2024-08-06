<?php

namespace App\Http\Controllers\Payment;

use App\Http\Controllers\Controller;
use App\Payment\VariantPrices;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Validator;

class ShowPaymentPage extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $inscription = Auth::user()?->inscription;

        if (!$inscription) {
            return redirect()->route('home');
        }

        $accommodation = $request->accommodation ?? 'with_accommodation';
        $status = $inscription->status;
        $room = $request->room ?? 'Chambre Single';
        $nights = $request->nights ?? 2;
        $meals = $request->meals ?? [];
        $depart_day = $request->depart_day ?? '05/09/2024';
        $roommate = $request->roommate ?? '';


        if ($accommodation === 'with_accommodation') {
            if ($request->isAjax) {
                $validator = Validator::make($request->all(),[
                    'room' => [
                        Rule::in(['Chambre Single', 'Chambre Twin', 'Chambre Double']),
                    ],
                    'nights' => 'in:1,2,3',
                ]);

                if ($validator->fails()) {
                    return '';
                }
            }
        }

        $inscriptions = [
            [
                'label' => $status,
                'price' => VariantPrices::inscriptionPrice($status)
            ]
        ];

        if ($accommodation === 'with_accommodation') {


            $accommodations = [
                [
                    'label' => $nights > 1 ?
                        '('. $room .') X '. $nights . ' nuits' :
                        '('. $room .') X '. $nights . ' nuit',
                    'price' => VariantPrices::accommodationPrice($status, $room, $nights),
                ]
            ];

            $accompaniments = [];
            foreach ($meals as $meal) {
                $accompaniments[] = [
                    'label' => 'Forfait repas (' . $meal . ')',
                    'price' => VariantPrices::mealPrice($meal)
                ];
            }
        } else {
            $accommodations = [];
            $accompaniments = [];
        }

        $total = 0;

        foreach ($inscriptions as $inscription) {
            $total += $inscription['price'];
        }

        foreach ($accommodations as $accommodationItem) {
            $total += $accommodationItem['price'];
        }

        foreach ($accompaniments as $accompaniment) {
            $total += $accompaniment['price'];
        }

        if ($request->isAjax) return view('partials.trip_configuration', compact('inscriptions', 'accommodations', 'accompaniments', 'status', 'room', 'nights', 'meals', 'total', 'accommodation', 'depart_day', 'roommate'));

        return view('payment', compact('inscriptions', 'accommodations', 'accompaniments', 'status', 'room', 'nights', 'meals', 'total', 'accommodation', 'depart_day', 'roommate'));
    }
}
