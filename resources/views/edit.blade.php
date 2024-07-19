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
                    <h2>Atualizar Clientes</h2>

                    <form action="" method="POST" >
                        <div class="mb-3">
                            <label for="name" class="form-label">Digite o nome do Cliente</label>
                            <input type="text" class="form-control w-75" id="name" placeholder="Nome do cliente">
                          </div>
                          <div class="mb-3">
                            <label for="email" class="form-label">Digite o email do cliente:</label>
                            <input type="email" class="form-control w-75" id="email" placeholder="cliente@example.com">
                          </div>
                          <div class="mb-3">
                            <label for="telefone" class="form-label">Digite o telefone do cliente</label>
                            <input type="text" class="form-control w-75" id="telefone" placeholder="7199999999">
                          </div>
                          <div class="mb-3">
                            <label for="fornecedor" class="form-label">Informe o fornecedor</label>
                            <input type="text" class="form-control w-75" id="fornecedor" placeholder="Fornecedor">
                          </div>
                          <div class="mb-3">
                            <label for="conferente" class="form-label">Informe o conferente</label>
                            <input type="text" class="form-control w-75" id="conferente" placeholder="Conferente">
                          </div>

                          <button type="submit" class="btn btn-primary">Cadastrar</button>
                          <button type="submit" class="btn btn-danger">Limpar</button>


                    </form>
                </div>
            </div>
        </div>


    </section>


    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>
</html>
