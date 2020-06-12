@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                <div>   
                    <table class="table">
                    
                    
                        <thead>
                            <tr>
                                <th scope="col">ID</th>
                                <th scope="col">Nombre</th>
                                <th scope="col">Email</th>
                                <th scope="col">Rol</th>
                                <th scope="col"></th>
                                <th scope="col"></th>
                            </tr>
                        
                        </thead>
                        <tbody>
                        @foreach($users as $user)
                            <tr>
                                <th scope="row">{{$user->id}}</th>
                                <td>{{$user->name}}</td>
                                <td>{{$user->email}}</td>
                                <td>{{implode(', ', $user->roles()->get()->pluck('name')->toArray())}}</td>
                                <td>
                                    @can('edit-users')
                                    <a href="{{route('admin.users.edit',$user->id)}}"><button type="button" class="btn btn-primary">Editar</button></a>
                                    @endcan
                                    
                                </td>
                                <td>
                                    @can('delete-users')                    
                                    <form action="{{route('admin.users.destroy',$user)}}" method="POST">
                                        @csrf
                                        {{method_field('DELETE')}}
                                        <button type="submit" class="btn btn-danger">Eliminar</button>
                                    </form>
                                    @endcan
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection