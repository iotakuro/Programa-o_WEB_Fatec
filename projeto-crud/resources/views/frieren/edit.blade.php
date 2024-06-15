<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração de Personagens</title>
</head>
<body>
    <h1>Formulário de Alteração de Personagens</h1>
    <form action="{{ route ('frieren.update', $frieren->id)}}" method="POST">
        @CSRF
        @method('PUT')
        <label for="nome">Informe o nome do Personagem</label>
        <input type="text" name="nome" id="nome" value="{{ $frieren->nome }}"><br>
        <label for="idade">Informe a idade do Personagem</label>
        <input type="text" name="idade" id="idade" value="{{ $frieren->idade }}"><br>
        <label for="genero">Informe o genero do Personagem</label>
        <input type="text" name="genero" id="genero" value="{{ $frieren->genero }}"><br>
        <label for="raca">Informe a raça do Personagem</label>
        <input type="text" name="raca" id="raca" value="{{ $frieren->raca }}"><br>
        <label for="classe">Informe a classe do Personagem</label>
        <input type="text" name="classe" id="classe" value="{{ $frieren->classe }}"><br>
        <label for="objetivo">Informe o objetivo da jornada do Personagem</label>
        <input type="text" name="objetivo" id="objetivo" value="{{ $frieren->objetivo }}"><br>
        <button type="submit">Editar</button>
    </form>
</body>
</html>