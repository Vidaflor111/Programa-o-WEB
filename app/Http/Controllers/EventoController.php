<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class EventoController extends Controller
{
    public function index(){
        return view('welcome');
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
