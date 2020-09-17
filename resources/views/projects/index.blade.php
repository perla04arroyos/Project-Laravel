@extends('layout')

@section('title','Portfolio')

@section('header','Projects')

@section('content')

    <div class="list-group">
        @forelse ($projects as $project)
            <a class="list-group-item list-group-item-action" href="{{ route('projects.show', $project) }}">{{ $project->title }}</a>
        @empty
            <p class="list-group-item list-group-item-action">No projects to display</p>
        @endforelse

        {{ $projects->links() }}
    </div>

    @auth
        <a href="{{ route('projects.create') }}" class="btn btn-dark float-right mt-2" role="button">Create a new project</a>
    @endauth

@endsection