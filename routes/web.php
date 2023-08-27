<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
//use App\Http\Controllers\Facultades;

use App\Http\Controllers\Estudiantes;
use App\Http\Controllers\Calificaciones;
use App\Http\Controllers\Profesores;
//use App\Http\Controllers\Generales;
use App\Http\Controllers\Personas\Personaspersonas;

//controladores Personas

use App\Http\Controllers\Personas\EstadoFormacion;
use App\Http\Controllers\Personas\FormacionAcademica;
use App\Http\Controllers\Personas\InstitucionFormacion;
use App\Http\Controllers\Personas\NivelEstudio;
use App\Http\Controllers\Personas\TipoIdentificacion;
use App\Http\Controllers\Personas\Titulo;
use App\Http\Controllers\Generales\Programas;
//controladores generales
use App\Http\Controllers\Generales\Ciudad;
use App\Http\Controllers\Generales\Departamento;
use App\Http\Controllers\Generales\Facultades;
use App\Http\Controllers\Generales\Paises;
use App\Http\Controllers\Generales\Sedes;

//controladores semilleros
use App\Http\Controllers\Semilleros\Semillero;
use App\Http\Controllers\Semilleristas\Semillerista;
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
//facultades
Route::get('/facultades/listado', [Facultades::class, 'index'])->name('listadoFac');
Route::get('/facultades/registrar', [Facultades::class, 'form_registro']);
Route::post('/facultades/registrar', [Facultades::class, 'registrar']);
Route::get('/facultades/eliminar/{id}', [Facultades::class, 'eliminar'])->name('eliminaFac');
Route::get('/facultades/editar/{id}',[Facultades::class, 'form_editar'])->name('editarFac');
Route::post('/facultad/editarfacultad', [Facultades::class, 'editarfacultad']);
 ///programas
Route::get('/programas/listado', [programas::class, 'programa']);
Route::post('/programa/insertarprograma', [programas::class, 'insertarprograma']);
Route::get('/programa/programaform', [programas::class, 'formularioprograma']);
Route::get('/programa/editarprograma/{id}', [programas::class, 'editarprograma']);
Route::get('/programa/eliminarprograma/{id}', [programas::class, 'eliminarprograma']);
Route::post('/programa/guardaredicionprograma', [programas::class, 'guardaredicionprograma']);

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



Route::get('/regnotas/listado', [Calificaciones::class, 'index']);

///personas



Route::get('/personas/nivelestudio', [NivelEstudio::class, 'nivelestudio']);
Route::get('/personas/tipoidentificacion', [TipoIdentificacion::class, 'tipoidentificacion']);
//Route::get('/personas/titulo', [Titulo::class, 'titulo']);

///generales pedro//ciudad
Route::get('/generales/ciudad', [Ciudad::class, 'ciudad']);
Route::post('/ciudad/insertarciudad', [Ciudad::class, 'insertarciudad']);
Route::get('/ciudad/ciudadform', [Ciudad::class, 'form_registro']);
Route::get('/ciudad/editarciudad/{id}', [Ciudad::class, 'editarciudad']);
Route::get('/ciudad/eliminarciudad/{id}', [Ciudad::class, 'eliminarciudad']);
Route::post('/ciudad/guardaredicionciudad', [Ciudad::class, 'guardaredicionciudad']);


//titulo
Route::get('/personas/titulo', [Titulo::class, 'titulo']);
Route::get('/titulo/titulospornivel/{id}', [Titulo::class, 'getTituloPorIdNivel']);
Route::get('/titulo/registrar', [Titulo::class, 'formulariotitulo']);
Route::post('/titulo/insertartitulo', [Titulo::class, 'insertartitulo']);
Route::get('/titulo/editar/{id}', [Titulo::class, 'editartitulo']);
Route::get('/titulo/eliminar/{id}', [Titulo::class, 'eliminartitulo']);
Route::post('/titulo/guardaredicion', [Titulo::class, 'guardarediciontitulo']);

