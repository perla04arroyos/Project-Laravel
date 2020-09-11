@extends('layout')

@section('title','Contact')

@section('content')
    <h1>Contact</h1>

    <form action="{{ route('messages.store') }}" method="POST">
        @csrf
        <input type="text" name="name" placeholder="Nombre" value="{{ old('name') }}">
        {!! $errors->first('name','<small>:message</small>') !!}

        <input type="email" name="email" placeholder="Email" value="{{ old('email') }}">
        {!! $errors->first('email','<small>:message</small>') !!}

        <input type="text" name="subject" placeholder="Asunto" value="{{ old('subject') }}">
        {!! $errors->first('subject','<small>:message</small>') !!}

        <textarea name="content" cols="30" rows="10" placeholder="Mensaje" value="{{ old('content') }}"></textarea>
        {!! $errors->first('content','<small>:message</small>') !!}

        <button>Enviar</button>
    </form>
@endsection
