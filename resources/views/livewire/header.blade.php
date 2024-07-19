
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
    ul {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    height: 100px;
    }

    li {
    padding: 40px 16px;
    display: table-cell;
    text-align: center;
    }

    li a {
    display: block;
    color: white;
    text-align: center;
    text-decoration: none;
    font-size: 17px;
    letter-spacing: 2.5px;
    }

    li a:hover {
    -moz-transition: all .3s ease-in-out;
    -webkit-transition: all .3s ease-in-out;
    -ms-transition: all .3s ease-in-out;
    -o-transition: all .3s ease-in-out;
    transition: all .3s ease-in-out;
    }


    /*Edit starts here*/
    li {
    position:relative;
    }

    li::after {
        content: '';
        display: block;
        width: 0;
        position:absolute;
        left:50%;
        height: 2px;
        background: #0077ff;
        transition: cubic-bezier(.77,0,.18,1) 1s;
    }

    li:hover::after {
        width: 80%;
        left: 10%;
    }

    li {
    transition: cubic-bezier(.77,0,.18,1) 1s;
    }
</style>

<header>
    <a href="#" class="nome">CRUD</a>
    <nav>
    <ul>
      <li style="float: right;"><a href="{{ route ('jogos-index') }}" class="botao">Inicio</a></li>
      <li style="float: right;"><a href="{{ route ('jogos-create') }}" class="botao">Criar Jogos</a></li>
      <li style="float: right;"><a href="{{ route ('jogos-index') }}" class="botao">Ver Jogos</a></li>
    </ul>
        
    </nav>
</header>
