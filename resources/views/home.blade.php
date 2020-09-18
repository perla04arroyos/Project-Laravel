@extends('layouts.app')

@section('title','Home')


@section('content')

<div class="container mt-2">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <h1>Home</h1>

            @auth
                {{ auth()->user()->name }}
            @endauth
        </div>
    </div>
</div>
    
@endsection