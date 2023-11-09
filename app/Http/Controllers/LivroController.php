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
        $request->validate([
            'titulo' => 'required',
            'autor' => 'required',
            'ano' => 'required|numeric',
            'editora' => 'required',
            'numeroPag' => 'required|numeric',
        ], [
            'titulo.required' => 'O campo Nome do evento é obrigatório.',
            'autor.required' => 'O campo Autor é obrigatório.',
            'ano.required' => 'O campo Ano de Publicação é obrigatório.',
            'ano.numeric' => 'O campo Ano de Publicação deve ser um número.',
            'editora.required' => 'O campo Editora é obrigatório.',
            'numeroPag.required' => 'O campo Número de Páginas é obrigatório.',
            'numeroPag.numeric' => 'O campo Número de Páginas deve ser um número.',
        ]);

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