//nivel estudio 

//Route::get('/personas/titulo', [Titulo::class, 'titulo']);
Route::get('/nivelestudio/registrarnivelestudio', [Nivelestudio::class, 'formularionivelestudio']);
Route::post('/nivelestudio/insertarnivelestudio', [Nivelestudio::class, 'insertarnivelestudio']);
Route::get('/nivelestudio/editarnivelestudio/{id}', [Nivelestudio::class, 'editartitulo']);
Route::get('/nivelestudio/eliminarnivelestudio/{id}', [Nivelestudio::class, 'eliminartitulo']);
Route::post('/nivelestudio/guardaredicionnivelestudio', [Nivelestudio::class, 'guardarediciontitulo']);
//paises luis
Route::get('/generales/pais/agregar', [Paises::class, 'form_registro'])->name('paises');
Route::post('/generales/pais/agregar', [Paises::class, 'registrar'])->name('addpais');
Route::post('/generales/pais/saveeditar',[Paises::class, 'saveeditar']);
Route::get('/generales/pais/editar/{id}',[Paises::class, 'form_editar'])->name('editarpais');
Route::get('/generales/pais/eliminar/{id}', [Paises::class, 'eliminar'])->name('eliminapais');
Route::get('/generales/pais', [Paises::class, 'index'])->name('listapais');;

//departamentos juanjose
Route::get('/generales/departamento', [Departamento::class, 'departamento']);
Route::get('/generales/reg_departamento', [Departamento::class, 'formulario_depa']);
Route::post('/generales/reg_depa', [Departamento::class, 'registrar_dep']);
Route::get('/generales/generales/reg_departamento', [Departamento::class, 'formulario_depa']);
Route::get('/departamento/editar/{id}', [Departamento::class, 'editar']);
Route::get('/departamento/eliminar/{id}', [Departamento::class, 'eliminar']);
Route::post('/generales/editar_depa', [Departamento::class, 'editar_depa']);
//sedes yasson
//Route::get('/generales/pais', [Pais::class, 'pais']);
Route::get('/generales/sedes', [Sedes::class, 'sedes']);
Route::post('/sedes/insertar', [Sedes::class, 'insertar']);
Route::get('/sedes/sedesform', [Sedes::class, 'formulariosedes']);
Route::get('/sedes/editar/{id}', [Sedes::class, 'editar']);
Route::get('/sedes/eliminar/{id}', [Sedes::class, 'eliminar']);
Route::post('/sedes/guardaredicion', [Sedes::class, 'guardaredicion']);

//estadoformacion
Route::get('/personas/estadoformacion', [EstadoFormacion::class, 'estadoformacion']);
Route::post('/estadoformacion/insertarestadoformacion', [EstadoFormacion::class, 'insertarestadoformacion']);
Route::get('/estadoformacion/estadoformacionform', [EstadoFormacion::class, 'formularioestadoformacion']);
Route::get('/estadoformacion/editarestadoformacion/{id}', [EstadoFormacion::class, 'editarestadoformacion']);
Route::get('/estadoformacion/eliminarestadoformacion/{id}', [EstadoFormacion::class, 'eliminarestadoformacion']);
Route::post('/estadoformacion/guardaredicionestadoformacion', [EstadoFormacion::class, 'guardaredicionestadoformacion']);

//institucion fromacion
Route::get('/personas/institucionformacion', [InstitucionFormacion::class, 'institucionformacion']);
Route::post('/institucionformacion/insertarinstitucionformacion', [Institucionformacion::class, 'insertarinstitucionformacion']);
Route::get('/institucionformacion/institucionformacionform', [Institucionformacion::class, 'formularioinstitucionformacion']);
Route::get('/institucionformacion/editarinstitucionformacion/{id}', [Institucionformacion::class, 'editarinstitucionformacion']);
Route::get('/institucionformacion/eliminarinstitucionformacion/{id}', [Institucionformacion::class, 'eliminarinstitucionformacion']);
Route::post('/institucionformacion/guardaredicioninstitucionformacion', [Institucionformacion::class, 'guardaredicioninstitucionformacion']);

