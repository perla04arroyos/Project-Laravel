@extends('layout')

@section('title', 'Portfolio | '.$project->title)

@section('header', $project->title)

@section('content')

    <p>{{ $project->description }}</p>
    <small>{{ $project->created_at->diffForHumans() }}</small>

    @auth
        <br>     
        <form method="POST" action="{{ route('projects.destroy', $project) }}" class="d-inline">
            @csrf @method('DELETE')
            <button class="btn btn-danger float-right m-1">Delete</button>
        </form>
        <a href="{{ route('projects.edit', $project) }}" class="btn btn-dark d-inline float-right m-1" role="button">Editar</a>
    @endauth
@endsection
