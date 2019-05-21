@extends('layouts.base', ["current"=>"tipotarefas"])

@section('body')
<table class="table table-striped">
  <thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Ações</th>
    </tr>
  </thead>
  <tbody>
    @foreach($tipo_tarefa as $ttar)
        <tr>       
            <td>{{$ttar->id}}</td>
            <td>{{$ttar->nome}}</td>
            <td>
            <form  method = "POST" action = "{{route('tipotarefa.destroy', $ttar->id)}}">
                @csrf
                <a class = "btn btn-success" href="{{route('tipotarefa.edit', $ttar->id)}}">Editar</a>
                @method('DELETE')
                <button type = "submit" class = "btn btn-danger">Excluir</button>
            </form>  
            </td>
        </tr>
    @endforeach
  </tbody>
</table>
@endsection