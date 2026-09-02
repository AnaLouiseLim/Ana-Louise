<!DOCTYPE html>
<html>
<head>
    <title>Produtos</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>Lista de Produtos</h1>

    <table class="table table-bordered">

        <thead>
            <tr>
                <th>Produto</th>
                <th>Preço</th>
                <th>Estoque</th>
                <th>Status</th>
            </tr>
        </thead>

        <tbody>

            @foreach($produtos as $produto)

                <tr>

                    <td>{{ $produto['nome'] }}</td>

                    <td>
                        R$ {{ number_format($produto['preco'], 2, ',', '.') }}
                    </td>

                    <td>{{ $produto['estoque'] }}</td>

                    <td>

                        @if($produto['estoque'] > 0)

                            <span class="text-success">
                                DISPONÍVEL
                            </span>

                        @else

                            <span class="text-danger">
                                ESGOTADO
                            </span>

                        @endif

                    </td>

                </tr>

            @endforeach

        </tbody>

    </table>

</div>

</body>
</html>