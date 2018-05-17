@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Insercao de Restaurante</h1>
    <hr>
    <form action="{{route('user.store')}}" method="post">
        {{csrf_field()}}
        <p class="form-group">
            <label>Nome do Usuário</label>
            <input type="text" name="name" value="{{old('name')}}" class="form-control @if($errors->has('name')) is-invalid @endif">
            @if($errors->has('name'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('name')}}</strong>
                </span>
            @endif
        </p>

        <p class="form-group">
            <label>Email</label>
            <input type="email" name="email" value="{{old('email')}}" class="form-control @if($errors->has('email')) is-invalid @endif">

            @if($errors->has('email'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('email')}}</strong>
                </span>
            @endif
        </p>

        <p class="form-group">
            <label>Senha</label>
            <input type="password" name="password" value="{{old('password')}}" class="form-control @if($errors->has('password')) is-invalid @endif">

            @if($errors->has('password'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('password')}}</strong>
                </span>
            @endif
        </p>

        <p class="form-group">
            <label>Confirmar Senha</label>
            <input type="password" name="password_confirmation" value="{{old('password_confirmation')}}" class="form-control @if($errors->has('password_confirmation')) is-invalid @endif">

            @if($errors->has('password_confirmation'))
                <span class="invalid-feedback">
                    <strong>{{$errors->first('password_confirmation')}}</strong>
                </span>
            @endif
        </p>

        <input type="submit" value="Cadastrar" class="btn btn-success btn-lg">
    </form>
</div>
@endsection