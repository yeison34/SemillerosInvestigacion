<?php

use App\Http\Controllers\Personas\Correo;
use App\Http\Controllers\Personas\Telefono;
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
use App\Http\Controllers\Auth\Auth;


//controladores
use App\Http\Controllers\Monitores\Monitor;

//proyectos
use App\Http\Controllers\Proyectos\Tipoproyecto;
use App\Http\Controllers\Proyectos\Estadoproyecto;
use App\Http\Controllers\Coordinadores\Coordinador;
//contradores eventos
use App\Http\Controllers\Eventos\Tipo;

use App\Http\Controllers\Eventos\Clasificacion;
use App\Http\Controllers\Eventos\Modalidad;
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

// Route::get('/', function () {
//     return view('auth.login');
// });

// Route::get('/dashboard', [HomeController::class, 'index']);
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



// login
Route::get('/', [Auth::class, 'login'])->name('login');
Route::get('/login', [Auth::class, 'userlogin'])->name('userlogin');

Route::middleware('autorizacion')->group(function () {
    ///personas
    Route::get('/personas/nivelestudio', [NivelEstudio::class, 'nivelestudio']);
    Route::get('/personas/tipoidentificacion', [TipoIdentificacion::class, 'tipoidentificacion']);
    //Route::get('/personas/titulo', [Titulo::class, 'titulo']);
//});
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
//titulo
Route::get('/personas/titulo', [Titulo::class, 'titulo']);
Route::get('/titulo/titulospornivel/{id}', [Titulo::class, 'getTituloPorIdNivel']);
Route::get('/titulo/registrartitulo', [Titulo::class, 'formulariotitulo']);
Route::post('/titulo/insertartitulo', [Titulo::class, 'insertartitulo']);
Route::get('/titulo/editartitulo/{id}', [Titulo::class, 'editartitulo']);
Route::get('/titulo/eliminartitulo/{id}', [Titulo::class, 'eliminartitulo']);
Route::post('/titulo/guardarediciontitulo', [Titulo::class, 'guardarediciontitulo']);

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
    Route::get('/generales/pais', [Paises::class, 'index'])->name('listapais');
    Route::get('/generales/pais/cerrar', [Paises::class, 'cerrarSesion']);

//Route::get('/personas/titulo', [Titulo::class, 'titulo']);
Route::get('/nivelestudio/registrarnivelestudio', [Nivelestudio::class, 'formularionivelestudio']);
Route::post('/nivelestudio/insertarnivelestudio', [Nivelestudio::class, 'insertarnivelestudio']);
Route::get('/nivelestudio/editarnivelestudio/{id}', [Nivelestudio::class, 'editarnivelestudio']);
Route::get('/nivelestudio/eliminarnivelestudio/{id}', [Nivelestudio::class, 'eliminarnivelestudio']);
Route::post('/nivelestudio/guardaredicionnivelestudio', [Nivelestudio::class, 'guardaredicionnivelestudio']);
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
//personas
Route::get('/personas/formacionacademica', [FormacionAcademica::class, 'formacionacademica']);


//personas/telefono
Route::get('/personas/telefono/{id}', [Telefono::class, 'telefono']);
Route::post('/telefono/insertartelefono', [Telefono::class, 'insertartelefono']);
Route::get('/telefono/telefonoform/{id}', [Telefono::class, 'formulariotelefono']);
Route::get('/telefono/editartelefono/{id}', [Telefono::class, 'editartelefono']);
Route::post('/telefono/guardarediciontelefono', [Telefono::class, 'guardarediciontelefono']);
Route::get('/telefono/eliminartelefono/{id}', [Telefono::class, 'eliminartelefono']);

//Persona/Correo
Route::get('/personas/correo/{id}', [Correo::class, 'correo']);
Route::get('/correo/correoform/{id}', [Correo::class, 'formulariocorreo']);
Route::post('/correo/insertarcorreo', [Correo::class, 'insertarcorreo']);
Route::get('/correo/editarcorreo/{id}', [Correo::class, 'editarcorreo']);
Route::post('/correo/guardaredicioncorreo', [Correo::class, 'guardaredicioncorreo']);
Route::get('/correo/eliminarcorreo/{id}', [Correo::class, 'eliminarcorreo']);


//Eventos/tipos
Route::get('/eventos/tipos', [Tipo::class, 'tipoevento']);
Route::get('/tipos/tipoeventoform', [Tipo::class, 'formulariotipoevento']);
Route::post('/tipos/insertartipoevento', [Tipo::class, 'insertartipoevento']);
Route::get('/tipos/editartipoevento/{id}', [Tipo::class, 'editartipoevento']);
Route::post('/tipos/guardarediciontipoevento', [Tipo::class, 'guardarediciontipoevento']);
Route::get('/tipos/eliminartipoevento/{id}', [Tipo::class, 'eliminartipoevento']);

//Eventos/tipos
Route::get('/eventos/tipos', [Tipo::class, 'tipoevento']);
Route::get('/tipos/tipoeventoform', [Tipo::class, 'formulariotipoevento']);
Route::post('/tipos/insertartipoevento', [Tipo::class, 'insertartipoevento']);
Route::get('/tipos/editartipoevento/{id}', [Tipo::class, 'editartipoevento']);
Route::post('/tipos/guardarediciontipoevento', [Tipo::class, 'guardarediciontipoevento']);
Route::get('/tipos/eliminartipoevento/{id}', [Tipo::class, 'eliminartipoevento']);

//Eventos/modalidad
Route::get('/eventos/modalidad', [Modalidad::class, 'modalidadevento']);
Route::get('/modalidad/modalidadeventoform', [Modalidad::class, 'formulariomodalidadevento']);
Route::post('/modalidad/insertarmodalidadevento', [Modalidad::class, 'insertarmodalidadevento']);
Route::get('/modalidad/editarmodalidadevento/{id}', [Modalidad::class, 'editarmodalidadevento']);
Route::post('/modalidad/guardaredicionmodalidadevento', [Modalidad::class, 'guardaredicionmodalidadevento']);
Route::get('/modalidad/eliminarmodalidadevento/{id}', [Modalidad::class, 'eliminarmodalidadevento']);

//Eventos/Clasificacion
Route::get('/eventos/clasificacion', [Clasificacion::class, 'clasificacionevento']);
Route::get('/clasificacion/clasificacioneventoform', [Clasificacion::class, 'formularioclasificacionevento']);
Route::post('/clasificacion/insertarclasificacionevento', [Clasificacion::class, 'insertarclasificacionevento']);
Route::get('/clasificacion/editarclasificacionevento/{id}', [Clasificacion::class, 'editarclasificacionevento']);
Route::post('/clasificacion/guardaredicionclasificacionevento', [Clasificacion::class, 'guardaredicionclasificacionevento']);
Route::get('/clasificacion/eliminarclasificacionevento/{id}', [Clasificacion::class, 'eliminarclasificacionevento']);











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
///semilleros
Route::get('/semilleros/semillero', [Semillero::class, 'semillero']);
Route::post('/semillero/insertarsemillero', [Semillero::class, 'insertarsemillero']);
Route::get('/semillero/semilleroform', [Semillero::class, 'formulariosemillero']);
Route::get('/semillero/editarsemillero/{id}', [Semillero::class, 'editarsemillero']);
Route::get('/semillero/eliminarsemillero/{id}', [Semillero::class, 'eliminarsemillero']);
Route::post('/semillero/guardaredicionsemillero', [Semillero::class, 'guardaredicionsemillero']);

//semillerista
Route::get('/semilleristas/semillerista', [Semillerista::class, 'semillerista']);
Route::post('/semillerista/insertarsemillerista', [Semillerista::class, 'insertarsemillerista']);
Route::get('/semillerista/semilleristaform', [Semillerista::class, 'formulariosemillerista']);
Route::get('/semillerista/editarsemillerista/{id}', [Semillerista::class, 'editarsemillerista']);
Route::get('/semillerista/eliminarsemillerista/{id}', [Semillerista::class, 'eliminarsemillerista']);
Route::post('/semillerista/guardaredicionsemillerista', [Semillerista::class, 'guardaredicionsemillerista']);

///monitores
Route::get('/monitores/monitor', [Monitor::class, 'monitor']);
Route::post('/monitor/insertarmonitor', [Monitor::class, 'insertarmonitor']);
Route::get('/monitor/monitorform', [Monitor::class, 'formulariomonitor']);
Route::get('/monitor/editarmonitor/{id}', [Monitor::class, 'editarmonitor']);
Route::get('/monitor/eliminarmonitor/{id}', [Monitor::class, 'eliminarmonitor']);
Route::post('/monitor/guardaredicionmonitor', [Monitor::class, 'guardaredicionmonitor']);

//proyectos
//tipo proyecto
Route::get('/tipoproyectos/tipoproyecto', [Tipoproyecto::class, 'tipoproyecto']);
Route::post('/tipoproyecto/insertartipoproyecto', [Tipoproyecto::class, 'insertartipoproyecto']);
Route::get('/tipoproyecto/tipoproyectoform', [Tipoproyecto::class, 'formulariotipoproyecto']);
Route::get('/tipoproyecto/editartipoproyecto/{id}', [Tipoproyecto::class, 'editartipoproyecto']);
Route::get('/tipoproyecto/eliminartipoproyecto/{id}', [Tipoproyecto::class, 'eliminartipoproyecto']);
Route::post('/tipoproyecto/guardarediciontipoproyecto', [Tipoproyecto::class, 'guardarediciontipoproyecto']);

Route::get('/estadoproyectos/estadoproyecto', [Estadoproyecto::class, 'estadoproyecto']);
Route::post('/estadoproyecto/insertarestadoproyecto', [Estadoproyecto::class, 'insertarestadoproyecto']);
Route::get('/estadoproyecto/estadoproyectoform', [Estadoproyecto::class, 'formularioestadoproyecto']);
Route::get('/estadoproyecto/editarestadoproyecto/{id}', [Estadoproyecto::class, 'editarestadoproyecto']);
Route::get('/estadoproyecto/eliminarestadoproyecto/{id}', [Estadoproyecto::class, 'eliminarestadoproyecto']);
Route::post('/estadoproyecto/guardaredicionestadoproyecto', [Estadoproyecto::class, 'guardaredicionestadoproyecto']);

//coordinadores
Route::get('/coordinadores/coordinador', [Coordinador::class, 'coordinador']);
Route::post('/coordinadores/insertarcoordinador', [Coordinador::class, 'insertarcoordinador']);
Route::get('/coordinadores/coordinadorform', [Coordinador::class, 'formulariocoordinador']);
Route::get('/coordinadores/editarcoordinador/{id}', [Coordinador::class, 'editarcoordinador']);
Route::get('/coordinadores/generarpdf', [Coordinador::class, 'crearpdf']);
Route::post('/coordinadores/guardaredicioncoordinador', [Coordinador::class, 'guardaredicioncoordinador']);
});
