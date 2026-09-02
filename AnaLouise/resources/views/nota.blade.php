<!DOCTYPE html>
<html>
<head>
    <title>Nota</title>
</head>
<body>

    @if($nota >= 6)

        <h1>Nota: {{ $nota }} - APROVADO</h1>

    @else

        <h1>Nota: {{ $nota }} - REPROVADO</h1>

    @endif

</body>
</html>