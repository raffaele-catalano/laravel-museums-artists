@extends("layout.main")


@section("content")

<table class="table">
    <thead>
        <tr>
            <th scope="col">#</th>
            <th scope="col">Name</th>
            <th scope="col">Slug</th>
            <th scope="col">Nation</th>
            <th scope="col">City</th>
            <th scope="col">Address</th>
            <th scope="col">Latitude</th>
            <th scope="col">Longitude</th>
        </tr>
    </thead>
    <tbody>
        @foreach ($museums as $museum )

        <tr>
            <td>{{$museum->id}}</td>
            <td>{{$museum->name}}</td>
            <td>{{$museum->slug}}</td>
            <td>{{$museum->nation}}</td>
            <td>{{$museum->city}}</td>
            <td>{{$museum->address}}</td>
            <td>{{$museum->latitude}}</td>
            <td>{{$museum->longitude}}</td>
        </tr>
        @endforeach
    </tbody>
</table>

@endsection
