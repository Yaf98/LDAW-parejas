@extends('layouts.app')

@section('title')
   Asistencias de los alumnos
@endsection

@section('content')
    <h1>Buscar Lugar del Alumno</h1>

    <div class="row mt-5">
        <div class="col-md-6 m-auto">
            <form id="formulario" method="GET" action="/alumnos/buscar">
                <div class="form-group">
                    <label for="idAlumno"> ID Alumno </label>
                    <input id="idAlumno" name="idAlumno" class="form-control" value="{{ request()->idAlumno ?? '' }}" required />
                </div>
                @if( $showError )
                    <div class="alert alert-danger"> No existe el alumno buscado </div>
                @endif
                
                <div class="form-group">
                    <button class="btn btn-success btn-block">
                        Buscar
                    </button>
                </div>
            </form>

            @if( count($eventoalumnos) > 0 )
                <div class="mt-5">
                    <h5> Lugares </h5>
                    <ul class="list-group">
                        @foreach( $eventoalumnos as $ea )
                            <li class="list-group-item">{{ $ea->lugar_alumno }}</li>
                        @endforeach
                    </ul>
                </div>
            @endif
        </div>
    </div>
@endsection