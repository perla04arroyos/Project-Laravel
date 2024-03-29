@extends('layouts.app')

@section('title', 'Portfolio | '.$project->title)

@section('content')

    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8 bg-white p-4 shadow rounded">

                @if($project->image) 
                    <img class="w-100 mx-auto d-block mb-4 rounded" src="/storage/{{ $project->image}}" alt="{{ $project->title }}">
                @endif

                <h1>{{ $project->title }}</h1>
                <p>{{ $project->description }}</p>

                <p>{{ $project->present()->projectNote() }}</p>
                <p>{{ $project->present()->projectTag() }}</p>
                
                <small>{{ $project->present()->date() }} by {{ $project->present()->userName() }}</small>

                @auth
                    <br>     
                    <form method="POST" action="{{ route('projects.destroy', $project) }}" class="d-inline">
                        @csrf @method('DELETE')
                        <button class="btn btn-danger float-right m-1">Delete</button>
                    </form>
                    <a href="{{ route('projects.edit', $project) }}" class="btn btn-dark d-inline float-right m-1" role="button">Editar</a>
                @endauth
            </div>
        </div>
    </div>

    
@endsection
