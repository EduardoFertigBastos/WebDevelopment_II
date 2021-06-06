<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="#" target="" class="navbar-brand">Marcondes</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toogler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{route('contas.index')}}" class="nav-link">Home</a>
            </li>
        </ul>
        @if (Route::getCurrentRoute()->getName() != 'contas.index')
            <a href="#" onclick="goBack()" class="btn btn-warning">
                Voltar
            </a>
        @endif
    </div>
</nav>
