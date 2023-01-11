<?php

use App\Mail\ProximaCitaMailable;
use Illuminate\Support\Facades\Auth;
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

//RUTAS HOME
Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

//RUTA CONTACTABILIDAD
Route::post('/home/enviar/{id}', [App\Http\Controllers\HomeController::class, 'store'])->name('home.enviar');


//RUTAS PACIENTES
Route::get('/paciente/perfil/{id}', [App\Http\Controllers\PacienteController::class, 'index'])->name('paciente.perfil');
Route::get('/proceso/mantenimiento', [App\Http\Controllers\PacienteController::class, 'cargarDatos'])->name('mantenimiento.perfil');
Route::post('/proceso/mantenimiento', [App\Http\Controllers\PacienteController::class, 'sendData'])->name('mantenimiento.perfil');
Route::get('/calculo/fecha', [App\Http\Controllers\PacienteController::class, 'fecha'])->name('mantenimiento.calculo.fecha');
Route::post('/cita/enviar', [App\Http\Controllers\PacienteController::class, 'proximacita'])->name('cita.enviar');

//RUTAS USUARIOS
Route::get('/usuarios', [App\Http\Controllers\UserController::class, 'index'])->name('usuarios');
Route::post('/usuarios/enviar', [App\Http\Controllers\UserController::class, 'store'])->name('usuarios.enviar');
Route::put('/usuarios/update/{id}', [App\Http\Controllers\UserController::class, 'update'])->name('usuarios.update');

//RUTAS COMBO BOX GESTION - MANTENIMIENTO
Route::get('/combo/tra/doc', [App\Http\Controllers\PacienteController::class, 'buscar_doctores'])->name('mantenimiento.combo.tra.doc');
Route::get('/combo/doc/tra', [App\Http\Controllers\PacienteController::class, 'buscar_tratamientos'])->name('mantenimiento.combo.doc.tra');

//RUTA CALENDARIO
Route::get('/calendario', [App\Http\Controllers\CalendarioController::class, 'index'])->name('calendario');
Route::post('/calendario/enviar/', [App\Http\Controllers\CalendarioController::class, 'store'])->name('calendario.enviar');

//RUTAS PDF
Route::get('/g/pdf/{id}', [App\Http\Controllers\PacienteController::class, 'gestion'])->name('pdf.gestion');

//RUTAS CRUD PACIENTES
Route::get('/paciente', [App\Http\Controllers\PacienteController::class, 'create'])->name('paciente');
Route::post('/paciente/enviar', [App\Http\Controllers\PacienteController::class, 'store'])->name('paciente.enviar');
Route::delete('/paciente/delete/{id}', [App\Http\Controllers\PacienteController::class, 'destroy'])->name('paciente.delete');
Route::put('/paciente/update/{id}', [App\Http\Controllers\PacienteController::class, 'update'])->name('paciente.update');
Route::post('/proxima/enviar/{id}', [App\Http\Controllers\PacienteController::class, 'enviarcita'])->name('proxima.enviar');

//RUTAS DOCTORES
Route::get('/doctores', [App\Http\Controllers\DoctoresController::class, 'index'])->name('doctores');
Route::post('/doctores/enviar', [App\Http\Controllers\DoctoresController::class, 'store'])->name('doctores.enviar');
Route::delete('/doctores/delete/{id}', [App\Http\Controllers\DoctoresController::class, 'destroy'])->name('doctores.delete');
Route::put('/doctores/update/{id}', [App\Http\Controllers\DoctoresController::class, 'update'])->name('doctor.update');


//RUTAS CONTRATOS
Route::get('/cfc', [App\Http\Controllers\ContratosController::class, 'index'])->name('cfc');
Route::post('/cfc/enviar', [App\Http\Controllers\ContratosController::class, 'store'])->name('cfc.enviar');
Route::put('/cfc/update/{id}', [App\Http\Controllers\ContratosController::class, 'update'])->name('cfc.update');
Route::delete('/cfc/delete/{id}', [App\Http\Controllers\ContratosController::class, 'destroy'])->name('cfc.delete');


//RUTAS SERVICIOS
Route::get('/servicios', [App\Http\Controllers\EspecialidadesController::class, 'create'])->name('servicios');
Route::post('/servicios/enviar', [App\Http\Controllers\EspecialidadesController::class, 'store'])->name('servicios.enviar');
Route::delete('/servicios/delete/{id}', [App\Http\Controllers\EspecialidadesController::class, 'destroy'])->name('servicios.delete');
Route::put('/servicios/update/{id}', [App\Http\Controllers\EspecialidadesController::class, 'update'])->name('servicios.update');

