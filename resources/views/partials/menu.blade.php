<nav class="navbar navbar-expand-lg navbar-dark bg-dark justify-content-between">
    <a class="navbar-brand" href="{{ route('home') }}">LaraNews</a>
    <div class="collapse navbar-collapse" id="nvb">
        <ul class="navbar-nav">
            <li class="nav-item">
                <a class="nav-link" href="{{ route('categories.index') }}">Categorias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('posts.index') }}">Notícias</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('users.index') }}">Usuários</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}">Logout</a>
            </li>
        </ul>
    </div>
    <form class="form-inline">
        <input class="form-control mr-sm-2" type="search" placeholder="pesquisar..." aria-label="Search">
        <button class="btn btn-outline-warning my-2 my-sm-2" type="submit">Pesquisar</button>
    </form>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nvb" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
</nav>