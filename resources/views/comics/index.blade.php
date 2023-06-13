@extends('layouts.main')

@section('content')
<main>
<div class="container my-4">
    <h1 class="mb-4">Elenco Fumetti Comics</h1>
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
                        <td><a href="{{route('comics.show', $comic)}}" class="btn btn-primary"><i class="fa-regular fa-eye" style="color: #ffffff;"></i></a></td>
                    </tr>
                @endforeach
            </tbody>
    </table>
    </div>
</div>
</main>

@endsection
