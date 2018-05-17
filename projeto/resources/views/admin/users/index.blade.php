@extends('layouts.app')

@section('content')
    <div class="container">
        <a href="{{route('user.new')}}" class="float-right btn btn-success">Novo</a>
        <h1 class="float-left">Usuários</h1>
        <table class="table table-striped">
            <thead>
            <tr>
                <th>#</th>
                <th>Nome</th>
                <th>Criado Em</th>
                <th>Ações</th>
            </tr>
            </thead>
            <tbody>
            @foreach($users as $u)
                <tr>
                    <td>{{$u->id}}</td>
                    <td>{{$u->name}}</td>
                    <td>{{$u->created_at}}</td>
                    <td>
                        <a href="{{route('user.edit', ['restaurant' => $u->id])}}" class="btn btn-primary">EDITAR</a>
                        <a href="{{route('user.remove', ['id' => $u->id])}}" class="btn btn-danger">EXCLUIR</a>
                    </td>
                </tr>

            @endforeach
            </tbody>
        </table>
    </div>
@endsection