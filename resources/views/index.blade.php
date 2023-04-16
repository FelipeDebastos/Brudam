<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Laravel</title>
    <!-- Inclui o CSS do Bootstrap -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">

    <!-- Inclui o JavaScript do Bootstrap e as dependências do jQuery -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>


    <script>
        $(document).ready(function() {
            $('#valor_pedido').mask('000.000.000,00', {
                reverse: true
            });
        });
    </script>


    <!-- Fonts -->
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />

    <!-- Styles -->
    <style>
        /* ! tailwindcss v3.2.4 | MIT License | https://tailwindcss.com */
        button:hover {
            background-color: darkgreen;
        }
    </style>
</head>

<body class="antialiased">
    <div style="display: flex; justify-content: center;">
        <form action="{{ route('processar_pedido') }}" method="POST" style="width: 50%; margin-top: 50px;">
            @csrf
            <h2 style="text-align: center; font-size: 2em; font-weight: bold; color: #333; margin-bottom: 20px;">Cadastro de Pedido</h2>


            <div class="form-group">
                <label for="nome">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="telefone">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>

            <div class="form-group">
                <label for="data_pedido">Data do pedido:</label>
                <input type="date" class="form-control" id="data_pedido" name="data_pedido" value="{{ date('Y-m-d') }}" required>
            </div>

            <div class="form-group">
                <label for="valor_pedido">Valor do pedido:</label>
                <input type="text" class="form-control" id="valor_pedido" name="valor_pedido">
            </div>

            <button type="submit" class="btn btn-primary" style="background-color: green; border: none; outline: none;">
                Cadastrar
            </button>
            <button type="reset" class="btn btn-secondary">
                Limpar
            </button>
        </form>
        @if (session()->has('success'))
        <div class="alert alert-success">
            {{ session()->get('success') }}
        </div>
        @endif

    </div>
</body>

</html>