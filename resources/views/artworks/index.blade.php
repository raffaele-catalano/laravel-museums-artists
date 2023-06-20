@extends("layout.main")


@section("content")
<main>
    <h2 class="text-center my-4">Lista Opere d'Arte</h2>

    <div class="container">
        <table class="table table-dark">
            <thead>
                <tr>
                    <th scope="col">ID</th>
                    <th scope="col">Nome</th>
                    <th scope="col">Data</th>
                    <th scope="col">Azioni</th>
                </tr>
            </thead>
            
            <tbody>
                @foreach ($artworks as $artwork )
                <tr>

                    <td>{{$artwork->id}}</td>
                    <td>{{$artwork->name}}</td>
                    <td>{{$artwork->date}}</td>

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

                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</main>

@endsection
