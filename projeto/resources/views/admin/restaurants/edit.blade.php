<h1>Edição de Restaurante</h1>
<hr>

<form action="{{route('restaurant.update', ['restaurant' => $restaurant->id])}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Nome do Restaurante</label> <br>
        <input type="text" name="name" value="{{$restaurant->name}}"> <br>
        @if($errors->has('name'))
            {{$errors->first('name')}}
        @endif
    </p>

    <p>
        <label>Endereço</label> <br>
        <input type="text" name="address" value="{{$restaurant->address}}"> <br>
        @if($errors->has('address'))
            {{$errors->first('address')}}
        @endif
    </p>

    <p>
        <label>Fale sobre o restaurante</label><br>
        <textarea name="description" id="" cols="30" rows="10">{{$restaurant->description}}</textarea> <br>

        @if($errors->has('description'))
            {{$errors->first('description')}}
        @endif
    </p>

    <input type="submit" value="Atualizar">
</form>