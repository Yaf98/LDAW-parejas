@extends('layouts.app')

@section('title')
    Alumno Registrar Asistencia
@endsection

@section('content')
    <h1>Registrar Asistencia</h1>

    <div class="row mt-5">
        <div class="col-md-6 m-auto">
            <form id="formulario" method="POST" action="/alumnos/chequearEvento">
                <div class="form-group">
                    <label for="idAlumno"> ID Alumno </label>
                    <input id="idAlumno" name="idAlumno" class="form-control" value="" required />
                </div>
                
                <div class="form-group">
                    <button class="btn btn-success btn-block">
                        Registrar
                    </button>
                </div>
            </form>
        </div>
    </div>
@endsection

@section('scripts')
    <script>
        const form = document.getElementById('formulario');
        const errContainer = document.getElementById('error-msg');

        form.onsubmit = e => {
            e.preventDefault();

            const idAlumnoElement = document.getElementById('idAlumno');

            if( isNaN(idAlumnoElement.value) ){
                swal("", "Debe completar solo con numeros", "error");
                return false;
            }

            fetch('/alumnos/chequearEvento', {
                method: 'POST',
                body: JSON.stringify({ idAlumno: idAlumnoElement.value }),
                headers: {
                    'Content-Type': 'application/json',
                    'X-CSRF-TOKEN': document.querySelector('meta[name=csrf-token]').content
                },
            })
            .then( resp => resp.json() )
            .then( res  => {
                if( res.success ){
                    swal("", "Asistencia confirmada", "success")
                        .then(v => {
                            location.href = '/alumnos';
                        });
                }
                else{
                    swal("", res.error, "error");
                }
            })
            .catch( err => {
                console.error(err);
            });
        }
    </script>
@endsection