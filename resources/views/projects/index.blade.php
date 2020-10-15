@extends('layouts.app')

@section('title','Portfolio')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Projects</h1>
                <div class="list-group">
                    @forelse ($projects as $project)
                        <a class="list-group-item list-group-item-action" href="{{ route('projects.show', $project) }}">
                            
                            <div class="d-flex w-100 justify-content-between">
                                <h5 class="mb-1">{{ $project->title }}</h5>
                                <small>{{ $project->created_at->diffForHumans() }}</small>
                            </div>
                            @if ($project->note)
                                <p class="mb-1">{{ $project->note->body }}</p>
                            @endif
                            
                            @if ($project->user_id)
                                <small>{{ $project->user->name }}</small>
                            @endif
                        </a>

                        
                    @empty
                        <p class="list-group-item list-group-item-action">No projects to display</p>
                    @endforelse

                    {{ $projects->links() }}
                </div>

                @auth
                    <a href="{{ route('projects.create') }}" class="btn btn-dark float-right mt-2" role="button">Create a new project</a>
                @endauth
            </div>
        </div>
    </div>
@endsection