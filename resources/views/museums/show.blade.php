@extends('layout.main')

@section('content')
    <div class="container text-center">
      <div class="container d-flex justify-content-center align-items-center mb-2">
        <h2 class="fw-bold text-warning me-2">{{ $museum->name . ' ' . $museum->lastname }}</h2>
        <a href="#" class="btn btn-warning mx-2">
          <i class="fa-regular fa-pen-to-square"></i>
        </a>

        <form action="{{ route('museums.destroy', $museum) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di cancellare quest\'elemento?')">
            @csrf
            @method('DELETE')
            <button class="btn btn-danger">
                <i class="fa-regular fa-trash-can"></i>
            </button>
        </form>
      </div>
        <img src="{{ $museum->photo }}" alt="" class="w-25">
        <h5 class="my-2"><span class="text-primary">Nation:</span> {{ $museum->nation }}</h5>
        <h5 class="my-2"><span class="text-primary">City:</span> {{ $museum->city }}</h5>
        <h5 class="my-2"><span class="text-primary">Address:</span> {{ $museum->address }}</h5>
        <h5 class="my-2"><span class="text-primary">Latitude:</span> {{ $museum->latitude }}</h5>
        <h5 class="my-2"><span class="text-primary">Longitude:</span> {{ $museum->longitude }}</h5>

        <a href="{{ route('museums.index') }}" class="btn btn-primary my-2">
            <i class="fa-solid fa-rotate-left"></i>
        </a>

    </div>
@endsection

{{-- @extends('layout.main')

@section('content')
    <div class="container text-center">
        <h2 class="text-center my-4">Museo</h2>

          <div>
            <h2>Nome</h2>
            <p>{{$museum->name}}</p>
          </div>

          <div>
            <h2>Foto</h2>
            <img src="{{$museum->photo}}" alt="">
          </div>

          <div>
            <h2>Indirizzo</h2>
            <p> {{$museum->address}}</p>
          </div>

          <div>
            <h2>Città</h2>
            <p>{{$museum->city}}</p>
          </div>

          <div>
            <h2>Nazione</h2>
            <p>{{$museum->nation}}</p>
          </div>

          <div>
            <h2>Latitudine</h2>
            <p> {{$museum->latitude}}</p>
          </div>

          <div>
            <h2>Longitudine</h2>
            <p>{{$museum->longitude}}</p>
          </div>

          <a href="{{route('museums.index')}}" class="btn btn-primary  my-2">
             <i class="fa-solid fa-rotate-left"></i>
          </a>

          <a href="#" class="btn btn-warning">
              <i class="fa-regular fa-pen-to-square"></i>
          </a>

          <form action="{{ route('museums.destroy', $museum) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di cancellare quest\'elemento?')">
              @csrf
              @method('DELETE')
              <button class="btn btn-danger">
                  <i class="fa-regular fa-trash-can"></i>
              </button>
          </form>

    </div>
@endsection --}}
