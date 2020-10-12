@extends('layouts.app')

@section('title','Portfolio')

@section('content')
<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Create new User</h1>
            <form method="POST" action="{{ route('users.store') }}">
                        
                @include('users._form', ['user' => new App\User])

                <button class="btn btn-success float-right">Save</button>
                            
            </form>
        </div>
    </div>
</div>
@endsection