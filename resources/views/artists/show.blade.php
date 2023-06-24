@extends('layout.main')

@section('content')
    <div class="container text-center">
      <div class="container d-flex justify-content-center align-items-center mb-2">
        <h2 class="fw-bold text-warning me-2">{{ $artist->name . ' ' . $artist->lastname }}</h2>
        <a href="{{ route('artists.edit', $artist) }}" class="btn btn-warning mx-2">
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
        <img src="{{ $artist->image }}" alt="" class="w-25">
        <h5 class="my-2"><span class="text-primary">Gender:</span> {{ $artist->gender }}</h5>
        <h5 class="my-2"><span class="text-primary">Biography:</span> {{ $artist->biography }}</h5>
        <h5 class="my-2"><span class="text-primary">Birth Date:</span> {{ $artist->birth_date }}</h5>
        <h5 class="my-2"><span class="text-primary">Death Date:</span> {{ $artist->death_date }}</h5>
        <h5 class="my-2"><span class="text-primary">Type:</span> {{ $artist->type }}</h5>

        @if ($artist->artworks->count() > 0)
          <h3 class="text-primary d-block mt-3">Artworks:</h3>

          <div class="row">
            @foreach ($artist->artworks as $artwork)
              <div class="col-4">
                <div class="border border-light">
                  <img
                    src="{{ $artwork->image }}"
                    alt="{{ $artwork->name }}"
                    class="card-img-top"
                  >
                  <h5 class="my-2"><span class="text-primary d-block">Name: </span>{{ $artwork->name }}</h5>
                  <h5 class="my-2"><span class="text-primary d-block">Date: </span>{{ $artwork->date }}</h5>
                  <h5 class="my-2"><span class="text-primary d-block">Description: </span>{{ $artwork->description }}</h5>
                </div>
              </div>
            @endforeach
          </div>
        @endif

        <a href="{{ route('artists.index') }}" class="btn btn-primary my-2">
            <i class="fa-solid fa-rotate-left"></i>
        </a>

    </div>
@endsection
