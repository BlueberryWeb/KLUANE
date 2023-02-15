<?php

use App\Http\Controllers\aboutController;
use App\Http\Controllers\contactController;
use App\Http\Controllers\cookiesController;
use App\Http\Controllers\drillingController;
use App\Http\Controllers\hseController;
use App\Http\Controllers\privacyController;
use App\Http\Controllers\termsController;
use App\Http\Controllers\workController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\nosotrosController;
use App\Http\Controllers\cookiesEspController;
use App\Http\Controllers\contactoController;
use App\Http\Controllers\perforacionController;
use App\Http\Controllers\privacidadController;
use App\Http\Controllers\terminosController;
use App\Http\Controllers\trabajaController;
use App\Http\Controllers\politicasHSEController;
use App\Http\Controllers\mailController;
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
    return view('welcome');
});
Route::get('about', aboutController::class, 'index')->name('about.index');
Route::get('privacy', privacyController::class, 'index')->name('privacy.index');
Route::get('hse', hseController::class, 'index')->name('hse.index');
Route::get('terms', termsController::class, 'index')->name('terms.index');
Route::get('cookies', cookiesController::class, 'index')->name('cookies.index');
Route::get('contact', contactController::class, 'index')->name('contact.index');
Route::get('drilling', drillingController::class, 'index')->name('drilling.index');
Route::get('work-with-us', workController::class, 'index')->name('work-with-us.index');
//Route::post('contacto', [contactoController::class, 'store'])->name('contacto.index');
Route::post('contacto', [mailController::class, 'store'])->name('contacto.index');
// RUTAS ESPAÑOL
Route::get('index', indexController::class, 'index')->name('indexEsp.index');
Route::get('nosotros', nosotrosController::class, 'index')->name('nosotros.index');
Route::get('cookiesEsp', cookiesEspController::class, 'index')->name('cookiesEsp.index');
Route::get('contacto', contactoController::class, 'index')->name('contacto.index');
Route::get('perforacion', perforacionController::class, 'index')->name('perforacion.index');
Route::get('privacidad', privacidadController::class, 'index')->name('privacidad.index');
Route::get('terminos', terminosController::class, 'index')->name('terminos.index');
Route::get('trabaja-con-nosotros', trabajaController::class, 'index')->name('trabaja-con-nosotros.index');
Route::get('politicasHSE', politicasHSEController::class, 'index')->name('politicasHSE.index');
