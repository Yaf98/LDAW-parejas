@extends('layouts.app')

@section('title')
    Alumnos
@endsection

@section('content')

@if (session('status'))
    <div class="col-md-6 alert alert-success">
        {{ session('status') }}
    </div>
@endif
    <h1>Alumnos</h1>

    <div class="row mt-5">
        <div class="col-md-6 m-auto">
            <form id="formulario" method="GET" action="/alumnos/buscar-alumnos">
                <div class="form-group">
                    <label for="idAlumno"> Buscar alumno </label>
                    <input id="idAlumno" name="idAlumno" class="form-control" value="{{ request()->id_alumno ?? '' }}"/>
                </div>
                <div class="form-group">
                    <button class="btn btn-success btn-block">
                        Enter
                    </button>
                </div>
                @if( $showError )
                    <div class="alert alert-danger"> No existe el alumno buscado </div>
                @endif
            </form>

            @if( count($eventoalumnos) > 0 )
                <div class="">
                    <h5> Alumnos </h5>
                    <ul class="list-group">
                        @foreach( $eventoalumnos as $ea )
                            <li class="list-group-item">ID:{{ $ea->id_alumno }}</li>
                            <li class="list-group-item">Nombre:{{ $ea->nombre_alumno }}</li>
                            <li class="list-group-item">Promedio:{{ $ea->promedio }}</li>
                            <li class="list-group-item">Carrera:{{ $ea->carrera }}</li>
                            <li class="list-group-item">Mención honorífica:{{ $ea->mencion_honorifica }}</li>
                            <li class="list-group-item">Mención honorífica de excelencia:{{ $ea->mencion_excelencia }}</li>
                            <li class="list-group-item">Asistencia:{{ $ea->asistencia }}</li>
                            <li class="list-group-item">
                                <a href="/alumnos/lista/editar/{{$ea->id_alumno}}">
                                    <button class="btn btn-warning">EDITAR </button>
                                </a>
                            </li>
                            <br>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection