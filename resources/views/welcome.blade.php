

@extends('layouts.app')

@section('cover')
    @if (Auth::check())
    <div class="login">
        <div class="login-inner">
            <div class="login-contents">
                <h1>Discover your favorite...</h1>
                @include('movies.movies')
            </div>
        </div>
    </div>

    @else
    <div class="cover">
        <div class="cover-inner">
            <div class="cover-contents">
                <h1>Discover your favorite...</h1>
                    <a href="{{ route('signup.get') }}" class="btn btn-success btn-lg">Signup!</a>
                @endif
            </div>
        </div>
    </div>
@endsection

@section('content')
   
@endsection

