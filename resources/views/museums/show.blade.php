@extends('layout.main')

@section('content')
    <main>
        <h2 class="text-center my-4">Museo</h2>

        <div class="container text-center">

          <div>
            <h2>Nome</h2>
            <p>{{$museum->name}}</p>
          </div>

          <div>
            <h2>Foto</h2>
            <img src="{{$museum->photo}}" alt="">
          </div>

          <div>
            <h2>Indirizzo</h2>
            <p> {{$museum->address}}</p>
          </div>

          <div>
            <h2>Città</h2>
            <p>{{$museum->city}}</p>
          </div>

          <div>
            <h2>Nazione</h2>
            <p>{{$museum->nation}}</p>
          </div>

          <div>
            <h2>Latitudine</h2>
            <p> {{$museum->latitude}}</p>
          </div>

          <div>
            <h2>Longitudine</h2>
            <p>{{$museum->longitude}}</p>
          </div>

          <div>
            <a href="{{route('museums.index')}}" class="btn btn-primary">Indietro</a>
          </div>









        </div>



    </main>
@endsection
