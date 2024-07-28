<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Detalhes do cliente</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

</head>
<body>

    <header>
        @include('partials.menu')
    </header>

    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <div class="d-flex justify-content-center">
                    <div class="container-child col-sm-2 col-md-8">

                        <div class="p-1 bg-dark bg-opacity-80 border border-success rounded mt-3 mb-3">
                            <h2 class="p-2 m-2 text-light text-center">{{ $cliente->name }}</h2>
                        </div>

                        <div class="d-flex justify-content-center">
                            <div class="card mt-3" style="width: 16rem;">

                                @if ($cliente->cover)
                                <img src="{{ asset('storage/cliente/' . $cliente->cover) }}" class="card-img-top" alt="Imagem do Cliente">
                                @else
                                <img src="https://via.placeholder.com/150" class="card-img-top" alt="Imagem do Cliente">
                                @endif

                                <div class="card-body">
                                    <h5 class="card-title">
                                        Detalhes do cliente:
                                    </h5>
                                </div>
                                    <ul class="list-group list-group-flush">
                                        <li class="list-group-item">{{ $cliente->name }}</li>
                                        <li class="list-group-item">{{ $cliente->email }}</li>
                                        <li class="list-group-item">{{ $cliente->telefone }}</li>
                                        <li class="list-group-item">{{ $cliente->created_at->format('d/m/Y à\s H:i') }}</li>
                                        <li  class="list-group-item d-flex justify-content-center">
                                            <a class="btn btn-warning text-light mt-2" href="{{ route('cliente') }}">
                                                <i class="bi bi-list-ol"></i> Listagem de clientes
                                            </a>
                                        </li>

                                      </ul>


                            </div>

                        </div>

                    </div>
                </div>

            </div>
        </div>
    </div>





</body>
</html>




