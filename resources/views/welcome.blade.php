@extends('layout')

@section('title')
    Home Page
@endsection

@section('content')
    @if (Route::has('login'))
        <div class="top-right links">
            @auth
                <a href="{{ url('/home') }}">Home</a>
            @else
                <a href="{{ route('login') }}">Login</a>
                <a href="{{ route('register') }}">Register</a>
            @endauth
        </div>
    @endif

    <div class="content">
        <div class="title m-b-md">
            Laravel
        </div>

        <div class="links">
            <a href="https://laravel.com/docs">Documentation</a>
            <a href="https://laracasts.com">Laracasts</a>
            <a href="https://laravel-news.com">News</a>
            <a href="https://forge.laravel.com">Forge</a>
            <a href="https://github.com/laravel/laravel">GitHub</a>
        </div>
        <hr>
        @php
            $users = [
                    ['name' => 'Nanderson', 'email' => 'nandokstro@gmail.com'],
                    ['name' => 'Nanderson 2', 'email' => 'nandokstro2@gmail.com'],
                    ['name' => 'Nanderson 3', 'email' => 'nandokstro3@gmail.com'],
                ];
        @endphp

        @foreach($users as $user)
            {{$user['name']}} - {{$user['email']}} <br>
        @endforeach
    </div>
@endsection