<?php

use App\Enums\TypeAbstractInscription;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\LogoutController;
use App\Http\Controllers\PaymentController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('inscription', function () { return view('inscription'); })->middleware(['guest'])->name('inscription.index');
Route::post('inscription', \App\Http\Controllers\CreateConferenceInscription::class)->middleware(['guest'])->name('inscription.store');

Route::get('identification', function () {return view('auth.login'); })->middleware(['guest'])->name('login');
Route::post('identification', \App\Http\Controllers\Auth\LoginController::class)->middleware(['guest'])->name('auth.authenticate');

Route::middleware("auth")->group(function(){

    Route::get('/', function () { return view('home'); })->name('home');
    Route::get('/apropos', function () { return view('apropos'); })->name('apropos');
    Route::get('/actualites', function () { return view('actualites'); })->name('actualites');
    Route::get('/jmn', function () { return view('jmn'); })->name('jmn');
    Route::get('/congrès-internationaux', function () { return view('agenda-ci'); })->name('agenda-ci');

    Route::get('/congrès-nationaux', function () { return view('agenda-cn'); })->name('agenda-cn');
    Route::get('/cenem', function () { return view('cenem'); })->name('cenem');
    Route::get('/galerie', function () { return view('galerie'); })->name('galerie');
    Route::get('/contact', function () { return view('contact'); })->name('contact');

    Route::get('/cnn2024', function () { return view('cnn2024'); })->name('cnn2024');
    Route::get('/jpn2023', function () { return view('jpn2023'); })->name('jpn2023');
    Route::get('/jan2022', function () { return view('jan2022'); })->name('jan2022');
    Route::get('/enmg2022', function () { return view('enmg2022'); })->name('enmg2022');
    Route::get('/jan2021', function () { return view('jan2021'); })->name('jan2021');
    Route::get('/jpn2021', function () { return view('jpn2021'); })->name('jpn2021');
    Route::get('/jan2020', function () { return view('jan2020'); })->name('jan2020');
    Route::get('/jan2019', function () { return view('jan2019'); })->name('jan2019');
    Route::get('/jpn2019', function () { return view('jpn2019'); })->name('jpn2019');
    Route::get('/cm2018', function () { return view('cm2018'); })->name('cm2018');
    Route::get('/cn2018', function () { return view('cn2018'); })->name('cn2018');
    Route::get('/jan2017', function () { return view('jan2017'); })->name('jan2017');
    Route::get('/jpn2017', function () { return view('jpn2017'); })->name('jpn2017');
    Route::get('/jan2016', function () { return view('jan2016'); })->name('jan2017');

    Route::get('inscription-abstract', function () {
        return view('abstract', ['abstract_type' => TypeAbstractInscription::TYPE1->value]);
    })->middleware([\App\Http\Middleware\FeatureExp::class, 'auth'])->name('inscription.abstract');
    
    Route::post('inscription-abstract', \App\Http\Controllers\CreateAbstractInscription::class)
        ->middleware([\App\Http\Middleware\FeatureExp::class, 'auth'])->name('inscription.abstract.store');
    
    
    Route::get('/inscription/payment', \App\Http\Controllers\Payment\ShowPaymentPage::class)->name('inscription.payment');
    Route::post('/inscription/transfer_bank/pay', \App\Http\Controllers\Payment\PayWithTransferBank::class)->name('inscription.transfer_bank.pay');  
    Route::post('/inscription/payment/process', [PaymentController::class, 'processPayment'])->name('inscription.payment.process');

    Route::post('logout', [LoginController::class, "logout"])->name('logout');
});
