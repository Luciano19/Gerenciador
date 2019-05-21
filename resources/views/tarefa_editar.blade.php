@extends('layouts.base', ["current"=>"tarefas"])

@section('body')
    <form action = "{{route('tarefas.update', $tarefa)}}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Cadastro de Tarefas</h1>
            <label for="titulo">Titulo: </label>
            <input type = "text" class = "form-control" id="titulo" name="titulo" value="{{$tarefa->titulo}}">
            <br>
            <label for="descricao">Descricao: </label>
            <input type = "text" class = "form-control" id="descricao" name="descricao" value="{{$tarefa->descricao}}">
            <br>
            <label for="status">Status: </label>
            <input type = "text" class = "form-control" id="status" name="status" value="{{$tarefa->status}}">
            <br>
            <label for="data_conclusao">Data Conclusao: </label>
            <input type = "date" class = "form-control" id="data_conclusao" name="data_conclusao" value="{{$tarefa->data_conclusao}}">
            <br>
            <label for="privacidade">Privacidade: </label>
            <input type = "text" class = "form-control" id="privacidade" name="privacidade" value="{{$tarefa->privacidade}}">
            <br>
            <label for="users_id">Usuário: </label>
            <input type = "text" class = "form-control" id="users_id" name="users_id" value="{{$tarefa->users_id}}">
            <br>
            <label for="tipo_tarefas">Tipo Tarefas: </label>
            <select class = "form-control" name = "tipo_id" id="tipo_id" value="{{$tarefa->tipo_id}}">
            @foreach($tipo_tarefa as $ttar)
                <option value={{$ttar->id}}>{{$ttar->nome}}</option>
            @endforeach
            </select>
            <br>
            <button class = "btn btn-primary" type = "submit">Salvar!</button>
        </div>
    </form>
@endsection