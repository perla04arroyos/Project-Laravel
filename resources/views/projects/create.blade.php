@extends('layout')

@section('title','Create Project')

@section('content')
    <h1>Create new project</h1>

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store') }}">

        @include('projects._form',['btnText'=>'Save'])

    </form>

@endsection