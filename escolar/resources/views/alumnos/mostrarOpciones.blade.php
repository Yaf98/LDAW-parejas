@extends('layouts.app')

@section('title')
    SISTEMA DE GRADUACIONES
@endsection

@section('content')
    <h1>SISTEMA DE GRADUACIONES</h1>
                
    <div class="mt-5">
        <a href="/alumnos/chequearEvento" class="btn btn-success my-2 mr-4">Registrar Asistencia</a>
        <a href="/alumnos/buscar" class="btn btn-primary my-2">Buscar Alumno</a>
    </div>
@endsection