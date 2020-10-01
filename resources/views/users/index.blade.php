@extends('layouts.app')

@section('title','Portfolio')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Users</h1>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Nombre</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Acciones</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{  $user->id }}</th>
                            <td>{{  $user->name }}</td>
                            <td>{{  $user->email }}</td>
                            <td>
                                @foreach ($user->roles as $role)
                                    {{  $role->name }}
                                @endforeach                                       
                            </td>
                            <td>
                                <a class="btn btn-info btn-sm btn-block mb-1" href="{{ route('users.edit', $user->id) }}" role="button">Editar</a>
                                <form method="" action="{{ route('users.destroy', $user->id) }}" class="">
                                    @csrf @method('DELETE')

                                    <button class="btn btn-danger btn-sm btn-block" type="submit">Eliminar</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>            
            </table>       
        </div>
    </div>
</div>
@endsection