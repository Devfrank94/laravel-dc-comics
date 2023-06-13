@extends('layouts.main')

@section('content')
    <div class="container my-5">
        <h1 class="my-3">Inserisci nuovo Fumetto</h1>

        <form action="{{ route('comics.store') }}" method="POST">
            @csrf

            <div class="mb-3">
                <label for="title" class="form-label">title (*)</label>
                <input
                  id="title"
                  value="{{ old('title') }}"
                  class="form-control @error('title') is-invalid @enderror"
                  name="title"
                  placeholder="title"
                  type="text"
                >
                @error('title')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="description" class="form-label">Descrizione (*)</label>
                <textarea class="form-control"  name="description" id="description" cols="30" rows="10" placeholder="Descrizione">{{ old('description') }}</textarea>
            </div>

            <div class="mb-3">
                <label for="thumb" class="form-label">Immagine (*)</label>
                <input
                  id="thumb"
                  value="{{ old('thumb') }}"
                  class="form-control @error('thumb') is-invalid @enderror"
                  name="thumb"
                  placeholder="Inserisci path immagine"
                  type="text"
                >
                @error('thumb')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="price" class="form-label">Prezzo (*)</label>
                <input
                  id="price"
                  value="{{ old('price') }}"
                  class="form-control @error('price') is-invalid @enderror"
                  name="price"
                  placeholder="Prezzo"
                  type="text"
                >
                @error('price')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="series" class="form-label">Serie di appartenenza (*)</label>
                <input
                  id="series"
                  value="{{ old('series') }}"
                  class="form-control @error('series') is-invalid @enderror"
                  name="series"
                  placeholder="series"
                  type="text"
                >
                @error('series')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            <div class="mb-3">
                <label for="sale_date" class="form-label">Data Publicazione (*)</label>
                <input
                  id="sale_date"
                  value="{{ old('sale_date') }}"
                  class="form-control @error('sale_date') is-invalid @enderror"
                  name="sale_date"
                  placeholder="Data Publicazione"
                  type="text"
                >
                @error('sale_date')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>


                <button type="submit" class="btn btn-success">Salva</button>
                <button type="reset" class="btn btn-danger">Cancella</button>
            </form>
        </div>
    </main>
@endsection
