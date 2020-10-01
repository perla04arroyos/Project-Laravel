@extends('layouts.app')

@section('title','Portfolio')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit User</h1>
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @csrf @method('PATCH')
                        
                <div class="form-group">
                    <label for="name">Name</label>
                    <input type="text" class="form-control" name="name" value="{{ old('name', $user->name) }}">
                </div>
                <div class="form-group">
                    <label for="email">Project description</label>
                    <input type="text" class="form-control" name="email" value="{{ old('email', $user->email) }}">
                </div>
                
                <button class="btn btn-success float-right">Edit</button>
                            
            </form>
        </div>
    </div>
</div>
@endsection