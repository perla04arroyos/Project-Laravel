@extends('layouts.app')

@section('title','Portfolio')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Edit User</h1>
            <form method="POST" action="{{ route('users.update', $user->id) }}">
                @method('PATCH')
                        
                @include('users._form')
                
                <button class="btn btn-success float-right">Edit</button>
                            
            </form>
        </div>
    </div>
</div>
@endsection