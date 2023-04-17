<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Brudam</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
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
        <form class="form-register" action="{{ route('processar_pedido') }}" method="POST">
            @csrf
            <h2>Cadastro de Pedido</h2>

            <div class="form-group">
                <label for="nome" class="form-label">Nome:</label>
                <input type="text" class="form-control" id="nome" name="nome" required>
            </div>

            <div class="form-group">
                <label for="email" class="form-label">E-mail:</label>
                <input type="email" class="form-control" id="email" name="email" required>
            </div>

            <div class="form-group">
                <label for="telefone" class="form-label">Telefone:</label>
                <input type="tel" class="form-control" id="telefone" name="telefone" required>
            </div>

            <div class="row">
                <div class="col">
                    <div class="form-group">
                        <label for="data_entrega" class="form-label">Data da entrega:</label>
                        <input type="date" class="form-control" id="data_entrega" name="data_entrega" value="{{ date('Y-m-d') }}" required>
                    </div>
                </div>
                <div class="col">
                    <div class="form-group">
                        <label for="valor_frete" class="form-label">Valor do frete:</label>
                        <input type="text" class="form-control" id="valor_frete" name="valor_frete" required>
                    </div>
                </div>
            </div>

            <div class="form-buttons-container">
                <div>
                    <button type="submit" class="btn btn-primary" id="register-button">Cadastrar</button>
                    <button type="reset" class="btn btn-secondary" id="clean-button">Limpar</button>
                </div>
                <a href="/historico-pedido" class="btn btn-secondary">Histórico de pedidos</a>
            </div>
        </form>
    </div>
</body>

</html>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.16/jquery.mask.min.js"></script>

<script>
    $(document).ready(function() {
        $('#valor_frete').mask('000.000.000,00', {
            reverse: true
        });

        $('#telefone').mask('(00) 00000-0000');
    });

    setTimeout(function() {
        $('#alert-success, #alert-error, #alert-warning, #alert-info').fadeOut('slow', function() {
            $(this).remove();
        });
    }, 3000);
</script>