@extends('layouts.app')

@section('title')
    Alumnos
@endsection

@section('content')
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
                <div class="mt-5">
                    <h5> Alumnos </h5>
                    <div class="table-responsive-xl">
                    <table class="table">
                      <tbody>
                      @foreach( $eventoalumnos as $ea )
                      @if ( ($columnas / $loop->iteration) == $columnas)
                      <tr>
                        @endif
                        <td scope="col">
                        <ul class="list-group">
                            <li class="list-group-item">{{ $ea->id_alumno }}</li>
                            <li class="list-group-item">{{ $ea->nombre_alumno }}</li>
                            <li class="list-group-item">{{ $ea->promedio }}</li>
                            <li class="list-group-item">{{ $ea->carrera }}</li>
                            <br>
                        </ul>
                      </td>
                      @if ( ($columnas / $loop->iteration) == 1)
                        </tr>
                        @endif
                      @endforeach
                    </tbody>
                  </table>
                </div>
                </div>
            @endif
        </div>
    </div>
@endsection
