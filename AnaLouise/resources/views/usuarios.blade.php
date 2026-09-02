<!DOCTYPE html>
<html>
<head>
    <title>Usuários</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>

<body>

<div class="container mt-5">

    <h1>Lista de Usuários</h1>

    <div class="list-group">

        @foreach($usuarios as $usuario)

            <div class="list-group-item">

                @if(is_array($usuario))

                    @if($usuario['idade'] >= 18)

                        {{ $usuario['nome'] }} - {{ $usuario['idade'] }} - 
                        <strong>MAIOR DE IDADE</strong>

                    @else

                        {{ $usuario['nome'] }} - {{ $usuario['idade'] }} - 
                        <strong>MENOR DE IDADE</strong>

                    @endif

                @else

                    {{ $usuario }}

                @endif

            </div>

        @endforeach

    </div>

</div>

</body>
</html>