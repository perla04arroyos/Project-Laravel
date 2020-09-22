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
                            <td>{{  $user->role }}</td>
                        </tr>
                    @endforeach
                </tbody>            
            </table>       
        </div>
    </div>
</div>
@endsection