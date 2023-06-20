<header>
    <div class="container-fluid d-flex justify-content-between align-items-center">

      <ul class="nav m-3">
          <li class="nav-item m-2">
              <a href="{{ route('home') }}">Home</a>
          </li>
          <li class="nav-item m-2">
              <a href="{{ route('artists.index') }}">Artists List</a>
          </li>
          <li class="nav-item m-2">
              <a href="{{ route('museums.index') }}">Museums List</a>
          </li>
          <li class="nav-item m-2">
            <a href="{{route('artworks.index')}}">Artworks List</a>
        </li>
      </ul>

      <ul class="nav m-3">
        <li class="nav-item m-2">
            <a href="{{ route('artists.create') }}">Artist <i class="fa-solid fa-plus"></i></a>
        </li>
        <li class="nav-item m-2">
          <a href="{{ route("museums.create") }}">Museum <i class="fa-solid fa-plus"></i></a>
        </li>
        <li class="nav-item m-2">
          <a href="#">Artwork <i class="fa-solid fa-plus"></i></a>
        </li>
      </ul>
    </div>
</header>

