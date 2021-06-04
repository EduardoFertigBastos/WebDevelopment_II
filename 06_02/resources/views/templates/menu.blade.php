<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
    <a href="#" target="" class="navbar-brand">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toogler-icon"></span>
    </button>

    <div class="collapse navbar-collapse">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item">
                <a href="{{route('index')}}" class="nav-link">Home</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link">Link</a>
            </li>
            <li class="nav-item">
                <a href="" class="nav-link disabled">disabled</a>
            </li>
        </ul>
        @if (Route::getCurrentRoute()->getName() != 'index')
            <a href="#" onclick="goBack()" class="btn btn-warning">
                Voltar
            </a>
        @endif
    </div>
</nav>
