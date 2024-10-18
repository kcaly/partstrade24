<?php

use App\Http\Controllers\CandidatesController;
use App\Models\Candidate;
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

Auth::routes();
// Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('apply', [CandidatesController::class, 'index'])->name('candidate.create');
Route::post('apply/save', [CandidatesController::class, 'store'])->name('candidate.store');
Route::view('apply-success', 'apply-success')->name('apply.success');

Route::middleware('auth')->group(function() {

    Route::get('/panel', function () {
        return view('panel');
    });

    Route::get('apply/select/{id}', [CandidatesController::class, 'select'])->name('candidate.select');
    Route::get('apply/list', [CandidatesController::class, 'list'])->name('candidate.list');
    Route::put('apply-update', [CandidatesController::class, 'update'])->name('candidate.update');
    Route::post('apply-delete', [CandidatesController::class, 'delete'])->name('candidate.delete');
    

});


