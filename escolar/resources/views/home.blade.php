@extends('layouts.app')

@section('title')
    SISTEMA DE GRADUACIONES
@endsection

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
                  
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif
                    You are logged in!
                    <div class="mt-5">
                        <a href="/alumnos/asistencias" class="btn btn-success my-2 mr-4">Consultar Asistencias</a>
                        <a href="/alumnos/lista" class="btn btn-primary my-2">Lista de alumnos</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

