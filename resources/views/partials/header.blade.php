<header>
    <ul class="nav m-3">
        <li class="nav-item m-2">
            <a href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item m-2">
            <a href="{{ route('artists.index') }}">Lista Artisti</a>
        </li>
        <li class="nav-item m-2">
            <a href="{{ route('museums.index') }}">Lista Musei</a>
        </li>
        <li class="nav-item m-2">
          <a href="{{route('artworks.index')}}">Lista Opere d'Arte</a>
      </li>
        <li class="nav-item m-2">
            <a href="{{ route('artists.create') }}">Aggiungi un Artista</a>
        </li>
        <li class="nav-item m-2">
            <a href="{{ route("museums.create") }}">Aggiungi un Museo</a>
        </li>
        <li class="nav-item m-2">
          <a href="#">Aggiungi un Opera d'Arte</a>
      </li>
    </ul>
</header>

