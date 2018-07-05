@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
       <div class="col-12">
           <h2>{{$id->name}}</h2>
           <p>{{$id->description}}</p>
           <p>
                <address>Endereço: {{$id->address}}</address>
           </p>
           <hr>
       </div>
        <div class="col-12">
            Cardápio:
            <ul class="list-group">
                @foreach($id->menus as $m)
                    <li class="list-group-item">
                        {{$m->name}} <br>
                        R$ {{number_format($m->price, '2', ',', '.')}}
                    </li>
                @endforeach
            </ul>
        </div>

    </div>
</div>
@endsection
