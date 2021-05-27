<?php

use App\Http\Controllers\ContactController;
use Brian2694\Toastr\Facades\Toastr;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/


Route::get('showmail',function(){

    $data = [
        'name' => 'Anas sarf',
        'phone_number' => '0644174388',
        'content'=> 'Mon premier email Sept personnes volontaires vont être incarcérées dans la prison du comté de Clark, dans l état de l Indiana. Dans cette expérience, ils vont tenter de vivre aux côtés des autres prisonniers, auxquels ils ne doivent à aucun moment dévoiler leur identité afin de gagner leur confiance. Ils vont devoir être vigilant à chaque instant de leur détention. Et dans le même temps, ils vont servir d informateurs dans le but d évaluer les conditions d incarcération et comprendre les rouages de l actuel système pénitentiaire américain.'
    ];
 
    return new App\Mail\ContactMailMarkdown($data); 
});

Route::get('showmail2',function(){

    $data = [
        'name' => 'Anas sarf',
        'phone_number' => '0644174388',
        'content'=> 'Mon premier email Sept personnes volontaires vont être incarcérées dans la prison du comté de Clark, dans l état de l Indiana. Dans cette expérience, ils vont tenter de vivre aux côtés des autres prisonniers, auxquels ils ne doivent à aucun moment dévoiler leur identité afin de gagner leur confiance. Ils vont devoir être vigilant à chaque instant de leur détention. Et dans le même temps, ils vont servir d informateurs dans le but d évaluer les conditions d incarcération et comprendre les rouages de l actuel système pénitentiaire américain.'
    ];
 
    return new App\Mail\ContactMailMarkdow2($data); 
});

Route::get('/', function () { return view('home');})->name('home');
Route::get('home', function () { return view('home');})->name('home');
Route::get('about', function () { return view('about'); })->name('about');
Route::get('services', function () { return view('services'); })->name('services');
//Route::get('contact', function () { return view('contact'); })->name('contact-us');
Route::get('contact', [ContactController::class, 'contact'])->name('contact');



//Route::get('contact-us', [ContactController::class, 'contact'])->name('contact');
Route::post('store', [ContactController::class, 'store'])->name('store');

