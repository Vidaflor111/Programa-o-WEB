@extends('layouts.main')

@section('title'. 'Toveen')

@section('content')

<div id="events-container" class="col-md-12">
    <h1>Próximos Eventos</h1>
    <div id="cards-container" class="row">
        @foreach($eventos as $evento)
            <div class="col-md-3">
                <div class="card">
                    <div class="card-body">
                        <p class="card-date">02/11/2023</p>
                        <h5 class="card-title">{{$evento->titulo}}</h5>
                        <a href="#" class="btn btn-primary">Saber mais</a>
                    </div>
                </div>
            </div>
        @endforeach
    </div>
</div>



@endsection