@extends('layouts.main')

@section('title'. 'Toveen')

@section('content')

<div id="events-container" class="col-md-12">
    <h1>Livros</h1>
    <div id="cards-container" class="row">
        @foreach($livros as $livro)
            <div class="card col-md-3">
                <h5 class="card-title">{{$livro->titulo}}</h5>
                <a href="#" class="btn btn-primary">Saber mais</a>
            </div>
        @endforeach
    </div>
</div>
@endsection