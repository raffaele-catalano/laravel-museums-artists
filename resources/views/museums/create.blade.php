@extends('layout.main')

@section('content')
    <div class="container">
      <h2 class="my-2 fw-bold text-center">Add a new <span class="text-primary">Museum</span></h2>

      @if ($errors->any())
          <div class="alert alert-danger" role="alert">
              <ul>
                  @foreach ($errors->all() as $error)
                      <li>{{ $error }}</li>
                  @endforeach
              </ul>
          </div>
      @endif

        <form action="{{ route('museums.store') }}" method="POST" class="scroll">
            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name (*)</label>
                <input type="text" class="form-control @error('name') is-invalid @enderror" id="name" name="name"
                    placeholder="Name" value="{{ old('name') }}">
                @error('name')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>

            {{-- 2 --}}
            <div class="mb-3">
                <label for="nation" class="form-label">Nation</label>
                <input type="text" class="form-control" id="nation" name="nation" placeholder="Nation"
                    value="{{ old('nation') }}">
            </div>
            {{-- 3 --}}
            <div class="mb-3">
                <label for="city" class="form-label">City</label>
                <input type="text" class="form-control" id="city" name="city" placeholder="City"
                    value="{{ old('city') }}">
            </div>
            {{-- 4 --}}
            <div class="mb-3">
                <label for="address" class="form-label">Address</label>
                <input type="text" class="form-control @error('address') is-invalid @enderror" id="address"
                    name="address" placeholder="Address" value="{{ old('address') }}">
                @error('address')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- 5 --}}
            <div class="mb-3">
                <label for="web_site" class="form-label">Website</label>
                <input type="text" class="form-control" id="web_site" name="web_site"
                    placeholder="Website" value="{{ old('web_site') }}">
            </div>
            {{-- 6 --}}
            <div class="mb-3">
                <label for="photo" class="form-label">Image</label>
                <input type="file" class="form-control" id="photo" name="photo" placeholder="Upload Image"
                    value="{{ old('photo') }}">
            </div>
            {{-- 7 --}}
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea cols="30" rows="10" id="description" value="{{ old('description') }}" class="form-control @error('description') is-invalid @enderror" name="description" placeholder="Description" type="text"></textarea>
                    @error('description')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>
            {{-- 8 --}}
            <div class="mb-3">
                <label for="latitude" class="form-label">Latitude</label>
                <input type="text" class="form-control @error('latitude') is-invalid @enderror" id="latitude"
                    name="latitude" placeholder="Latitude" value="{{ old('latitude') }}">
                @error('latitude')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- 9 --}}
            <div class="mb-3">
                <label for="longitude" class="form-label">Longitude</label>
                <input type="text" class="form-control @error('longitude') is-invalid @enderror" id="longitude"
                    name="longitude" placeholder="Longitude" value="{{ old('longitude') }}">
                @error('longitude')
                    <p class="text-danger">{{ $message }}</p>
                @enderror
            </div>
            {{-- 10 --}}
            <div class="btn-container d-flex justify-content-center mb-3">
              <button type="submit" class="btn btn-primary">Submit</button>
          </div>
        </form>
    </div>
@endsection
