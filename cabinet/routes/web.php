<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PersonnalController;
use App\Http\Controllers\MedicamentController;
use App\Http\Controllers\TypeMedicamentController;

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
    return view('welcome');
});

Route::get('/admin', function () {
    return view('admin.index');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/caisse', function () {
    return view('caisse.index');
})->middleware(['auth', 'verified'])->name('caisse');




#pharmacie route



Route::get('/pharmacie', function () {
    return view('pharmacie.index');
})->middleware(['auth', 'verified'])->name('pharmacie');








#registration and login

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
Route::resource('personnals', PersonnalController::class);
Route::resource('categorie',TypeMedicamentController::class);
Route::resource('medicament',MedicamentController::class);

require __DIR__.'/auth.php';
