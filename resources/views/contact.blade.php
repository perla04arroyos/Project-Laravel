@extends('layout')

@section('title','Contact')

@section('header','Contact')

@section('content')

    @include('partials.validation-errors')
    
    <form action="{{ route('messages.store') }}" method="POST">
        @csrf

        <div class="form-group">
            <input type="text" class="form-control" name="name" placeholder="Nombre" value="{{ old('name') }}">
        </div>
        <div class="form-group">
            <input type="email" class="form-control" name="email" placeholder="Email" value="{{ old('email') }}">
        </div>
        <div class="form-group">
            <input type="text" class="form-control" name="subject" placeholder="Asunto" value="{{ old('subject') }}">
        </div>
        <div class="form-group">
            <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Mensaje" value="{{ old('content') }}"></textarea>
        </div>

        <button type="submit" class="btn btn-primary float-right mt-2">Enviar</button>
    </form>               

@endsection
