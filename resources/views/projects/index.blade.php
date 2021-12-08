@extends('layouts.app')

@section('title','Portfolio')

@section('content')
    <div class="container mt-2">
        <h1>Projects</h1>
        <div class="row">
            @forelse ($projects as $project)
                <div class="col-sm-4 mb-4 d-flex justify-content-center">
                    <div class="card" style="width: 18rem;">       
                        @if($project->image) 
                            <img class="card-img-top"  src="/storage/{{ $project->image}}" alt="{{ $project->title }}">
                        @endif
                        <div class="card-body">                                    
                            <h5 class="mb-1">{{ $project->title }}</h5>
                            <small class="card-subtitle text-muted">{{ $project->present()->date() }} by {{ $project->present()->userName() }}</small>
                            
                            <p class="card-text my-2">
                                <span>{{ $project->present()->projectNote() }}</span>
                                <span>{{ $project->present()->projectTag() }}</span>
                            </p>     

                            <a class="btn btn-primary" href="{{ route('projects.show', $project) }}">See more</a>
                        </div>
                    </div>
                </div>
            @empty
                <p class="list-group-item list-group-item-action">No projects to display</p>
            @endforelse                  
        </div>
        <div class="row justify-content-center">
            <div class="col-md-12 col-sm-12">
                {{ $projects->links('pagination::bootstrap-4') }} 
            </div>
        </div>    
        <div class="row">         
            <div class="col-md-4 col-sm-12">
                @auth
                <a href="{{ route('projects.create') }}" class="btn btn-dark float-right" role="button">Create a new project</a>
            @endauth
            </div>   
        </div>     
    </div>
@endsection