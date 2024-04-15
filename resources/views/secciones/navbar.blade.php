<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item">
                    <a class="nav-link active" aria-current="page" href="{{ route('reportes.index') }}">Home</a>
                </li>
                
                @if (Auth::check())
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarScrollingDropdown" role="button"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            {{ Auth::user()->name }}


                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">

                            <li><a class="dropdown-item" href="{{ url('/logout') }}"
                                    onclick="event.preventDefault();
                    document.getElementById('logout-form').submit();">Cerrar
                                    Sesión</a>
                            </li>
                            <form id="logout-form" action="{{ url('/logout') }}" method="POST" style="display: none;">
                                {{ csrf_field() }}
                            </form>
                        </ul>
                    </li>
                @else
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="{{ url('/login') }}" id="navbarScrollingDropdown"
                            role="button" data-bs-toggle="dropdown" aria-expanded="false">
                            Iniciar Sesión
                        </a>
                        <ul class="dropdown-menu" aria-labelledby="navbarScrollingDropdown">
                            <li><a class="dropdown-item" href="{{ url('/login') }}">Iniciar Sesión</a></li>

                            <li><a class="dropdown-item" href="{{ url('/register') }}">Registrarte</a></li>
                        </ul>
                    </li>
                @endif




            </ul>
        </div>
    </div>
</nav>
