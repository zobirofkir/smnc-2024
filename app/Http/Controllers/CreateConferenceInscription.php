<?php

namespace App\Http\Controllers;

use App\Models\ConferenceInscription;
use Illuminate\Http\Request;

class CreateConferenceInscription extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $request->validate([
            'first_name' => 'required',
            'last_name' => 'required',
            'activity_area' => 'required',
            'city' => 'required',
            'business_address' => 'required',
            'email' => 'required|email|unique:conference_inscriptions',
            'phone_number' => 'required',
            'status' => 'required'
        ]);

        ConferenceInscription::create($request->all());

        return redirect('/')->with('message', 'Votre inscription a bien été réceptionnée.');
    }
}
