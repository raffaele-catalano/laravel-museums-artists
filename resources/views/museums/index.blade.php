@extends("layout.main")


@section("content")
<main>
    <h2 class="text-center my-4">Lista Musei</h2>

    @if (session('deleted'))
      <div class="alert alert-warning text-center">{{ session('deleted') }}</div>
    @endif

    <div class="container d-flex justify-content-center">
        <table class="table table-dark w-75">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col" class="col-4">Name</th>
                    {{-- <th scope="col">Slug</th> --}}
                    <th scope="col" class="col-3">City</th>
                    <th scope="col" class="col-3">Nation</th>
                    {{-- <th scope="col">Address</th> --}}
                    {{-- <th scope="col">Latitude</th> --}}
                    {{-- <th scope="col">Longitude</th> --}}
                    <th scope="col" class="col-2">Actions</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($museums as $museum )
                <tr>
                    {{-- <td>{{$museum->id}}</td> --}}
                    <td>{{$museum->name}}</td>
                    {{-- <td>{{$museum->slug}}</td> --}}
                    <td>{{$museum->city}}</td>
                    <td>{{$museum->nation}}</td>
                    {{-- <td>{{$museum->address}}</td> --}}
                    {{-- <td>{{$museum->latitude}}</td> --}}
                    {{-- <td>{{$museum->longitude}}</td> --}}
                    <td>

                        <a href="{{route('museums.show', $museum)}}" class="btn btn-primary">
                            <i class="fa-regular fa-eye"></i>
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

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection
