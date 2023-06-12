<header class="p-3">

    <ul class="nav nav-tabs">
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'home' ? 'active' : '' }} " href="{{ route('home') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link {{ Route::currentRouteName() === 'comics' ? 'active' : '' }}" href="{{ route('comics') }}">Elenco Fumetti</a>
        </li>
    </ul>

</header>
