<nav class="navbar navbar-expand-lg navbar-light navbar-socialapp">
    <div class="container">

        <a class="navbar-brand" href="{{ route('home') }}"><i class="fab fa-facebook-square text-primary mr-2"></i>Fakebook</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                @guest()
                    <li class="nav-item"><a href="{{ route('register') }}" class="nav-link text-primary">Registrarse</a></li>
                    <li class="nav-item"><a href="{{ route('login') }}" class="nav-link text-primary">Iniciar sesión</a></li>
                @else
                    <li class="nav-item"><a href="{{ route('friends.index') }}" class="nav-link">Amigos</a></li>
                    <li class="nav-item"><a href="{{ route('accept-friendships.index') }}" class="nav-link">Solicitudes</a></li>
                    <notification-list><i class="fa fa-bell"></i></notification-list>

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name }}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="{{ route('users.show', Auth::user()) }}">Perfil</a>
                            <div class="dropdown-divider"></div>
                            <a onclick="document.getElementById('logout').submit()" class="dropdown-item" href="#">Cerrar sesión</a>
                        </div>
                    </li>

                    <form id="logout" action="{{ route('logout') }}" method="POST">@csrf</form>
                @endguest
            </ul>

        </div>
    </div>
</nav>
