@extends('layouts.app')
@section('title','Listagem')

@section('content')


    <div class="container mt-5">
    <div class="row">

       <div class="col-sm-10">
         <h1>Listagem de Projetos</h1>
       </div>

       <div class="col-sm-2">
         <a href="{{ route ('jogos-create') }}" class="btn btn-success">Novo Jogo</a>
       </div>     

    </div>  



        <table class="table">
          <thead>
            <tr>
              <th scope="col">#</th>
              <th scope="col">Nome</th>
              <th scope="col">Categoria</th>
              <th scope="col">Ano de Criação</th>
              <th scope="col">valor</th>
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

            @endforeach

          </tbody>
        </table>
    </div>


@endsection