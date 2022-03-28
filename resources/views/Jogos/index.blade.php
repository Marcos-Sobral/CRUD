@extends('layouts.app')
@section('title','Listagem')

@section('content')



<table class="table">
  <thead>
    <tr>
      <th scope="col">#</th>
      <th scope="col">Nome</th>
      <th scope="col">Categoria</th>
      <th scope="col">Ano de Criação</th>
      <th scope="col">Ano de Criação</th>
    </tr>
  </thead>
  <tbody>
  @foreach($jogos as $Jogo)    
    <tr>
      <th>{{ $Jogo -> id }}</th>
      <td>{{ $Jogo -> nome }}</td>
      <td>{{ $Jogo -> categoria }}</td>
      <td>{{ $Jogo -> ano_criacao }}</td>
      <td>{{ $Jogo -> valor }}</td>
    </tr>
    <tr>
      <th>{{ $Jogo -> id }}</th>
      <td>{{ $Jogo -> nome }}</td>
      <td>{{ $Jogo -> categoria }}</td>
      <td>{{ $Jogo -> ano_criacao }}</td>
      <td>{{ $Jogo -> valor }}</td>
    </tr>
    <tr>
      <th>{{ $Jogo -> id }}</th>
      <td>{{ $Jogo -> nome }}</td>
      <td>{{ $Jogo -> categoria }}</td>
      <td>{{ $Jogo -> ano_criacao }}</td>
      <td>{{ $Jogo -> valor }}</td>
    </tr>
    @endforeach
  </tbody>
</table>



@endsection