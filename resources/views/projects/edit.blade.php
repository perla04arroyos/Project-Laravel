@extends('layouts.app')

@section('title','Edit project')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Edit project</h1>

                <form method="POST" action="{{ route('projects.update', $project) }}">
                    @method('PATCH')
                    
                    @include('projects._form',['btnText'=>'Update'])
                
                </form>
            </div>
        </div>
    </div>

@endsection