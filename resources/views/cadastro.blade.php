<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cadastro de clientes</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-icons/1.8.1/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.min.css">
</head>

<body>

    <header>
        @include('partials.menu')
    </header>


    <div class="container">
        <div class="row">
            <div class="col-md-12">

                <h2>Cadastro de Clientes</h2>

                <form action="{{ route('cadastro.store') }}" method="POST">

                    @csrf

                    <div class="mb-3">
                        <label for="name" class="form-label">Digite o nome do Cliente</label>
                        <input type="text" class="form-control w-75" name="name" id="name"
                            placeholder="Nome do cliente" required>
                    </div>
                    <div class="mb-3">
                        <label for="email" class="form-label">Digite o email do cliente:</label>
                        <input type="email" class="form-control w-75" name="email" id="email"
                            placeholder="cliente@example.com" >
                    </div>
                    <div class="mb-3">
                        <label for="telefone" class="form-label">Digite o telefone do cliente</label>
                        <input type="text" class="form-control w-75" name="telefone" id="telefone"
                            placeholder="7199999999">
                    </div>

                    <button type="submit" class="btn btn-primary">Cadastrar</button>
                    <button type="submit" class="btn btn-danger">Limpar</button>
                </form>



            </div>
        </div>
    </div>


        {{-- @if (session('error'))
        <div class="alert {{ session('alert-class') }} alert-dismissible fade show mt-3" role="alert">
            {{ session('error') }}
        </div>
        @endif --}}





</body>

<script>
    document.addEventListener('DOMContentLoaded', function() {
        console.log('Success:', '{{ session('success') }}');
        console.log('Error:', '{{ session('error') }}');


    @if (session('success'))
                Swal.fire({
                    title: 'Dados validos!',
                    text: '{{ session('success') }}',
                    icon: 'success',
                    confirmButtonText: 'OK'
                });

     @elseif (session('error'))
        Swal.fire({
            icon: 'error',
            title: 'Oops... Dados inválidos!'',
            text: '{{ session('error') }}',
            confirmButtonText: 'OK'
        });

    @endif

});
</script>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11/dist/sweetalert2.all.min.js"></script>

</html>
