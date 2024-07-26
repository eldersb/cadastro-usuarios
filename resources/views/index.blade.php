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
                        <div class="container-child col-sm-2 col-md-8">

                            <div class="p-1 bg-dark bg-opacity-80 border border-success rounded mt-3 mb-3">
                                <h2 class="p-2 m-2 text-light text-center">Listagem de Clientes</h2>
                            </div>

                            <table class="table table-responsive mt-4">
                                <thead class="table-secondary">

                                  <tr>
                                    <th>#</th>
                                    <th>Nome</th>
                                    <th>Email</th>
                                    <th>Telefone</th>
                                    <th>Cadastrado:</th>
                                    <th></th>

                                </tr>
                                </thead>
                                <tbody>

                                        @foreach ($clientes as $cliente)
                                        <tr>
                                            <td>{{ $cliente->id }}</td>
                                            <td>{{ $cliente->name }}</td>
                                            <td>{{ $cliente->email }}</td>
                                            <td>{{ $cliente->telefone }}</td>
                                            <td>{{ $cliente->created_at->format('d/m/Y à\s H:i')}}</td>

                                            <td>
                                                <form action=" {{ route('cliente.destroy', ['id' => $cliente->id]) }}" method="post">
                                                    @csrf
                                                    @method("delete")
                                                    <a class="btn btn-sm btn-primary text-light" href="{{ route('cliente.edit', ['id' => $cliente->id]) }}">Editar</a>
                                                    <button type="submit" class="btn btn-sm btn-danger" >Excluir</button>
                                                </form>

                                            </td>
                                        </tr>

                                        @endforeach


                                </tbody>

                              </table>



                              <div class="d-flex justify-content-center align-items-center gap-3">

                                <div class="mt-3">
                                    {{ $clientes->links() }}
                                </div>

                                <a href=" {{ route('cadastro.create') }}" class="btn btn-primary text-light"> Novo cliente</a>


                              </div>







                        </div>


                    </div>

                </div>
            </div>
        </div>


    </section>

    <script>
        document.addEventListener('DOMContentLoaded', function() {

                    @if (session('delete'))
                        Swal.fire({
                            title: 'OK!',
                            text: '{{ session('delete') }}',
                            icon: 'success',
                            confirmButtonText: 'OK'
                        });

                    @endif

        });
    </script>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

</body>
</html>
