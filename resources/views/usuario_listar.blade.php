@extends('layouts.base', ["current"=>"users"])

@section('body')
<table class="table table-striped">
<thead>
    <tr>
      <th scope="col">id</th>
      <th scope="col">Nome</th>
      <th scope="col">Email</th>
    </tr>
  </thead>
  <tbody>
<tbody>
            @foreach($users as $use)
            <tr>       
            <td>{{$use->id}}</td>
            <td>{{$use->name}}</td>
            <td>{{$use->email}}</td>
            </tr>
            @endforeach
</tbody>
</table>
@endsection