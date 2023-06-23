@extends("layout.main")

@section("content")

<form action="{{route("museums.store")}}" method="POST" class="scroll" enctype="multipart/form-data">
    @csrf

    @if ($errors->any())

    <div class="alert alert-danger" role="alert">
        <ul>
        @foreach ($errors->all() as $error)
            <li>{{$error}}</li>
        @endforeach
        </ul>
    </div>
    @endif
    <div class="mb-3">
        <label for="name" class="form-label">Nome *</label>
        <input
        type="text"
        class="form-control @error("name") is-invalid @enderror"
        id="name"
        name="name"
        placeholder="inserisci il Nome"
        value="{{old("name")}}"
        >
        @error("name") <p class="text-danger">{{$message}}</p> @enderror
    </div>

    {{-- 2 --}}
    <div class="mb-3">
        <label for="nation" class="form-label">Nazione</label>
        <input type="text" class="form-control" id="nation" name="nation" placeholder="inserisci la nazione"
        value="{{old("nation")}}"
        >
    </div>
    {{-- 3 --}}
    <div class="mb-3">
        <label for="city" class="form-label">Città</label>
        <input type="text" class="form-control" id="city" name="city" placeholder="inserisci la città"
        value="{{old("city")}}"
        >
    </div>
    {{-- 4 --}}
    <div class="mb-3">
        <label for="address" class="form-label">Indirizzo</label>
        <input type="text" class="form-control @error("address") is-invalid @enderror" id="address" name="address" placeholder="inserisci l'indirizzo"
        value="{{old("address")}}"
        >
        @error("address") <p class="text-danger">{{$message}}</p> @enderror
    </div>
    {{-- 5 --}}
    <div class="mb-3">
        <label for="web_site" class="form-label">Sito Web</label>
        <input
        type="text"
        class="form-control"
        id="web_site"
        name="web_site"
        placeholder="inserisci l'indirizzo web"
        value="{{old("web_site")}}"
        >
    </div>
    {{-- 6 --}}
    <div class="mb-3">
        <label for="photo" class="form-label">Immagine</label>
        <input
        type="file"
        class="form-control"
        id="photo"
        name="image"
        placeholder="inserisci l'immagine"
        value="{{old("photo")}}"
        >
    </div>
    {{-- 7 --}}
    <div class="mb-3">
        <label for="description" class="form-label">Descrizione</label>
        <input type="text-area" class="form-control" id="description" name="description" placeholder="inserisci la descrizione"
        value="{{old("description")}}"
        >
    </div>
    {{-- 8 --}}
    <div class="mb-3">
        <label for="latitude" class="form-label">Latitudine</label>
        <input
        type="text"
        class="form-control @error("latitude") is-invalid @enderror"
        id="latitude"
        name="latitude"
        placeholder="inserisci la latitudine"
        value="{{old("latitude")}}"
        >
        @error("latitude") <p class="text-danger">{{$message}}</p> @enderror
    </div>
    {{-- 9 --}}
    <div class="mb-3">
        <label for="longitude" class="form-label">Longitudine</label>
        <input
        type="text"
        class="form-control @error("longitude") is-invalid @enderror"
        id="longitude"
        name="longitude"
        placeholder="inserisci la longitudine"
        value="{{old("longitude")}}"
        >
        @error("longitude") <p class="text-danger">{{$message}}</p> @enderror
    </div>
    {{-- 10 --}}
    <button type="submit" class="btn btn-primary">Aggiungi Museo</button>
    </form>
    @endsection



