<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Evento;

class EventoController extends Controller
{
    public function index(){

        $eventos = Evento::all();

        return view('welcome', ['eventos' => $eventos]);
    }

    public function cadastrar(){
        return view('eventos.cadastro');
    }

    public function eventos(){
        $busca = request('search');

        return view('eventos', ['busca'=> $busca]);
    }

    public function evento($id = null){
        return view('evento', ['id' => $id]);
    }
    
}
