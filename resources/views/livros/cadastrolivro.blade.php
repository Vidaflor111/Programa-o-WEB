@extends('layouts.main')

@section('title'. 'Evento')

@section('content')

<<div id="event-create-container" class="col-md-6 offset-md-3">
    <h1>Cadastre um Livro</h1>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form action="/livrospost" method="POST" enctype= "multipart/form-data">
        @csrf
        <div class="form-group mt-3">
            <label for="titulo">Título do Livro:</label>
            <input type="text" class="form-control" id="titulo" name="titulo" placeholder="Nome do evento">
        </div>
        <div class="form-group mt-3">
            <label for="autor">Autor:</label>
            <input type="text" class="form-control" id="autor" name="autor" placeholder="Nome do autor">
        </div>
        <div class="form-group mt-3">
            <label for="ano">Ano de Publicação:</label>
            <input type="number" class="form-control" id="ano" name="ano" placeholder="Ano de Publicação">
        </div>
        <div class="form-group mt-3">
            <label for="editora">Editora:</label>
            <input type="text" class="form-control" id="editora" name="editora" placeholder="Nome da Editora">
        </div>
        <div class="form-group mt-3">
            <label for="numeroPag">Numero de Paginas:</label>
            <input type="number" class="form-control" id="numeroPag" name="numeroPag" placeholder="Numero de Paginas">
        </div>
        <input type="submit" class="btn btn-primary mt-3" value="Cadastrar evento">
    </form>
</div>


@endsection