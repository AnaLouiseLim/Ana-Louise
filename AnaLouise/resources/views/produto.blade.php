<!DOCTYPE html>
<html>
<head>
    <title>Produto</title>
</head>
<body>

    <h1>Produto: {{ $nome }}</h1>

    <p>Preço: R$ {{ number_format($preco, 2, ',', '.') }}</p>

    <p>Categoria: {{ $categoria }}</p>

</body>
</html>