//formacionacademica
Route::get('/personas/formacionacademica/{id}', [FormacionAcademica::class, 'formacionacademica']);
Route::post('/formacionacademica/insertarformacionacademica', [Formacionacademica::class, 'insertarformacionacademica']);
Route::get('/formacionacademica/formacionacademicaform/{id}', [Formacionacademica::class, 'formularioformacionacademica']);
Route::get('/formacionacademica/editarformacionacademica/{id}', [Formacionacademica::class, 'editarformacionacademica']);
Route::get('/formacionacademica/eliminarformacionacademica/{id}', [Formacionacademica::class, 'eliminarformacionacademica']);
Route::post('/formacionacademica/guardaredicionformacionacademica', [Formacionacademica::class, 'guardaredicionformacionacademica']);

//personas
Route::get('/personas/formacionacademica', [FormacionAcademica::class, 'formacionacademica']);

//tipo identificacion
Route::get('/personas/tipoidentificacion', [Tipoidentificacion::class, 'tipoidentificacion']);
Route::post('/tipoidentificacion/insertartipoidentificacion', [Tipoidentificacion::class, 'insertartipoidentificacion']);
Route::get('/tipoidentificacion/tipoidentificacionform', [Tipoidentificacion::class, 'formulariotipoidentificacion']);
Route::get('/tipoidentificacion/editartipoidentificacion/{id}', [Tipoidentificacion::class, 'editartipoidentificacion']);
Route::get('/tipoidentificacion/eliminartipoidentificacion/{id}', [Tipoidentificacion::class, 'eliminartipoidentificacion']);
Route::post('/tipoidentificacion/guardarediciontipoidentificacion', [Tipoidentificacion::class, 'guardarediciontipoidentificacion']);


//personas/personas
Route::get('/personas/personas', [Personaspersonas::class, 'persona']);
Route::post('/persona/insertarpersona', [Personaspersonas::class, 'insertarpersona']);
Route::get('/persona/personaform', [Personaspersonas::class, 'formulariopersona']);
Route::get('/persona/editarpersona/{id}', [Personaspersonas::class, 'editarpersona']);
Route::get('/persona/eliminarpersona/{id}', [Personaspersonas::class, 'eliminarpersona']);
Route::post('/persona/guardaredicionpersona', [Personaspersonas::class, 'guardaredicionpersona']);

///semilleros 
Route::get('/semilleros/semillero', [Semillero::class, 'semillero']);
Route::post('/semillero/insertarsemillero', [Semillero::class, 'insertarsemillero']);
Route::get('/semillero/semilleroform', [Semillero::class, 'formulariosemillero']);
Route::get('/semillero/editarsemillero/{id}', [Semillero::class, 'editarsemillero']);
Route::get('/semillero/eliminarsemillero/{id}', [Semillero::class, 'eliminarsemillero']);
Route::post('/semillero/guardaredicionsemillero', [Semillero::class, 'guardaredicionsemillero']);

//semillerista
Route::get('/semilleristas/semillerista', [Semillerista::class, 'semillerista']);
/*Route::post('/semillero/insertarsemillero', [Semillerista::class, 'insertarsemillero']);
Route::get('/semillero/semilleroform', [Semillerista::class, 'formulariosemillero']);
Route::get('/semillero/editarsemillero/{id}', [Semillerista::class, 'editarsemillero']);
Route::get('/semillero/eliminarsemillero/{id}', [Semillerista::class, 'eliminarsemillero']);
Route::post('/semillero/guardaredicionsemillero', [Semillerista::class, 'guardaredicionsemillero']);*/



