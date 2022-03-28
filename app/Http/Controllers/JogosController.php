<?php

namespace App\Http\Controllers;

use App\Models\jogo;
use Illuminate\Http\Request;

class JogosController extends Controller
{
    public function index()
    {
       $jogos = Jogo::all();
       return view('jogos.index', ['jogos'=>$jogos]);
    }

    public function create()
    {   
        return view('jogos.create');
    }
}
