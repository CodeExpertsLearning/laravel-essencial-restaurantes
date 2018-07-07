@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="col-12">
            <h1>Cadastro de Fotos Restaurante</h1>
            <hr>
        </div>
        <div class="col-12">
            <form action="{{route('restaurant.photo.save', ['id' => $restaurant_id])}}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="form-group">
                    <label>Carregar Fotos</label>
                    <input type="file" name="photos[]" multiple>
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-lg btn-success">Enviar Fotos</button>
                </div>
            </form>
        </div>
    </div>
@endsection