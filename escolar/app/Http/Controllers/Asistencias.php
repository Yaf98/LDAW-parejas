<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\alumno;

class Asistencias extends Controller
{
    public function index()
    {
        //$asistencias = alumno::get();
        $asistencias = DB::table('alumno')->where('asistencia','=','1')->get();
        return view('asistencias', ['asistencias' => $asistencias]);
    }
}
