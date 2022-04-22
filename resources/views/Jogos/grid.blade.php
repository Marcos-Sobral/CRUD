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
                   
            body{
                margin: 0;
                padding: 0;
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

            .catainer
            {
                width:100px;
                border: 2px solid red;
                max-width: 1200px;
                margin: 0 auto;
            }

            input[type="text"], input[type="number"], select
            {
                width: 95%;
                height: 50px;
                border: 2px solid #ccc;
                border-radius: 50px;
                border-color: #084D6E;
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

            .btn-1
            {
                margin-left: 150px;
                padding: 15px;
                border: 2px solid #ccc;
                background-color: #084D6E;
                color: #fff;
                border-color: #084D6E;
            }

            .btn-2
            {
                
                padding: 15px;
                border: 2px solid #ccc;
                background-color: #fff;
                color: #084D6E;
                border-color: #084D6E;
            }

            label
            {
                font-weight: bold; 
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
                /*grid-template-columns: 200px 200px 200px;
                /*grid-auto-flow: column;
                grid-auto-columns: 200px;*/
            }

            .grid-item
            {
                /*background:rgb(0 0 255 / 14%);
                border: 1px solid blue;*/
            }

    </style>
</head>
<body>
    <livewire:header />
        <main>
            <div class="box">
                <h1>Crie um novo jogo</h1>
            </div>
            <div class="container">
                <div class="grid-container">
                    <div class="grid-item">
                        <label for="valor">Nome</label>
                        <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                    </div>

                    <div class="grid-item">
                        <label for="valor">Sobrenome</label>
                        <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                    </div>

                    <div class="grid-item">
                        <label for="valor">CPF</label>
                        <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                    </div>

                    <div class="grid-item">
                        <label for="valor">Senha</label>
                        <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                    </div>
                    
                    <div class="grid-item">
                        <label for="valor">Repita senha</label>
                        <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                    </div>

                    <div class="grid-item">
                        <label for="valor">Telefone</label>
                        <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                    </div>

                    <div class="grid-item">
                        <label for="valor">Email</label>
                        <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                    </div>

                <div class="flex-container">  
                  <div class="box-2">
                    <label for="valor">Senha</label>
                    <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                  </div>

                  <div class="box-2">
                    <label for="valor">Repita senha</label>
                    <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                  </div>

                  <div class="box-2">
                    <label for="valor">Telefone</label>
                    <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                  </div>

                  <div class="box-2">
                    <label for="valor">Email</label>
                    <input type="number" class="form-control"name="valor" placeholder="Digite um valor...">
                  </div>
              </div>
                </div>
            </div>
        </main>
</body>
@endsection
</html>