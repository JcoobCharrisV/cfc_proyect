<?php

use App\Mail\ProximaCitaMailable;
use Illuminate\Support\Facades\Mail;
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
    return view('auth.login');
});

Auth::routes();

//RUTAS PACIENTES
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/paciente/perfil/{id}', [App\Http\Controllers\PacienteController::class, 'index'])->name('paciente.perfil');
Route::get('/proceso/mantenimiento', [App\Http\Controllers\PacienteController::class, 'cargarDatos'])->name('mantenimiento.perfil');
Route::post('/proceso/mantenimiento', [App\Http\Controllers\PacienteController::class, 'sendData'])->name('mantenimiento.perfil');
Route::get('/calculo/fecha', [App\Http\Controllers\PacienteController::class, 'fecha'])->name('mantenimiento.calculo.fecha');

Route::get('/combo/tra/doc', [App\Http\Controllers\PacienteController::class, 'buscar_doctores'])->name('mantenimiento.combo.tra.doc');
Route::get('/combo/doc/tra', [App\Http\Controllers\PacienteController::class, 'buscar_tratamientos'])->name('mantenimiento.combo.doc.tra');

//RUTA CALENDARIO
Route::get('/calendario', [App\Http\Controllers\CalendarioController::class, 'index'])->name('calendario');


//RUTA PDF
Route::get('/g/pdf/{id}', [App\Http\Controllers\PacienteController::class, 'gestion'])->name('pdf.gestion');

//RUTA EMAIL
 Route::get('/mantenimiento.ver', function (){

    $correo = new ProximaCitaMailable;
    Mail::to('jcoobdavidcharrisv@gmail') ->send($correo);

    return ("proceso/mantenimiento");
});
     



