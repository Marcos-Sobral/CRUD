<!DOCTYPE html>
<html lang="pt-br">
    @extends('layouts.app')
    @section('title','login')
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
                padding: 10%;
                border-radius: 10px;
                box-shadow: 0px 0px 15px 3px rgba(0, 0, 0, 0.07);
            }

            #flex-container div
            {
                margin-bottom: 30px;
            }

            input[type="text"], input[type="number"], select
            {
                width: 60%;
                height: 50px;
                margin: 0 auto;
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
                width: 25%;
                height: 60px;
                margin: 30px auto;
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
                margin-bottom: 40px; 
            }

            label
            {
                font-weight: bold; 
                margin: 0px 180px 0px;
                text-align: center;
            }

            .lb-border
            {
                margin: 50px auto;
            }

            .box{
                margin: -59px 0px 55px;
                padding:10px;
            }

            h1
            {
                text-align: center;
                text-decoration: none;
                color: #084D6E;
            }
    </style>
</head>
<body>
  <livewire:header/>
    <main>
        <div class="box">
        <h1>Entrar na Conta</h1>
        </div>
        <form action="{{ route('jogos-index') }}">
            <div id="flex-container">
                <div>
                    <label class="" for="">CPF</label> 
                    <input type="text" class="form-control" name="" placeholder="***.***.***-**">
                </div>
                <div>    
                    <label class="" for="">Senha</label> 
                    <input type="text" class="form-control" name="" placeholder="********">
                </div>
            </div>

            <div class="flex flex-center">
                <input type="submit" name="" class="btn2 btn-1" value="Entrar">
            </div> 

            <div class="flex flex-center">
                <a href="{{ route('jogos-create') }}" class="lb-1">Criar uma nova Conta</a>
                <p class="lb-1"> | </p>
                <a href="" class="lb-1">Esqueceu a senha ?</a>
            </div>
        
        </form>
    </main>
</body>
@endsection
</html>