@extends('layouts.base', ["current"=>"tipotarefas"])

@section('body')
    <form action = "{{route('tipotarefa.update', $tipo_tarefa)}}" method = "POST">
        @csrf
        @method('PUT')
        <div class = "form-group">
            <h1>Edição Tipo de Tarefas</h1>
            <label for="nome">Nome: </label>
            <input type = "text" class = "form-control" id="nome" name="nome" value="{{$tipo_tarefa->nome}}">
            <br>
            <button class = "btn btn-primary" type = "submit">Salvar</button>
        </div>
    </form>
@endsection