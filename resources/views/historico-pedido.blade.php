<!DOCTYPE html>
<html>

<head>
    <title>Brudam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<script>
    function goBack() {
        window.history.back();
    }
</script>

<body>
    <button class="btn btn-secondary m-4" onclick="goBack()">Voltar</button>
    
    <div class="container">
        <h1>Relatório de Pedidos</h1>

        <table class="table table-striped">
            <thead>
                <tr>
                    <th>ID dos Pedidos</th>
                    <th>Clientes</th>
                    <th>Data dos Pedidos</th>
                    <th>Valor dos Pedidos</th>
                </tr>
            </thead>
            <tbody>
                @foreach($pedidos as $pedido)
                <tr>
                    <td>{{ $pedido->id }}</td>
                    <td>{{ $pedido->nome }}</td>
                    <td>{{ $pedido->data }}</td>
                    <td>{{ $pedido->valor }}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>