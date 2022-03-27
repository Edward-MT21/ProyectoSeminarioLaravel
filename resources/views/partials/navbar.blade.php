<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="/" style="color:#5f5f5f"><span style="font-size:15pt">&#9770;</span> SYSDESING</a>
        
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        @if(!Auth::check())
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav mr-auto">
                   
                    <li class="nav-item {{ Request::is('home') && ! Request::is('productos/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/home')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('/catalogo/index') && ! Request::is('productos/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalogo/index')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Productos
                        </a>
                    </li>                                   
                    <li class="nav-item {{ Request::is('nosotros') && ! Request::is('productos/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/nosotros')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Nosotros
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('contactos') && ! Request::is('productos/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/contactos')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Contactos
                        </a>
                    </li>                    
                </ul>

                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/iniciarSesion') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Iniciar sesión
                            </button>
                        </form>
                    </li>
                </ul>
            </div>
        @endif

        <!-- Administradores-->
        @if(Auth::check())
            <div class="collapse navbar-collapse" id="navbarSupportedContent" >
                <ul class="navbar-nav mr-auto">
                   
                    <li class="nav-item {{ Request::is('home') && ! Request::is('home')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/home')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Inicio
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('/catalogo/index') && ! Request::is('productos/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/catalogo/index')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Productos
                        </a>
                    </li>                                   
                    <li class="nav-item {{ Request::is('productos') && ! Request::is('productos/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/productos')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Administrar productos
                        </a>
                    </li>
                    <li class="nav-item {{  Request::is('usuarios/create') ? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/registrarUsuario')}}">
                            Registrar Usuario <!--<span>&#10010</span>-->
                        </a>
                    </li>
                    <li class="nav-item {{ Request::is('Estadisticas') && ! Request::is('productos/create')? 'active' : ''}}">
                        <a class="nav-link" href="{{url('/estadisticas')}}">
                            <span class="glyphicon glyphicon-film" aria-hidden="true"></span>
                            Estadistícas
                        </a>
                    </li>                    
                </ul>
                <ul class="navbar-nav navbar-right">
                    <li class="nav-item">
                        <form action="{{ url('/logout') }}" method="POST" style="display:inline">
                            {{ csrf_field() }}
                            <button type="submit" class="btn btn-link nav-link" style="display:inline;cursor:pointer">
                                Cerrar sesión
                            </button>
                        </form>
                    </li>
                </ul>

            </div>
        @endif
        
    </div>
</nav>
