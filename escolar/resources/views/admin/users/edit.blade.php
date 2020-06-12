@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Editar usuario {{$user->name}}</div>


                <div class="card-body">
                    <form action="{{route('admin.users.update',$user)}}" method="POST">
                        <div class="form-group row col-md-6">
                            <label for="email" class="col-form-label text-md-right">Email</label>

                            <div class="col-md-10">
                                <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ $user->email }}" required autocomplete="email" autofocus>

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row col-md-6">
                            <label for="name" class="col-form-label text-md-right">Name</label>

                            <div class="col-md-10">
                                <input id="name" type="text" class="form-control @error('name') is-invalid @enderror" name="name" value="{{ $user->name }}" required autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        @csrf
                        {{method_field('PUT')}}
                        @foreach($roles as $role)
                        <div class="form-check col-md-2">

                            <input  type="checkbox" name="roles[]" value="{{$role->id}}"></input>
                            <label for="">{{$role->name}}</label>
                        </div>
                        @endforeach
                        <br>
                        <button type="submit" class="btn btn-primary">Actualizar</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
