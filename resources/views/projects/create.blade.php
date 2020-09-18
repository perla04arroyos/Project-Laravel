@extends('layouts.app')

@section('title','Create Project')

@section('content')

    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Create new project</h1>

                @include('partials.validation-errors')

                <form method="POST" action="{{ route('projects.store') }}">

                    @include('projects._form',['btnText'=>'Save'])

                </form>
            </div>
        </div>
    </div>

@endsection