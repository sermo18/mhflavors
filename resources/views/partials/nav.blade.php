<nav class="navbar fixed-top navbar-expand-lg bg-white navbar-light ">
    <a class="navbar-brand logo" style="height: 80px;" href="{{ route('inicio') }}"></a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse justify-content-end" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="{{ route('inicio') }}">Inicio <span class="sr-only"></span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.noticias') }}">
                    Noticias</a>

            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Sabores
                </a>
                <div class="dropdown-menu navbar-light bg-light" aria-labelledby="navbarDropdown">
                    <a class="nav-link" href="{{ route('posts.index') }}">Todos los Sabores</a>
                    <a class="nav-link" href="{{ route('posts.topsabores') }}">Top 10 Mejores Sabores</a>
                </div>
            </li>

            <li class="nav-item dropdown ">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Mezclas
                </a>
                <div class="dropdown-menu navbar-light bg-light" aria-labelledby="navbarDropdown">

                    <a class="nav-link" href="{{ route('mezclas.index') }}">Mezclas</a>
                    @if(auth()->check())
                    @if( auth()->user()->rol === 'premium' || auth()->user()->rol === 'admin')

                    <a class="nav-link" href="{{ route('mezclas.crear') }}">
                        Nueva Mezcla</a>

                    <a class="nav-link" href="{{ route('mezclas.mismezclas') }}">Mis Mezclas</a>
                    @else
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modalPremium">
                        Nueva Mezcla</a>
                    <a class="nav-link" href="" data-toggle="modal" data-target="#modalPremium">
                        Mis Mezclas</a>

                    @endif

                    @else

                    @endif
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.mapa') }}">
                    Lounges</a>
            </li>
            @if(auth()->check())
            @if( auth()->user()->rol === 'premium' || auth()->user()->rol === 'admin' )

            <li class="nav-item">
                <a class="nav-link" href="{{ route('mezclas.aleatoria', 0) }}">
                    Mezclador</a>
            </li>
            @else
            <li class="nav-item">
                <a class="nav-link" href="" data-toggle="modal" data-target="#modalPremium">
                    Aleatorio</a>
            </li>

            <div class="modal fade" id="modalPremium" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">¿No eres todavía usuario Premium?</h5>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            Hazte Premium por tan solo 2,99 euros al mes.
                            <div class="card text-center shadow border-success">
                                <div class="card-header text-white bg-success">
                                    <h3>Premium</h3>
                                    <h5>2,99 €</h5>
                                </div>

                                <div class="card-body">
                                    <h5 class="card-title">Tarifa Premium</h5>

                                </div>

                                <ul class="list-group list-group-flush">
                                    <li class="list-group-item">Lista de Sabores</li>
                                    <li class="list-group-item">Top 10 Sabores</li>
                                    <li class="list-group-item">Valorar Sabores</li>
                                    <li class="list-group-item">Lista de Mezclas</li>
                                    <li class="list-group-item">Creación de mezclas</li>
                                    <li class="list-group-item">Sección de tus mezclas favoritas</li>
                                </ul>

                            </div>
                        </div>
                        <div class="modal-footer">
                            <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                            <a href="{{ route('mezclas.premium', Auth::id()) }}" class="m-1 "><input type="button" value="Hacerse Premium" class="btn btn-dark"></input></a>
                        </div>
                    </div>
                </div>
            </div>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ route('msg.index') }}">Chat</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth_logout') }}">Logout</a>
            </li>

            @endif

            @if(auth()->guest())
            <li class="nav-item">
                <a class="nav-link" href="{{ route('auth_login') }}">
                    Login</a>
            </li>
            @endif
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.contacto') }}">
                    Contacto</a>

            </li>
        </ul>
    </div>
</nav>
<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
</script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js" integrity="sha384-b/U6ypiBEHpOf/4+1nzFpr53nxSS+GLCkfwBdFNTxtclqqenISfwAzpKaMNFNmj4" crossorigin="anonymous">
</script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js" integrity="sha384-h0AbiXch4ZDo7tp9hKZ4TsHbi047NrKGLO3SEJAg45jXxnGIfYzk4Si90RDIqNm1" crossorigin="anonymous">
</script>
