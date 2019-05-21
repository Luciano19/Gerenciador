@extends('layouts.base', ["current"=>"tarefas"])

@section('body')
    <form action = "{{route('tipotarefas.store')}}" method = "POST">
        @csrf
        <div class = "form-group">
            <h1>Cadastro Tipos de Tarefas</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome">
            <br>
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>
@endsection