@extends('layout.main')

@section('content')
    <main>
        <h2 class="text-center my-4">Lista Artisti</h2>

        @if (session('deleted'))
          <div class="alert alert-warning text-center">{{ session('deleted') }}</div>
        @endif

        <div class="container d-flex flex-column align-items-center justify-content-center">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col" class="col-3">Name</th>
                        <th scope="col" class="col-3">Surname</th>
                        <th scope="col" class="col-2">Type</th>
                        <th scope="col" class="col-2">Artworks</th>
                        <th scope="col" class="col-2">Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)
                        <tr>
                            <td>{{ $artist->name }}</td>
                            <td>{{ $artist->lastname }}</td>
                            <td>{{ $artist->type }}</td>
                            <td>{{ $artist->artworks->count() }}</td>
                            <td>

                                <a href="{{ route('artists.show', $artist) }}" class="btn btn-primary">
                                    <i class="fa-regular fa-eye"></i>
                                </a>

                                <a href="{{route('artists.edit', $artist)  }}" class="btn btn-warning">
                                    <i class="fa-regular fa-pen-to-square"></i>
                                </a>

                                <form action="{{ route('artists.destroy', $artist) }}" method="POST" class="d-inline" onsubmit="return confirm('Sei sicuro di cancellare quest\'elemento?')">
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
              {{ $artists->links() }}
            </div>

        </div>

    </main>
@endsection
