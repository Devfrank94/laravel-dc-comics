@extends('layouts.main')


@section('content')
<main>
    <div class="container my-4">
        <h2 class="mb-3">Dettaglio Scheda | {{$comic->title}}</h2>

            <div class="card-wrapper d-flex gap-2">
                <img class="rounded" src="{{$comic->thumb}}" alt="{{$comic->title}}" title="{{$comic->title}}">
            <div class="card">
                <div class="card-body d-flex flex-column gap-1">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p><div class="fw-bold">Descrizione:</div> {{$comic->description}}</p>
                <span><div class="fw-bold">Prezzo:</div> {{$comic->price}}</span>
                <span><div class="fw-bold">Data di uscita:</div> {{$comic->sale_date}}</span>
                <span><div class="fw-bold">Tipo:</div> {{$comic->type}}</span>
                <span><div class="fw-bold">Artisti:</div> {{$comic->artists}}</span>
                <span><div class="fw-bold">Scrittori:</div> {{$comic->writers}}</span>
                <a href="{{route('comics.index')}}" class=" btn btn-primary mt-5 w-25 offset-md-4 fs-4">Indietro</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
