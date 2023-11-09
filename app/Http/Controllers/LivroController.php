<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Livro;

class LivroController extends Controller
{
    public function index(){

        $livros = livro::all();

        return view('welcome', ['livros' => $livros]);
    }

    public function livrosList(){

        $livros = Livro::orderBy('titulo', 'asc')->get(); // Ordena os livros pelo título em ordem alfabética

        return view('livros.livros', compact('livros'));
    }

    public function cadastrarLivro(){
        return view('livros.cadastrolivro');
    }

    public function livros(Request $request){
        $book = new Livro;
        $book-> titulo = $request->titulo;
        $book-> autor = $request->autor;
        $book-> ano = $request->ano;
        $book-> editora = $request->editora;
        $book-> numeroPag = $request->numeroPag;
        
        $book -> save();

        return redirect('/')-> with('msg', 'Livro cadastrado com sucesso!');
    }
    
}
