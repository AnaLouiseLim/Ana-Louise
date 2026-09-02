<!DOCTYPE html>
<html>
<head>
    <title>Aluno</title>
</head>
<body>

    @if(isset($nome))

        <h1>Aluno: {{ $nome }}</h1>

    @elseif(isset($id))

        <h1>ID do aluno: {{ $id }}</h1>

    @endif

</body>
</html>