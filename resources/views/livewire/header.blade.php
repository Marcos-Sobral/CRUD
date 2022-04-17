
<style>
    @import url('https://fonts.googleapis.com/css2?family=Open+Sans&display=swap');
    @import url('https://fonts.googleapis.com/css2?family=Anton&display=swap');

    *
    {
        margin: 0;
        padding: 0;
        border: 0;
        box-sizing: border-box;
        font-family: 'Open Sans', sans-serif;
    }

    header
    {
        height: 80px;
        width: 100%;
        background-color: #fff;
        display: flex;
        align-items: center;
        justify-content: space-between;
        padding: 0 60px;
        box-shadow: 0px 0px 15px 3px rgba(0, 0, 0, 0.07);
    }

    header .nome
    {
        font-family: 'Anton', sans-serif;
        font-size: 2em;
        text-decoration: none;
        color: #084D6E;
    }

    nav
    {
        display: flex;
        height: 80px;
        align-items: center;
        right: 0;
    }

    .botao
    {
        text-decoration: none;
        color: #084D6E;
        padding: 15px;
        border-radius: 10px;
        margin-left: 20px;
    }

    .botao:hover
    {
        background-color: rgb(8, 77, 110);
        color: #fff;
    }
</style>

<header>
    <a href="#" class="nome">CRUD</a>
    <nav>
        <a href="{{ route ('jogos-index') }}" class="botao">Inicio</a>
        <a href="{{ route ('jogos-create') }}" class="botao">Criar Jogos</a>
        <a href="#" class="botao">Pesquisar</a>
        <a href="{{ route ('jogos-index') }}" class="botao">Ver Jogos</a>
    </nav>
</header>
