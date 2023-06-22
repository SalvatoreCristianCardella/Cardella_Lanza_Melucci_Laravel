<?php

use App\Http\Controllers\InfoController;
use App\Http\Controllers\PublicController;
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
    return view('welcome');
});


Route::get('/studenti', [PublicController::class , 'student'])-> name('studenti');

    
Route::get('/student/Language/{Language}', [PublicController::class , 'studentByLanguage'])-> name('studentByLanguage');

Route::get('/search', [PublicController::class, 'searchStudent'])-> name('searchStudent');

Route::post('/candidati')->name('candidati');

Route::get('/information', [InfoController::class, 'info'])->name('info');

Route::post('/mail', [InfoController::class, 'contact'])->name('mail');