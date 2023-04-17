<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Brudam</title>

    <link rel="stylesheet" href="{{ asset('css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">

</head>

<body class="antialiased">
    @foreach (['success', 'error', 'warning', 'info'] as $type)
        @if (session()->has($type))
            <div id="alert-{{ $type }}" class="alert alert-{{ $type }} {{ $type == 'error' ? 'alert-danger' : '' }}">
                {{ session()->get($type) }}
            </div>
        @endif
    @endforeach

    <div class="form-container">
        <form class="form-cadastro" action="{{ route('processar_pedido') }}" method="POST">
            @csrf
            <h2>Cadastro de Pedido</h2>

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

            <div class="form-buttons-container">
                <div>
                    <button type="submit" class="btn btn-primary" id="register-button">
                        Cadastrar
                    </button>
                    <button type="reset" class="btn btn-secondary" id="clean-button">
                        Limpar
                    </button>
                </div>
                <a href="{{ route('historico-pedido') }}" class="btn btn-secondary">Histórico de pedidos</a>
            </div>
        </form>
    </div>

    <script src="{{ asset('js/jquery-3.6.0.min.js') }}"></script>
    <script src="{{ asset('js/jquery.mask.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.min.js') }}"></script>

    <script>
        $(document).ready(function() {
            $('#valor_pedido').mask('000.000.000,00', {
                reverse: true
            });
        });

        setTimeout(function() {
            $('#alert-success, #alert-error, #alert-warning, #alert-info').fadeOut('slow', function() {
                $(this).remove();
            });
        }, 3000);
    </script>

</body>
</html>