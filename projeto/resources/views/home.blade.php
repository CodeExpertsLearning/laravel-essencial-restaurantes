@extends('layouts.app')

@section('content')
<div class="container">
   <h1>Restaurantes</h1>
    <hr>
    <div class="row">
        @foreach($restaurants as $r)
            <div class="col-4">
                @if($r->photos()->count())
                <img src="{{asset('/images/' . $r->photos()->first()->photo)}}" alt="" class="img-fluid">
                @endif
                <h2>
                    <a href="{{route('home.single', ['slug' => $r->slug])}}">{{$r->name}}</a>
                </h2>
                <p>
                    {{str_limit($r->description, 150)}}
                </p>
            </div>
        @endforeach
    </div>
    {{$restaurants->links()}}
</div>
@endsection
