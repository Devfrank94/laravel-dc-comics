@extends('layouts.main')


@section('content')
<main>
    <div class="container my-4">
        <h2 class="mb-3">Dettaglio Scheda | {{$comic->title}} <a href="{{route('comics.edit', $comic)}}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square" title="Modifica" style="color: #ffffff;"></i></a>
            <form class="d-inline" action="{{route('comics.destroy', $comic)}}" onsubmit="return confirm('Confermi l\'eliminazione di {{ $comic->title }} ?')" method="POST">

                @csrf
                @method('DELETE')

                <button type="submit" class="btn btn-danger"><i class="fa-regular fa-trash-can" title="Elimina" style="color: #ffffff;"></i></button>
            </form>
        </h2>



            <div class="card-wrapper d-flex gap-2 w-100">
                <img class="rounded w-50" src="{{$comic->thumb}}" alt="{{$comic->title}}" title="{{$comic->title}}">
            <div class="card w-75">
                <div class="card-body d-flex flex-column gap-1">
                <h5 class="card-title">{{$comic->title}}</h5>
                <p><div class="fw-bold">Descrizione:</div> {{$comic->description}}</p>
                <span><div class="fw-bold">Prezzo:</div> {{$comic->price}}</span>
                <span><div class="fw-bold">Data di uscita:</div> {{$comic->sale_date}}</span>
                <span><div class="fw-bold">Tipo:</div> {{$comic->type}}</span>
                <span><div class="fw-bold">Artisti:</div> {{$comic->artists}}</span>
                <span><div class="fw-bold">Scrittori:</div> {{$comic->writers}}</span>
                <a href="{{route('comics.index')}}" class=" btn btn-primary mt-5 w-100 fs-4 align-self-center">Indietro</a>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection
