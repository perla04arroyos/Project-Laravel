@extends('layouts.app')

@section('title','Portfolio')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>{{ $user->name }}</h1>
            <table class="table">
                <tr>
                    <th>Nombre:</th>
                    <td>{{ $user->name }}</td>
                </tr>
                <tr>
                    <th>Email:</th>
                    <td>{{ $user->email }}</td>
                </tr>
                <tr>
                    <th>Roles:</th>
                    <td>
                        @foreach ($user->roles as $role)
                            {{ $role->name }}
                        @endforeach   
                    </td>
                </tr>
            </table>
            @can('destroy', $user)
                <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="float-right d-inline ml-1">
                    @csrf @method('DELETE')
                    <button class="btn btn-danger">Delete</button>
                </form>
            @endcan
            @can('edit', $user)
                <a href="{{ route('users.edit', $user->id) }}" class="btn btn-info float-right d-inline">Edit</a>
            @endcan
        </div>
    </div>
</div>
@endsection