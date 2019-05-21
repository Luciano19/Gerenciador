@extends('layouts.base', ["current"=>"tarefas"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">titulo</th>
      <th scope="col">descricao</th>
      <th scope="col">status</th>
      <th scope="col">data_conclusao</th>
      <th scope="col">privacidade</th>
      <th scope="col">Usuários</th>
      <th scope="col">tipo</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tarefas as $tar)
        <tr>       
            <td>{{$tar->id}}</td>
            <td>{{$tar->titulo}}</td>
            <td>{{$tar->descricao}}</td>
            <td>{{$tar->status}}</td>
            <td>{{$tar->data_conclusao}}</td>
            <td>{{$tar->privacidade}}</td>
            <td>{{$tar->users["name"]}}</td>
            <td>{{$tar->tipo_tarefa["nome"]}}</td>
            <td>
            <form action = "{{route('tarefa.destroy', $tar->id)}}" method = "POST">
                @csrf
                <a class = "btn btn-success" href="{{route('tarefa.edit', $tar->id)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection