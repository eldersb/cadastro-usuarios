<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

<div class="card" style="width: 18rem;">

    @if ($cliente->cover)
    <img src="{{ asset('storage/cliente/' . $cliente->cover) }}" class="card-img-top" alt="Imagem do Cliente">
    @else
    <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagem do Cliente">
    @endif

    <div class="card-body">
        <h5>Detalhes do cliente:</h5>
        <h5 class="card-title">{{ $cliente->nome }}</h5>
        <p class="card-text">{{ $cliente->email }}</p>
        <p class="card-text">{{ $cliente->telefone }}</p>
    </div>
  </div>
