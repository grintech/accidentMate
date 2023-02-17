<?php
use Illuminate\Foundation\Auth\EmailVerificationRequest;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BackendPagesController;
use App\Http\Controllers\ProfessionController;
use App\Http\Controllers\RegisterationController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\LogoutController;
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



Auth::routes(['verify' => true]);
Route::get('/', [FrontendController::class, 'index'])->name('index');
Route::get('/registeration', [RegisterationController::class, 'index'])->name('registeration');
Route::post('/registeration-save', [RegisterationController::class, 'store'])->name('registeration_save');
Route::get('/logout', [LogoutController::class, 'index'])->name('logout_user');

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home')->middleware('verified');

Route::get('/dashboard', [BackendPagesController::class, 'index'])->name('dashboard')->middleware('verified');

/* Profession */

Route::get('/profession', [ProfessionController::class, 'index'])->name('profession')->middleware('verified');

Route::get('/profession-form', [ProfessionController::class, 'create'])->name('profession_form')->middleware('verified');

Route::post('/profession-save', [ProfessionController::class, 'store'])->name('profession_save')->middleware('verified');


Route::get('/profession-delete/{id}', [ProfessionController::class, 'destroy'])->name('profession_delete')->middleware('verified');

Route::get('/profession-edit/{id}', [ProfessionController::class, 'edit'])->name('profession_edit')->middleware('verified');

Route::post('/profession-update/{id}', [ProfessionController::class, 'update'])->name('profession_update')->middleware('verified');
