@extends('layout.main')

@section('content')
    <div class="container">

      <h1 class="text-center">Modifica Opera d'arte</h1>


      <form action="{{route('artworks.update', $artwork)}}" method="POST">

        @method('PUT')

        <div>

          @csrf

          {{-- nome --}}
          <label for="name" class="form-label fw-bold">Nome:</label>
          <input
          type="text"
          class="form-control"
          id="name"
          name="name"
          value="{{old('name')}}"
          aria-describedby="name"
          placeholder="Nome Opera d'Arte">
          <p></p>
        </div>

        {{-- data --}}
        <label for="date" class="form-label fw-bold">Data:</label>
        <input
        type="date"
        class="form-control"
        id="date"
        name="date"
        value="{{old('date')}}"
        aria-describedby="date"
        placeholder="Inserisci la data">

        {{-- descrizione --}}
        <div class="mb-3">
          <label for="descriprion" class="form-label fw-bold">Descrizione:</label>
          <textarea
          name="descriprion"
          id="descriprion"
          cols="145"
          rows="10"
          placeholder="testo...">
          {{old('description')}}
        </textarea>
        </div>



        <button type="submit" class="btn btn-primary my-4">Invia</button>
      </div>


      </form>

    </div>


    <script>
      classiceditor
          .create( document.queryselector( '#text' ) )
          .catch( error => {
              console.error( error );
          } );
    </script>

@endsection
