<nav class="navbar navbar-expand-lg bg-dark mb-5" data-bs-theme="dark">
    <div class="container">
        <a class="navbar-brand" href="#">Sistema de Cadastro</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0"></ul>
            <ul class="navbar-nav mb-2 mb-lg-0">


                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Listagem
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item d-flex gap-2" href="{{ route('cliente') }}"><i class="bi bi-person-circle"></i>Cliente</a></li>
                      <li><a class="dropdown-item d-flex gap-2" href="{{ route('produto') }}"><i class="bi bi-bag"></i>Produtos</a></li>
                    </ul>
                </li>

                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      Cadastro
                    </a>
                    <ul class="dropdown-menu">
                      <li><a class="dropdown-item d-flex gap-2" href="{{ route('cadastro.create') }}"><i class="bi bi-person-circle"></i>Clientes</a></li>
                      <li><a class="dropdown-item d-flex gap-2" href="{{ route('produto.cadastro.create') }}"><i class="bi bi-bag"></i>Produtos</a></li>
                    </ul>
                  </li>

                {{-- <li class="nav-item">
                    <a class="nav-link d-flex gap-2 text-light" href="{{ route('cadastro.create') }}"> <i class="bi bi-person-circle"></i>Cadastro</a>
                </li> --}}


                <li class="nav-item">
                    <a class="nav-link d-flex gap-2 text-light" href="#"><i class="bi bi-search"></i>Consulta</a>
                </li>

            </ul>
        </div>
    </div>
</nav>
