<!DOCTYPE html>
<html lang="pt-br">
  @extends('layouts.app')
  @section('title','Criação')

  @section('content')
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
            * 
            {
                border: 0;
                box-sizing: border-box;
                font-family: 'Open Sans', sans-serif;
                margin: 0;
                padding: 0;
            }

            body 
            {
                background-color: #F3F3F3;
            }

            main
            {
                background-color: #fff;
                width: 80%;
                margin: 10vw auto;
                padding: 8%;
                border-radius: 10px;
                box-shadow: 0px 0px 15px 3px rgba(0, 0, 0, 0.07);
            }

            #flex-container div
            {
                margin-bottom: 30px;
            }

            input[type="text"], input[type="number"], select
            {
                width: 95%;
                height: 50px;  
                border: 2px solid #ccc;
                border-radius: 50px;
                border-color: #084D6E;
            }

            .flex
            {
                display: flex;
            }

            .flex-center
            {
                display: flex;
                justify-content: center;
            }

            .btn
            {
                border-radius: 10px;
                color: #fff;
                padding: 15px;
                text-decoration: none;
                background-color: #084D6E;
            }

            .btn2
            {
                border: 2px solid #ccc;
                border-radius: 50px;
                padding: 15px;
                text-decoration: none;
                color: #fff;
                background-color: #084D6E;
            }

            .lb-1
            {
                font-family: 'Open Sans', sans-serif;
                text-decoration: none;
                color: #084D6E;
            }

            .btn:hover
            {
                background-color: #084D6E;
                color: #fff;
            }

            .btn-1
            {
                
                padding: 15px;
                border: 2px solid #ccc;
                background-color: #084D6E;
                color: #fff;
                border-color: #084D6E;
            }

            .btn-2
            {
                border: 2px solid #ccc;
                background-color: #fff;
                color: #084D6E;
                border-color: #084D6E;
            }

            label
            {
                font-weight: bold; 
                /*margin: 0px 180px 0px;
                text-align: center;*/
            }

            .lb-border
            {
                margin: 50px auto;
            }

            .box{
                margin:-80px 0px 0px;
                padding: 10px;
            }

            h1
            {
                text-align: center;
                text-decoration: none;
                color: #084D6E;
            }

            .grid-container
            {
              display: grid;
              grid-template-columns: repeat(3, 1fr);
              grid-template-rows: 100px;
              gap: 2vw;
              /*height: 100px;
              display: flex;
              justify-content: space-between;
              flex-wrap:wrap;*/
            }

            .grid-container-2
            {
              display: grid;
              grid-template-columns: repeat(2, 1fr);
              grid-auto-rows: 100px;
              gap: 1vw;
              /*grid-template-columns: 1fr;
              height: 100px;
              display: flex;
              justify-content: space-between;
              flex-wrap:wrap;*/
            }

            .flex-container
            { 
              height: 250px;
              display: flex;
              justify-content: space-between;
              align-items: center;
              flex-flow: row wrap;
            }

            .flex-button
            { 
              display: grid;
              grid-template-columns: repeat(auto-fit, minmax(260px, auto));
              gap: 10px;
              grid-auto-flow: column;
              grid-auto-columns: 1fr;
              /*grid-template-columns: repeat(3, 264px);
              /*grid-template-columns: 264px 264px 260px;

              /*display: flex;
              flex-flow: row wrap;
              justify-content:space-around;
              align-items: center; */
            }

            .box-0
            {
              /*border: 1px solid red;

              /*flex: 1 1 250px;
              height:100px;
              width:260px;*/
              
            }

            .box-3
            {
              /*border: 1px solid yellow;
              /*flex: 1 1 250px;
              height:100px;
              width:260px;*/
              
            }

            .box-2
            {
              border: 1px solid green;
              flex:1 1 300px;
              flex-grow:1;
              height:100px;
              width:400px;*/
            }

            .linkbox
            {
                justify-self: center;
            }

            .btnbox-right
            {
                justify-self: right;
            }


    </style>
</head>
<body>
<livewire:header />
    <main>

            <div class="box">
              <h1>Crie um novo jogo</h1>
            </div>

          <form action="{{ route('jogos-store') }}" method="POST"> 
          @csrf  
              
              <div class="grid-container">
                  <div class="box-0">
                    <label for="valor">Nome</label>
                    <input type="text" class="form-control"name="nome" placeholder="Digite um nome...">
                  </div>
                  
                  <div class="box-0">
                    <label for="valor">Sobrenome</label>
                    <input type="text" class="form-control"name="categoria" placeholder="Digite uma categoria para o jogo...">
                  </div>
                  
                  <div class="box-0">
                   <label for="valor">CPF</label>
                    <input type="number" class="form-control"name="ano_criacao" placeholder="Digite o ano de criação...">
                  </div>        
              </div>

              <div class="grid-container-2">  
                  <div class="box-3">
                    <label for="valor">Senha</label>
                    <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                  </div>

                  <div class="box-3">
                    <label for="valor">Repita senha</label>
                    <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                  </div>

                  <div class="box-3">
                    <label for="valor">Telefone</label>
                    <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                  </div>

                  <div class="box-3">
                    <label for="valor">Email</label>
                    <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                  </div>
              </div>

              <div class="flex-button">
                  <div class="btnbox-left">
                    <input type="submit" name="submit" class="btn2 btn-2" value="Cancelar">
                  </div>
                  
                  <div class="linkbox"">
                    <a href="{{ route('jogos-login') }}" class="lb-1">Já tenho uma conta !</a>
                  </div>
                  
                  <div class="btnbox-right">
                   <input type="submit" name="submit" class="btn2 btn-1" value="Cadastrar">
                  </div>        
              </div>
          </form>
    </main>
  </body>
  @endsection
  </html>
