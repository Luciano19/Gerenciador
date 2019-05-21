@extends('layouts.base', ["current"=>"tarefas"])

@section('body')
    <form action = "{{route('tarefas.store')}}" method = "POST" enctype="multipart/form-data">
        @csrf
        <div class = "form-group">
            <h1>Cadastro de Tarefas</h1>
            <label for="titulo">Titulo: </label>
            <input type = "text" class = "form-control" id="titulo" name="titulo">
            <br>
            <label for="descricao">Descricao: </label>
            <input type = "text" class = "form-control" id="descricao" name="descricao">
            <br>
            <label for="status">Status: </label>
            <input type = "text" class = "form-control" id="status" name="status">
            <br>
            <label for="data_conclusao">Data Conclusao: </label>
            <input type = "date" class = "form-control" id="data_conclusao" name="data_conclusao">
            <br>
            <label for="privacidade">Privacidade: </label>
            <div class="col-md-6">
                                <select id="sexo" class="form-control" name="privacidade">
                                    <option value='Pública'>Pública</option>
                                    <option value='Privada'>Privada</option>
                                </select>
                            </div>
            <label for="users_id">Usuário: </label>
            <select class = "form-control" name = "users_id" id="users_id">
            @foreach($users as $use)
                <option value={{$use->id}}>{{$use->name}}</option>
            @endforeach
            </select>
            <label for="tipo_tarefas">Tipo Tarefas: </label>
            <select class = "form-control" name = "tipo-tarefa" id="tipo_tarefa">
            @foreach($tipo_tarefa as $ttar)
                <option value={{$ttar->id}}>{{$ttar->nome}}</option>
            @endforeach
            </select>
            <br>
            <button class = "btn btn-primary" type = "submit">Cadastrar!</button>
        </div>
    </form>
@endsection