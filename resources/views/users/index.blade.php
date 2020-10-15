@extends('layouts.app')

@section('title','Portfolio')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Users</h1>
            <a class="btn btn-primary float-right mb-2" href="{{ route('users.create') }}">Create new user</a>
            <table class="table">
                <thead>
                    <tr>
                        <th scope="col">ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Email</th>
                        <th scope="col">Role</th>
                        <th scope="col">Note</th>
                        <th scope="col">Tag</th>
                        <th scope="col">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($users as $user)
                        <tr>
                            <th scope="row">{{  $user->id }}</th>
                            <td>{{  $user->name }}</td>
                            <td>{{  $user->email }}</td>
                            <td>
                                {{ $user->roles->pluck('name')->implode(' - ') }}                                    
                            </td>
                            <td>
                                @if ($user->note)
                                    {{ $user->note->body }} 
                                @endif                                   
                            </td>
                            <td>
                                @if ($user->tags)
                                    {{ $user->tags->pluck('name')->implode(',') }}
                                @endif                                   
                            </td>
                            <td>
                                <a class="btn btn-info btn-sm btn-block mb-1" href="{{ route('users.edit', $user->id) }}" role="button">Edit</a>

                                <form method="POST" action="{{ route('users.destroy', $user->id) }}" class="">
                                    @csrf @method('DELETE')
                                    <button class="btn btn-danger btn-sm btn-block">Delete</button>
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