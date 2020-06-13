@extends('layouts.app')

@section('title')
    Alumnos que asistieron
@endsection

@section('content')
    <h1>Alumnos que asistieron</h1><br>
      <table class="table">
                       <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Promedio</th>
                                <th scope="col">Carrera</th>
                            </tr>
                        
                        </thead>
                        <tbody>
                        @foreach($asistencias as $asistencia)
                            <tr>
                                <th scope="row">{{$asistencia->id_alumno}}</th>
                                <td>{{$asistencia->nombre_alumno}}</td>
                                <td>{{$asistencia->promedio}}</td>
                                <td>{{$asistencia->carrera}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
 
@endsection