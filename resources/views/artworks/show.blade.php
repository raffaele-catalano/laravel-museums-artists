@extends('layout.main')

@section('content')
    <div class="container text-center">
      <div class="container d-flex justify-content-center align-items-center mb-2">
        <h2 class="fw-bold text-warning me-2">{{ $artwork->name }}</h2>
        <a href="{{route('artworks.edit', $artwork)}}" class="btn btn-warning mx-2">
          <i class="fa-regular fa-pen-to-square"></i>
        </a>

        <form action="{{ route('artworks.destroy', $artwork) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di cancellare quest\'elemento?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                <i class="fa-regular fa-trash-can"></i>
            </button>
        </form>
      </div>
        <img src="{{ $artwork->photo }}" alt="" class="w-25">
        <h5 class="my-2"><span class="text-primary">Name:</span> {{ $artwork->name }}</h5>

        <div>
          <img src="{{$artwork->image}}" alt="">
        </div>

        <h5 class="my-2"><span class="text-primary">date:</span>
          @php
            $date = date_create($artwork->date);
          @endphp
            {{date_format($date, 'd/m/Y')  }}</h5>

            <div class="description">
              <h5 class="my-2"><span class="text-primary">Description:</span> {{ $artwork->description }}</h5>
            </div>

        <a href="{{ route('artworks.index') }}" class="btn btn-primary my-2">
            <i class="fa-solid fa-rotate-left"></i>
        </a>

    </div>
@endsection
