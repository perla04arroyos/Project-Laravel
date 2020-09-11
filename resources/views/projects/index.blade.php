@extends('layout')

@section('title','Portfolio')

@section('content')
    <h1>Projects</h1>

    @auth
        <a href="{{ route('projects.create') }}">Create a new project</a>
    @endauth
       
    <ul>
        @forelse ($projects as $project)
            <li><a href="{{ route('projects.show', $project) }}">{{ $project->title }}</a></li>
        @empty
            <li>No projects to display</li>
        @endforelse

        {{ $projects->links() }}
    </ul>

@endsection