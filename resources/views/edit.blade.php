<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Sistema de Cadastro</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">

</head>
<body>

    <header>
        @include("partials.menu")
    </header>

    <section>

        <div class="container ">
            <div class="row">
                <div class="col-md-12">

                    <div class="d-flex justify-content-center align-items-center">
                        <form action="{{ route('cliente.update', ['id' => $cliente->id]) }}" method="post" class="col-md-8">

                            @csrf
                            @method("put")

                            <div class="p-1 bg-success bg-opacity-80 border border-success rounded mb-3">
                                <h2 class="p-2 m-2 text-light text-center">Atualizar Clientes</h2>
                            </div>

                            <div class="mb-3">
                                <label for="name" class="form-label">Digite o nome do Cliente</label>
                                <input type="text" class="form-control" name="name" id="name"
                                    placeholder="Nome do cliente" required value="{{ $cliente->name }}">

                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label">Digite o email do cliente:</label>
                                <input type="email" class="form-control " name="email" id="email"
                                    placeholder="cliente@example.com" value="{{ $cliente->email }}">

                            </div>
                            <div class="mb-3">
                                <label for="telefone" class="form-label">Digite o telefone do cliente</label>
                                <input type="text" class="form-control mb-3" name="telefone" id="telefone"
                                    placeholder="7199999999" value="{{ $cliente->telefone }}">
                            </div>

                            <button type="submit" class="btn btn-primary">Editar</button>
                            <a class="btn btn-success" href=" {{ route('cliente') }}">Listagem de clientes</a>
                        </form>

                    </div>
                </div>
            </div>
        </div>


    </section>



</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {

                @if (session('edit'))
                    Swal.fire({
                        title: 'Dados válidos!',
                        text: '{{ session('edit') }}',
                        icon: 'success',
                        confirmButtonText: 'OK'
                    });

                @endif

    });
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>
</html>
