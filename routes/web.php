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

//RUTAS COMBO BOX GESTION - MANTENIMIENTO
Route::get('/combo/tra/doc', [App\Http\Controllers\PacienteController::class, 'buscar_doctores'])->name('mantenimiento.combo.tra.doc');
Route::get('/combo/doc/tra', [App\Http\Controllers\PacienteController::class, 'buscar_tratamientos'])->name('mantenimiento.combo.doc.tra');

//RUTA CALENDARIO
Route::get('/calendario', [App\Http\Controllers\CalendarioController::class, 'index'])->name('calendario');

//RUTAS PDF
Route::get('/g/pdf/{id}', [App\Http\Controllers\PacienteController::class, 'gestion'])->name('pdf.gestion');

//RUTAS CRUD PACIENTES
Route::get('/paciente', [App\Http\Controllers\PacienteController::class, 'create'])->name('paciente');
Route::post('/paciente/enviar', [App\Http\Controllers\PacienteController::class, 'store'])->name('paciente.enviar');
Route::delete('/paciente/delete/{id}', [App\Http\Controllers\PacienteController::class, 'destroy'])->name('paciente.delete');
Route::put('/paciente/update/{id}', [App\Http\Controllers\PacienteController::class, 'update'])->name('paciente.update');

//RUTAS DOCTORES
Route::get('/doctores', [App\Http\Controllers\DoctoresController::class, 'index'])->name('doctores');
Route::post('/doctores/enviar', [App\Http\Controllers\DoctoresController::class, 'store'])->name('doctores.enviar');
Route::delete('/doctores/delete/{id}', [App\Http\Controllers\DoctoresController::class, 'destroy'])->name('doctor.delete');
Route::put('/doctores/update/{id}', [App\Http\Controllers\DoctoresController::class, 'update'])->name('doctor.update');



//RUTAS CONTRATO
Route::get('/cfc', [App\Http\Controllers\ContratosController::class, 'index'])->name('cfc');




//RUTAS SERVICIOS
Route::get('/servicios', [App\Http\Controllers\ServiciosController::class, 'create'])->name('servicios');
Route::post('/servicios/enviar', [App\Http\Controllers\ServiciosController::class, 'store'])->name('servicios.enviar');
Route::delete('/servicios/delete/{id}', [App\Http\Controllers\ServiciosController::class, 'destroy'])->name('servicios.delete');
Route::put('/servicios/update/{id}', [App\Http\Controllers\ServiciosController::class, 'update'])->name('servicios.update');

//RUTAS TRATAMIENTO
Route::get('/tratamiento', [App\Http\Controllers\TratamientosController::class, 'index'])->name('tratamiento');
Route::post('/tratamiento/enviar', [App\Http\Controllers\TratamientosController::class, 'store'])->name('tratamiento.enviar');
Route::put('/tratamiento/update/{id}', [App\Http\Controllers\TratamientosController::class, 'update'])->name('tratamiento.update');

//RUTAS  TIPO TRATAMIENTO
Route::get('/tipo', [App\Http\Controllers\Tipos_tratamientosController::class, 'index'])->name('tipo');
Route::post('/tipo/enviar', [App\Http\Controllers\Tipos_tratamientosController::class, 'store'])->name('tipo.enviar');
Route::delete('/tipo/delete/{id}', [App\Http\Controllers\Tipos_tratamientosController::class, 'destroy'])->name('tipo.delete');
Route::put('/tipo/update/{id}', [App\Http\Controllers\Tipos_tratamientosController::class, 'update'])->name('tipo.update');


//RUTA EMAIL
 Route::get('/mantenimiento.ver', function (){

    $correo = new ProximaCitaMailable;
    Mail::to('jcoobdavidcharrisv@gmail') ->send($correo);

    return ("proceso/mantenimiento");
});
     



