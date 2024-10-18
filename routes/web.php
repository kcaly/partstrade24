<?php

use App\Http\Controllers\CandidatesController;
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

Route::get('/', function () {
    return view('goto_domain_partstrade-24de');
});

Route::get('/home', function () {
    return view('panel');
});

Auth::routes();

// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/apply', [CandidatesController::class, 'index'])->name('candidate.create');
Route::post('apply/save', [CandidatesController::class, 'store'])->name('candidate.store');



