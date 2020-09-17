@extends('layout')

@section('title','Create Project')

@section('header','Create new project')

@section('content')

    @include('partials.validation-errors')

    <form method="POST" action="{{ route('projects.store') }}">

        @include('projects._form',['btnText'=>'Save'])

    </form>

@endsection