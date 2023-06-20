@extends('layout.main')

@section('content')
    <main>
        <h2 class="text-center my-4">Lista Artisti</h2>

        <div class="container">
            <table class="table table-dark">
                <thead>
                    <tr>
                        <th scope="col">Nome</th>
                        <th scope="col">Cognome</th>
                        {{-- <th scope="col">Genere</th> --}}
                        <th scope="col">Azioni</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($artists as $artist)
                        <tr>
                            <td>{{ $artist->name }}</td>
                            <td>{{ $artist->lastname }}</td>
                            {{-- <td>{{ $artist->gender }}</td> --}}
                            <td>
                                <a href="{{ route('artists.show', $artist) }}" class="btn btn-primary">Go To</a>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>

    </main>
@endsection
