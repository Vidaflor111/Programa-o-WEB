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

    public function entrar(){
        return view('eventos.entrar');
    }

    public function cadastrarConta(){
        return view('eventos.cadasconta');
    }

    public function eventos(){
        $busca = request('search');

        return view('eventos', ['busca'=> $busca]);
    }

    public function evento($id = null){
        return view('evento', ['id' => $id]);
    }

    public function store(Request $request){
        $event = new Evento;
        $event-> titulo = $request->titulo;
        $event-> cidade = $request->cidade;
        $event-> privado = $request->privado;
        $event-> descricao = $request->descricao;
        
        // Imagem
        if($request->hasfile('image') && $request->file('image')->isValid()){
            $requestImage = $request -> image;
            $extension = $requestImage->extension();
            $imageName = md5($requestImage->getClientOriginalName() . strtotime("now")) . "." . $extension;
            $request->image->move(public_path('img/eventos'), $imageName);
            $event->image = $imageName;
        }

        $user=auth()->user();
        $event->user_id = $user_id;

        $event -> save();

        return redirect('/')-> with('msg', 'Evento cadastrado com sucesso!');
    }
    
}
