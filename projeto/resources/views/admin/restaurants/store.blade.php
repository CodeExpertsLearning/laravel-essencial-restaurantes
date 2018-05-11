<h1>Insercao de Restaurante</h1>
<hr>

<form action="{{route('restaurant.store')}}" method="post">
    {{csrf_field()}}
    <p>
        <label>Nome do Restaurante</label> <br>
        <input type="text" name="name">
    </p>

    <p>
        <label>Endereço</label> <br>
        <input type="text" name="address">
    </p>

    <p>
        <label>Fale sobre o restaurante</label><br>
        <textarea name="description" id="" cols="30" rows="10"></textarea>
    </p>

    <input type="submit" value="Cadastrar">
</form>