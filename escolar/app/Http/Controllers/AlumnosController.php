<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Alumno;
use App\Models\EventoAlumno;
use Illuminate\Support\Facades\DB;

class AlumnosController extends Controller{

    public function mostrarOpciones(Request $request){
        return view('alumnos.mostrarOpciones');
    }

    public function mostrarChequearForm(Request $request){
        return view('alumnos.chequearEvento');
    }

    public function mostrarListaAlumnos(Request $request){
        return view('alumnos.listaAlumnos');
    }

    public function chequearEvento(Request $request){
        $idAlumno = $request->idAlumno;
        if( !$idAlumno )
            return response()->json(['success' => false, 'error' => 'ID Alumno es requerido']);

        $alumno = Alumno::find($idAlumno);
        if( !$alumno )
            return response()->json(['success' => false, 'error' => 'No existe ningún alumno con ID: '.$idAlumno]);

        if( $alumno->asistencia )
            return response()->json(['success' => false, 'error' => 'El alumno ya tiene confirmada la asistencia']);

        $alumno->asistencia = 1;
        $alumno->save();

        return response()->json(['success' => true]);
    }

    public function mostrarBuscarLugarAlumno(Request $request){
        $idAlumno  = $request->idAlumno ?? NULL;
        $eventoalumnos = [];
        $showError = false;

        if( $idAlumno ){
            $eventoalumnos = EventoAlumno::whereIdAlumno($idAlumno)->get();

            if( count($eventoalumnos) == 0 )
                $showError = true;
        }

        return view('alumnos.buscarLugarAlumno', [
            'showError' => $showError,
            'eventoalumnos' => $eventoalumnos
        ]);
    }

    public function mostrarBuscarListaAlumnos(Request $request){
        $idAlumno  = $request->idAlumno ?? NULL;
        $eventoalumnos = [];
        $showError = false;

        if( $idAlumno ){
            $eventoalumnos = DB::table('alumno')->where('id_alumno','=',$idAlumno)->get();;

            if( count($eventoalumnos) == 0 )
                $showError = true;
        } else {
          $eventoalumnos = DB::table('alumno')->get();
        }

        return view('alumnos.listaAlumnos', [
            'showError' => $showError,
            'eventoalumnos' => $eventoalumnos
        ]);
    }
}
