<?php

namespace App\Http\Controllers;

use App\Enums\TypeAbstractInscription;
use App\Events\AbstractSubmitted;
use App\Mail\AbstractRecieved;
use App\Models\AbstractInscription;
use App\Models\AbstractInscriptionAuthor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Validation\Rules\Enum;

class CreateAbstractInscription extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $rules = [
            'abstract_type' => [
                'required',
                new Enum(TypeAbstractInscription::class)
            ],
            'address' => 'required',
            'chu' => 'required',
            'faculty' => 'required',
            'university' => 'required',
            'title' => 'required',
            'introduction' => 'required',
            'discussion' => 'required',
            'conclusion' => 'required',
            'presenter_first_name' => 'required',
            'presenter_last_name' => 'required',
            'presenter_affiliation' => 'required',
            'authors' => ['required', 'array', 'min:1'],
            'authors.*.first_name' => 'required',
            'authors.*.last_name' => 'required',
            'authors.*.affiliation' => 'required',
        ];

        if ($request->get('abstract_type') === TypeAbstractInscription::TYPE1->value) {
            $rules['observation'] = 'required';
        }

        if ($request->get('abstract_type') === TypeAbstractInscription::TYPE2->value) {
            $rules['materiel_and_methods'] = 'required';
            $rules['results'] = 'required';
        }

        $request->validate($rules);

        if ($request->get('validation')) {
            return view('validate_abstract', $request->except('_token'));
        }

        $userInscription = auth()->user()->inscription;
        $abstractInscription = AbstractInscription::create([
            'address' => $request->get('address'),
            'chu' => $request->get('chu'),
            'faculty' => $request->get('faculty'),
            'university' => $request->get('university'),
            'type' => $request->get('abstract_type'),
            'title' => $request->get('title'),
            'introduction' => $request->get('introduction'),
            'observation' => $request->get('observation') ?? '',
            'discussion' => $request->get('discussion'),
            'conclusion' => $request->get('conclusion'),
            'materiel_and_methods' => $request->get('materiel_and_methods') ?? '',
            'results' => $request->get('results') ?? '',
            'conference_inscription_id' => $userInscription->id
        ]);

        $authorsList = [
            [
                'first_name' => $request->get('presenter_first_name'),
                'last_name' => $request->get('presenter_last_name'),
                'affiliation' => $request->get('presenter_affiliation'),
                'presenter' => true,
                'abstract_inscription_id' => $abstractInscription->id
            ]
        ];

        foreach ($request->get('authors') as $author) {
            $authorsList[] = [
                'first_name' => $author['first_name'],
                'last_name' => $author['last_name'],
                'affiliation' => $author['affiliation'],
                'presenter' => false,
                'abstract_inscription_id' => $abstractInscription->id
            ];
        }

        AbstractInscriptionAuthor::insert($authorsList);

        AbstractSubmitted::dispatch($abstractInscription);

        return redirect('/');
    }
}
