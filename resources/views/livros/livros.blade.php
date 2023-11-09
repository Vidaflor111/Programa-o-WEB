@extends('layouts.main')

@section('title'. 'Toveen')

@section('content')

<div id="events-container" class="col-md-12">
    <h1>Livros</h1>
    <div id="cards-container" class="row">
        @foreach($livros as $livro)
            <div class="card col-md-3">
                <h5 class="card-title">{{$livro->titulo}}</h5>
                <p class="card-text">Autor: {{$livro->autor}}</p>
                <p class="card-text">Ano de Publicação: {{$livro->ano}}</p>
            </div>
        @endforeach
    </div>
</div>
@endsection