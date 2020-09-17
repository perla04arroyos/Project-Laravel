@extends('layout')

@section('title','Edit project')

@section('header','Edit project')

@section('content')

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.update', $project) }}">
        @method('PATCH')
        
        @include('projects._form',['btnText'=>'Update'])
      
    </form>

@endsection