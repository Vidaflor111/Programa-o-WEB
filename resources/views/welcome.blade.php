@extends('layouts.main')

@section('title'. 'Toveen')

@section('content')
<div id="search-container" class="col-md-12">
    <h1>Pesquise um evento</h1>
    <form action="">
        <input type="text" id="search" class= "form-control" placeholder="Pesquisar...">
    </form>
</div>
<div id="events-container" class="col-md-12">
    <h2>Próximos Eventos</h2>
    <p>Veja os eventos dos próximos dias</p>
    <div id="cards-container" class="row">
        @foreach($eventos as $evento)
            <div class="card-md-3">
                <div class="card-body">
                    <p class="card-date"> 02/11/2023 </p>
                    <h5 class="card-title">{{$evento->titulo}}</h5>
                    <a href = '#' class= "btn btn-primary"> Saber mais </a>
                </div>
            </div>

        @endforeach
    </div>
</div>


@endsection