//RUTAS TRATAMIENTO
Route::get('/tratamiento', [App\Http\Controllers\TratamientosController::class, 'index'])->name('tratamiento');
Route::post('/tratamiento/enviar', [App\Http\Controllers\TratamientosController::class, 'store'])->name('tratamiento.enviar');
Route::put('/tratamiento/update/{id}', [App\Http\Controllers\TratamientosController::class, 'update'])->name('tratamiento.update');
Route::delete('/tratamiento/delete/{id}', [App\Http\Controllers\TratamientosController::class, 'destroy'])->name('tratamiento.delete');

//RUTAS  TIPO TRATAMIENTO
Route::get('/tipo', [App\Http\Controllers\Tipos_tratamientosController::class, 'index'])->name('tipo');
Route::post('/tipo/enviar', [App\Http\Controllers\Tipos_tratamientosController::class, 'store'])->name('tipo.enviar');
Route::delete('/tipo/delete/{id}', [App\Http\Controllers\Tipos_tratamientosController::class, 'destroy'])->name('tipo.delete');
Route::put('/tipo/update/{id}', [App\Http\Controllers\Tipos_tratamientosController::class, 'update'])->name('tipo.update');

//RUTAS CONVENIO
Route::get('/convenios', [App\Http\Controllers\ConveniosController::class, 'index'])->name('convenios');
Route::post('/convenios/enviar', [App\Http\Controllers\ConveniosController::class, 'store'])->name('convenios.create');
Route::put('/convenios/update/{id}', [App\Http\Controllers\ConveniosController::class, 'update'])->name('convenios.update');
Route::delete('/convenios/delete/{id}', [App\Http\Controllers\ConveniosController::class, 'destroy'])->name('convenios.delete');

//RUTAS EPS
Route::get('/eps', [App\Http\Controllers\EpsController::class, 'index'])->name('eps');
Route::post('/eps/enviar', [App\Http\Controllers\EpsController::class, 'store'])->name('eps.enviar');
Route::put('/eps/update/{id}', [App\Http\Controllers\EpsController::class, 'update'])->name('eps.update');
Route::delete('/eps/delete/{id}', [App\Http\Controllers\EpsController::class, 'destroy'])->name('eps.delete');


//RUTAS TIPIFICACIONES
Route::get('/tipificacion', [App\Http\Controllers\TipificacionesController::class, 'index'])->name('tipificacion');
Route::post('/tipificacion/enviar', [App\Http\Controllers\TipificacionesController::class, 'store'])->name('tipificacion.enviar');
Route::put('/tipificacion/update/{id}', [App\Http\Controllers\TipificacionesController::class, 'update'])->name('tipificacion.update');
Route::delete('/tipificacion/delete/{id}', [App\Http\Controllers\TipificacionesController::class, 'destroy'])->name('tipificacion.delete');

//RUTAS PASOS
Route::get('/pasos', [App\Http\Controllers\PastratamientoController::class, 'index'])->name('pasos');
Route::post('/pasos/enviar', [App\Http\Controllers\PastratamientoController::class, 'store'])->name('pasos.enviar');
Route::put('/pasos/update/{id}', [App\Http\Controllers\PastratamientoController::class, 'update'])->name('pasos.update');
Route::delete('/pasos/delete/{id}', [App\Http\Controllers\PastratamientoController::class, 'destroy'])->name('pasos.delete');

//RUTAS ROLES
Route::get('/roles', [App\Http\Controllers\RolController::class, 'index'])->name('roles');
Route::post('/roles/enviar', [App\Http\Controllers\RolController::class, 'store'])->name('roles.enviar');
Route::patch('/roles/update/{id}', [App\Http\Controllers\RolController::class, 'update'])->name('UpdateRol');
Route::delete('/roles/delete/{id}', [App\Http\Controllers\RolController::class, 'destroy'])->name('BorrarRol');


//RUTA EMAIL
 Route::get('/mantenimiento.ver', function (){

    $correo = new ProximaCitaMailable;
    Mail::to('jcoobdavidcharrisv@gmail') ->send($correo);

    return ("proceso/mantenimiento");
});
     


         
