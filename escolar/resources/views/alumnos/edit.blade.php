@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar alumno {{$alumno->nombre_alumno}}</div>


                <div class="card-body">
                    <form action="/alumnos/lista/update/{{$alumno->id_alumno}}" method="POST">
                        <div class="row">
                            <div class="form-group row col-md-6">
                                <label for="email" class="col-form-label text-md-right">Nombre</label>

                                <div class="col-md-10">
                                    <input class="form-control" id="nombre_alumno" type="name" class="" name="nombre_alumno" value="{{$alumno->nombre_alumno}}" required autocomplete="name" autofocus>

                                </div>
                            </div>
                        </div>
                         <div class="row">
                            <div class="form-group row col-md-6">
                                <label for="email" class="col-form-label text-md-right">Nombre</label>

                                <div class="col-md-10">
                                    <input class="form-control" id="promedio" type="name" class="" name="promedio" value="{{$alumno->promedio}}" required autocomplete="name" autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group row col-md-6">
                                <label for="email" class="col-form-label text-md-right">Carrera</label>

                                <div class="col-md-10">
                                    <input class="form-control" id="carrera" type="name" class="" name="carrera" value="{{$alumno->carrera}}" required autocomplete="name" autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group row col-md-6">
                                <label for="email" class="col-form-label text-md-right">Mención honorifica</label>

                                <div class="col-md-10">
                                    <input class="form-control" id="mencion_honorifica" type="name" class="" name="mencion_honorifica" value="{{$alumno->mencion_honorifica}}" required autocomplete="name" autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group row col-md-6">
                                <label for="email" class="col-form-label text-md-right">Mención excelencia</label>

                                <div class="col-md-10">
                                    <input class="form-control" id="mencion_excelencia" type="name" class="" name="mencion_excelencia" value="{{$alumno->mencion_excelencia}}" required autocomplete="name" autofocus>

                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="form-group row col-md-6">
                                <label for="email" class="col-form-label text-md-right">Asistencia</label>

                                <div class="col-md-10">
                                    <input class="form-control" id="asistencia" type="name" class="" name="asistencia" value="{{$alumno->asistencia}}" required autocomplete="name" autofocus>

                                </div>
                            </div>
                        </div>


                        @csrf
                        {{method_field('PUT')}}
                        
                        <br>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection