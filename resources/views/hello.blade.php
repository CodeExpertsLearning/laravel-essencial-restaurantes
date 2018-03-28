@extends('layout')

@section('title')
    Hello Page
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
            Hello, {{$name}}
            <hr>
            @if($name == 'Teste')
                @include('includes/any')
            @elseif($name == 'Nanderson')
                <h1>{{$name}}</h1>
            @else
                <h1>Nenhum arquivo incluido</h1>
            @endif
            <hr>
            @empty($name)
                <h2>Testando isset</h2>
            @endempty
        </div>
    </div>
@endsection
