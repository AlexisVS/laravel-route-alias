<?php

use App\Http\Controllers\HomeController;
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

/* -------------------------------------------------------------------------- */




/* -------------------------------------------------------------------------- */

Route::get('/', [HomeController::class, "home"])->name('home');

Route::get('/contact/sav', function () {
    return view('infos/contact/sav');
})->name("sav");

Route::get('/contact/partenariat', function () {
    return view('infos/contact/partenariat');
})->name('partenariat');

Route::get('/contact/info', function () {
    return view('infos/contact/info');
})->name('info');

Route::get('/team/front', function () {
    return view('team/web/dev/frontend');
})->name('frontend');

Route::get('/team/back', function () {
    return view('team/web/dev/backend');
})->name('backend');

view()->composer(["*"], function($view) {
    $back = [
        'personne1' => [
            "nom" => 'Junior',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait2.jpg')
        ],
        'personne2' => [
            "nom" => 'Andy',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait2.jpg')
        ],
        'personne3' => [
            "nom" => 'Kevin',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait2.jpg')
        ],
        'personne4' => [
            "nom" => 'Mihai',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait2.jpg')
        ],
    ];

    $front = [
        'personne1' => [
            "nom" => 'Alexis',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait1.jpg')
        ],
        'personne2' => [
            "nom" => 'Charles',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait1.jpg')
        ],
        'personne3' => [
            "nom" => 'Ilyas',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait1.jpg')
        ],
        'personne4' => [
            "nom" => 'Farhad',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait1.jpg')
        ],
        'personne5' => [
            "nom" => 'Tania',
            "fonction" => 'front-end developper',
            "img" => asset('img/portrait1.jpg')
        ],
    ];

    $view->with("front", $front);
    $view->with("back", $back);
});