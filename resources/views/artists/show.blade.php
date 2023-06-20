@extends('layout.main')

@section('content')
    <div class="container text-center">
        <h2>{{ $artist->name . ' ' . $artist->lastname }}</h2>
        <img src="{{ $artist->image }}" alt="">
        <span class="d-block my-2">Tipo: {{ $artist->type }}</span>
        <span class="d-block my-2">Genere: {{ $artist->gender }}</span>
        <span class="d-block my-2">Data di nascita: {{ $artist->birth_date }}</span>
        <span class="d-block my-2">Data di morte: {{ $artist->death_date }}</span>
        <span class="d-block my-2">Biografia:</span>
        <p>{{ $artist->biography }}</p>
        <a href="{{ route('artists.index') }}" class="btn btn-primary my-2">
            <i class="fa-solid fa-rotate-left"></i>
        </a>

        <a href="#" class="btn btn-warning">
          <i class="fa-regular fa-pen-to-square"></i>
        </a>

        <form action="{{ route('artists.destroy', $artist) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di cancellare quest\'elemento?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                <i class="fa-regular fa-trash-can"></i>
            </button>
        </form>
    </div>
@endsection
