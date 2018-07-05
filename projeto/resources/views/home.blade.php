@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Restaurantes</h1>
    <hr>
    <div class="row">
        @foreach($restaurants as $r)
            <div class="col-4">
                <h2>
                    <a href="{{route('home.single', ['id' => $r->id])}}">{{$r->name}}</a>
                </h2>
                <p>
                    {{$r->description}}
                </p>
            </div>
        @endforeach
    </div>
    {{$restaurants->links()}}
</div>
@endsection
