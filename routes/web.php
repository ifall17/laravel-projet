<?php
use App\Http\Controllers\VilleController;
use App\Http\Controllers\BanqueController;
use App\Http\Controllers\FonctionController;
use App\Http\Controllers\PersonnelController;
use App\Http\Controllers\FonctionPersonnelController;

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
Route::get('/', function () {
    return view('home');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth'])->name('dashboard');

require __DIR__.'/auth.php';

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home'); 


//ville controller
Route::get('/ville',[VilleController::class,'index'])->name('index.ville');
Route::post('ville.save',[VilleController::class,'store'])->name('enregistrer.ville');
Route::get('/supprimer.ville/{id}', [VilleController::class, 'destroy'])->name('supprimer.ville');
Route::get('/editer.ville/{id}', [VilleController::class, 'edit'])->name('editer.ville');
Route::post('/maj.ville/{id}', [VilleController::class, 'update'])->name('maj.ville');

//Banque controller
Route::get('/banque',[BanqueController::class,'index'])->name('index.banque');
Route::post('banque.save',[BanqueController::class,'store'])->name('enregistrer.banque');
Route::get('/supprimer.banque/{id}', [BanqueController::class, 'destroy'])->name('supprimer.banque');
Route::get('/editer.banque/{id}', [BanqueController::class, 'edit'])->name('editer.banque');
Route::post('/maj.banque/{id}', [BanqueController::class, 'update'])->name('maj.banque');

//Fonction controller
Route::get('/fonction',[FonctionController::class,'index'])->name('index.fonction');
Route::post('fonction.save',[FonctionController::class,'store'])->name('enregistrer.fonction');
Route::get('/supprimer.fonction/{id}', [FonctionController::class, 'destroy'])->name('supprimer.fonction');
Route::get('/editer.fonction/{id}', [FonctionController::class, 'edit'])->name('editer.fonction');
Route::post('/maj.fonction/{id}', [FonctionController::class, 'update'])->name('maj.fonction');

//Personnel controller
Route::get('/personnel',[PersonnelController::class,'index'])->name('index.personnel');
Route::post('personnel.save',[PersonnelController::class,'store'])->name('enregistrer.personnel');
Route::get('/supprimer.personnel/{id}', [PersonnelController::class, 'destroy'])->name('supprimer.personnel');
Route::get('/editer.personnel/{id}', [PersonnelController::class, 'edit'])->name('editer.personnel');
Route::post('/maj.personnel/{id}', [PersonnelController::class, 'update'])->name('maj.personnel');


//Foncperso
Route::get('/foncperso',[FonctionPersonnelController::class,'index'])->name('index.foncperso');
