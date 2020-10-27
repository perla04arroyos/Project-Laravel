@extends('layouts.app')

@section('title','Contact')

@section('content')
    <div class="container mt-2">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <h1>Contact</h1>
    
                <form action="{{ route('messages.store') }}" method="POST">
                    @csrf
                    
                    {{-- @if (auth()->guest()) --}}
                        <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Name" value="{{ old('name') }}">
                        </div>
                        <div class="form-group">
                            <input type="email" class="form-control" name="email" placeholder="E-mail" value="{{ old('email') }}">
                        </div>
                    {{-- @endif --}}
                    

                    <div class="form-group">
                        <input type="text" class="form-control" name="subject" placeholder="Subject" value="{{ old('subject') }}">
                    </div>
                    <div class="form-group">
                        <textarea name="content" class="form-control" cols="30" rows="10" placeholder="Message" value="{{ old('content') }}"></textarea>
                    </div>
            
                    <button type="submit" class="btn btn-primary float-right mt-2">Send</button>
                </form> 
            </div>
        </div>
    </div>
@endsection
