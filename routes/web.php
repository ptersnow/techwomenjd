<?php

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

use App\Http\Controllers\EventController;

Route::get('/', [EventController::class, 'Home']);
Route::get('/events/Sobre', [EventController::class, 'Sobre']);
Route::get('/events/Pioneiras', [EventController::class, 'Pioneiras']);
Route::get('/events/Midias', [EventController::class, 'Midias']);
Route::get('/events/ada', [EventController::class, 'ada']);
 
/** rotas do formulario de vagas e network */
Route::post('/events', [EventController::class, 'store']);
Route::get('/events/formvaga', [EventController::class, 'formvaga']);
Route::get('/events/Network', [EventController::class, 'Network']);

/** rotas do formulario de chat */
Route::post('/coments', [EventController::class, 'stor']);
Route::get('/events/Chat', [EventController::class, 'Chat']);

/** rotas do formulario de email */
Route::post('/peoples', [EventController::class, 'storee']);
Route::get('/events/Aviso', [EventController::class, 'Aviso']);


Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');
