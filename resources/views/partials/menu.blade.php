<nav class="navbar navbar-expand-lg bg-success mb-5" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema de Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <ul class="navbar-nav mb-2 mb-lg-0">

                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 text-light" href="{{ route('cliente') }}"> <i class="bi bi-person-circle"></i>Listagem de Clientes</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 text-light" href="{{ route('cadastro.create') }}"> <i class="bi bi-person-circle"></i>Cadastro</a>
                </li>

                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 text-light" href="#"><i class="bi bi-search"></i>Consulta</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
