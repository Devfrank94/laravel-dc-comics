@extends('layouts.main')

@section('content')
<main>
<div class="container my-4">
    <h1 class="mb-4">Elenco Fumetti Comics</h1>
        @if (session('trashElement'))
            <div class="alert alert-success" role="alert">
                {{ session('trashElement') }}
            </div>
        @endif
    <div class="border border-1">
    <table class="table mb-0">
        <thead>
            <tr>
                <th scope="col">#ID</th>
                <th scope="col">Titolo</th>
                <th scope="col">Serie</th>
                <th scope="col">Prezzo</th>
                <th scope="col">Data uscita</th>
                <th scope="col">Azioni</th>
            </tr>
        </thead>
            <tbody>
                @foreach ($comics as $comic)
                    <tr class="vertical-align-middle">
                        <th scope="row">{{$comic->id}}</th>
                        <td>{{$comic->title}}</td>
                        <td>{{$comic->series}}</td>
                        <td>{{$comic->price}}</td>
                        <td>{{$comic->sale_date}}</td>
                        <td><a href="{{route('comics.show', $comic)}}" class="btn btn-secondary"><i class="fa-regular fa-eye" title="Vedi" style="color: #ffffff;"></i></a></td>
                        <td><a href="{{route('comics.edit', $comic)}}" class="btn btn-primary"><i class="fa-regular fa-pen-to-square" title="Modifica" style="color: #ffffff;"></i></a></td>
                        <td>
                            <form action="{{route('comics.destroy', $comic)}}" onsubmit="return confirm('Confermi l\'eliminazione di {{ $comic->title }} ?')" method="POST">

                                @csrf
                                @method('DELETE')

                                <button type="submit" class="btn btn-danger d-inline"><i class="fa-regular fa-trash-can" title="Elimina" style="color: #ffffff;"></i></button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    </div>
</div>
</main>

@endsection
