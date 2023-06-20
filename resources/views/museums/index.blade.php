@extends("layout.main")


@section("content")
<main>
    <h2 class="text-center my-4">Lista Musei</h2>

    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    {{-- <th scope="col">#</th> --}}
                    <th scope="col">Nome</th>
                    {{-- <th scope="col">Slug</th> --}}
                    <th scope="col">Città</th>
                    <th scope="col">Nazione</th>
                    {{-- <th scope="col">Address</th> --}}
                    {{-- <th scope="col">Latitude</th> --}}
                    {{-- <th scope="col">Longitude</th> --}}
                    <th scope="col">Azioni</th>
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

                        <a href="#" class="btn btn-primary">
                            <i class="fa-regular fa-eye"></i>
                        </a>

                        <a href="#" class="btn btn-warning">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>

                        <form action="#" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button class="btn btn-danger">
                                <i class="fa-regular fa-trash-can"></i>
                            </button>
                        </form>

                        <a href="{{route('museums.show', $museum)}}" class="btn btn-primary">Vai</a>

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection
