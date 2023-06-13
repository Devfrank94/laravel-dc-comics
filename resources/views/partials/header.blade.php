<header class="p-3 text-center">
    <img class="my-4" src="/dc-logo.png" alt="DC Logo">
    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }} " href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'comics.index' ? 'active' : '' }}" href="{{ route('comics.index') }}">Elenco Fumetti</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'comics.create' ? 'active' : '' }}" href="{{ route('comics.create') }}">Aggiungi Nuovo</a>
        </li>
    </ul>

</header>
