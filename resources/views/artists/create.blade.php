@extends('layout.main')

@section('content')
    <div class="container">
        <h2 class="my-2 fw-bold text-center">Add a new <span class="text-primary">Artist</span></h2>

        @if ($errors->any())
            <div class="alert alert-warning" role="alert">
                <ul>
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach

                </ul>
            </div>
        @endif

        <form action="{{ route('artists.store') }}" method="POST">

            @csrf

            <div class="mb-3">
                <label for="name" class="form-label">Name (*)</label>
                <input id="name" value="{{ old('name') }}" class="form-control @error('name') is-invalid @enderror" name="name" placeholder="Name" type="text">
                    @error('name')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="lastname" class="form-label">Lastname (*)</label>
                <input id="lastname" value="{{ old('lastname') }}" class="form-control @error('lastname') is-invalid @enderror" name="lastname" placeholder="Lastname" type="text">
                    @error('lastname')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="image" class="form-label">Image (*)</label>
                <input id="image" value="{{ old('image') }}" class="form-control @error('image') is-invalid @enderror"
                name="image" placeholder="Image Path" type="text">
                    @error('thumb')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="biography" class="form-label">Biography</label>
                <textarea cols="30" rows="10" id="biography" value="{{ old('biography') }}" class="form-control @error('biography') is-invalid @enderror" name="biography" placeholder="Biography" type="text"></textarea>
                    @error('biography')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="birth_date" class="form-label">Birth Date</label>
                <input id="birth_date" value="{{ old('birth_date') }}"
                class="form-control @error('sale_date') is-invalid @enderror" name="birth_date" placeholder="YYYY-MM-DD"
                type="text">
                    @error('birth_date')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="death_date" class="form-label">Death Date</label>
                <input id="death_date" value="{{ old('death_date') }}"
                class="form-control @error('sale_date') is-invalid @enderror" name="death_date" placeholder="YYYY-MM-DD"
                type="text">
                    @error('death_date')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="mb-3">
                <label for="gender" class="form-label">Gender</label>
                <input id="gender" value="{{ old('gender') }}" class="form-control @error('gender') is-invalid @enderror"
                name="gender" placeholder="Gender" type="text">
                    @error('gender')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>


            <div class="mb-3">
                <label for="type" class="form-label">Type</label>
                <input id="type" value="{{ old('type') }}"
                class="form-control @error('type') is-invalid @enderror" name="type" placeholder="Type"
                type="text">
                    @error('type')
                        <p class="text-danger fw-bold">{{ $message }}</p>
                    @enderror
            </div>

            <div class="btn-container d-flex justify-content-center mb-3">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>

        </form>
    </div>
@endsection
