@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Edição de Restaurante</h1>
    <hr>

    <form action="{{route('restaurant.update', ['restaurant' => $restaurant->id])}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Nome do Restaurante</label>
            <input type="text" name="name" value="{{$restaurant->name}}" class="form-control @if($errors->has('name')) is-invalid @endif">
            @if($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </p>

        <p class="form-group">
            <label>Endereço</label>
            <input type="text" name="address" value="{{$restaurant->address}}" class="form-control @if($errors->has('address')) is-invalid @endif">
            @if($errors->has('address'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('address')}}</strong>
                </span>
            @endif
        </p>

        <p class="form-group">
            <label>Fale sobre o restaurante</label>
            <textarea name="description" id="" cols="30" rows="10" class="form-control @if($errors->has('description')) is-invalid @endif">{{$restaurant->description}}</textarea>

            @if($errors->has('description'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('description')}}</strong>
                </span>
            @endif
        </p>

        <input type="submit" value="Atualizar" class="btn btn-success btn-lg">
    </form>
</div>
@endsection