@extends("layout.main")


@section("content")
<main>
    <h2 class="text-center my-4">Lista Opere d'Arte</h2>

    <div class="container d-flex flex-column justify-content-center align-items-center">
        <table class="table table-dark w-75">
            <thead>
                <tr>
                    {{-- <th scope="col">ID</th> --}}
                    <th scope="col" class="col-5">Nome</th>
                    <th scope="col" class="col-3">Data</th>
                    <th scope="col" class="col-2">Azioni</th>
                </tr>
            </thead>

            <tbody>
                @foreach ($artworks as $artwork )
                <tr>

                    {{-- <td>{{$artwork->id}}</td> --}}
                    <td>{{$artwork->name}}</td>
                    <td>{{$artwork->date}}</td>


                    <td>

                        <a href="{{route('artworks.show', $artwork)}}" class="btn btn-primary">
                            <i class="fa-regular fa-eye"></i>
                        </a>

                        <a href="{{route('artworks.edit', $artwork)}}" class="btn btn-warning">
                            <i class="fa-regular fa-pen-to-square"></i>
                        </a>

                        <form
                        action="{{route('artworks.destroy', $artwork)}}"
                        method="POST"
                        class="d-inline"
                        onsubmit="return confirm('confermi l\'eliminazione di {{$artwork->name}} ?')">
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

        <div>
          {{ $artworks->links() }}
        </div>

    </div>
</main>

@endsection
