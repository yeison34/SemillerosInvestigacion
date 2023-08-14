<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\Facultades;
use App\Http\Controllers\Programas;
use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Profesores;
use App\Http\Controllers\Generales;
//use App\Http\Controllers\Personas;

//controladores Personas

use App\Http\Controllers\Personas\EstadoFormacion;
use App\Http\Controllers\Personas\FormacionAcademica;
use App\Http\Controllers\Personas\InstitucionFormacion;
use App\Http\Controllers\Personas\NivelEstudio;
use App\Http\Controllers\Personas\TipoIdentificacion;
use App\Http\Controllers\Personas\Titulo;

//controladores generales
use App\Http\Controllers\Generales\Ciudad;
use App\Http\Controllers\Generales\Departamento;
use App\Http\Controllers\Generales\Pais;
use App\Http\Controllers\Generales\Sedes;


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

Route::get('/dashboard', [HomeController::class, 'index']);
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminaFac');
Route::get('/facultades/editar/{id}',[Facultades::class, 'form_editar'])->name('editarFac');
Route::post('/facultades/editar', [Facultades::class, 'editar']);

Route::get('/programas/listado', [Programas::class, 'index'])->name('listadoPro');
Route::get('/programas/registrar', [Programas::class, 'form_registro']);
Route::post('/programas/registrar', [Programas::class, 'registrar']);
Route::get('/programas/eliminar/{id}', [Programas::class, 'eliminar'])->name('eliminarPro');

Route::get('/profesores/listado', [Profesores::class, 'Listar_Profesores']);
Route::get('/profesores/listado', [Profesores::class, 'Listar_Profesores'])-> name('listadoPro');
Route::get('/profesores/formulario', [Profesores::class, 'Formulario_Profesores']);
Route::post('/profesores/registrar', [Profesores::class,'Registrar']);
Route::get('/profesores/eliminar/{id}',[Profesores::class, 'Eliminar'])->name('eliminarPro');



Route::get('/estudiantes/listado', [Estudiantes::class, 'Listar_Estudiantes']);
Route::get('/estudiantes/listado', [Estudiantes::class, 'Listar_Estudiantes'])->name('listadoEstu');
Route::get('/estudiantes/formulario', [Estudiantes::class, 'Formulario_Estudiantes']);
Route::post('/estudiantes/registrar',[Estudiantes::class, 'Registrar']);
Route::get('/estudiantes/eliminar/{id}',[Estudiantes::class, 'Eliminar'])->name('eliminarEstu');


Route::get('/programas/listado', [Programas::class, 'index']);

Route::get('/regnotas/listado', [Calificaciones::class, 'index']);

///personas
Route::get('/personas/estadoformacion', [EstadoFormacion::class, 'estadoformacion']);
Route::get('/personas/formacionacademica', [FormacionAcademica::class, 'formacionacademica']);
Route::get('/personas/institucionformacion', [InstitucionFormacion::class, 'institucionformacion']);
Route::get('/personas/nivelestudio', [NivelEstudio::class, 'nivelestudio']);
Route::get('/personas/tipoidentificacion', [TipoIdentificacion::class, 'tipoidentificacion']);
Route::get('/personas/titulo', [titulo::class, 'titulo']);

///generales
Route::get('/generales/ciudad', [Ciudad::class, 'ciudad']);
Route::get('/generales/departamento', [Departamento::class, 'departamento']);
Route::get('/generales/reg_departamento', [Departamento::class, 'formulario_depa']);
Route::post('/generales/reg_depa', [Departamento::class, 'registrar_dep']);
Route::get('/generales/pais', [Pais::class, 'pais']);
Route::get('/generales/sedes', [Sedes::class, 'sedes']);






