<!DOCTYPE html>
<html>

<head>
    <title>Brudam</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
</head>

<body>
    <button class="btn btn-secondary m-4" onclick="goBack()">Voltar</button>

    <div class="container">
        <h1>Relatório de Pedidos</h1>
        <table id="table-pedidos" class="table table-striped">
            <thead>
                <tr>
                    <th>ID dos Clientes</th>
                    <th>Nomes</th>
                    <th>Telefones</th>
                    <th>Data da Entrega</th>
                    <th>Valor do Frete</th>
                </tr>
            </thead>
            <tbody></tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.1/moment.min.js"></script>
    <script>
        function goBack() {
            window.history.back();
        }

        $(document).ready(function() {
            $.getJSON('/relatorio-pedido', function(pedidos) {
                $.each(pedidos, function(key, pedido) {
                    var formattedFrete = formatMoney(pedido.valor_frete);
                    var formattedData = moment(pedido.data_entrega).format('DD/MM/YYYY')

                    var row = '<tr>' +
                        '<td>' + pedido.id_cliente + '</td>' +
                        '<td>' + pedido.nome + '</td>' +
                        '<td>' + pedido.telefone + '</td>' +
                        '<td>' + formattedData + '</td>' +
                        '<td>' + formattedFrete + '</td>' +
                        '</tr>';

                    $('#table-pedidos tbody').append(row);
                });
            });

            function formatMoney(amount) {
                var formatted = parseFloat(amount).toLocaleString('pt-BR', {
                    style: 'currency',
                    currency: 'BRL'
                });

                return formatted;
            }
        });
    </script>
</body>

</html>