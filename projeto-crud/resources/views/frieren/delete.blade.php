<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Exclusão do Personagem</title>
</head>
<body>
    <h1>Formulário de Exclusão dos Personagens</h1>
    <form action="{{ route ('frieren.destroy', $frieren->id) }}" method="POST">
        @CSRF
        @method('DELETE')
        <label for="nome">Informe o nome do personagem</label>
        <input type="text" name="nome" id="nome" disabled value="{{ $frieren->nome }}"> <br>
        <label for="idade">Informe a idade do personagem</label>
        <input type="text" name="idade" id="idade" disabled value="{{ $frieren->idade }}"> <br>
        <label for="genero">Informe o genero do personagem</label>
        <input type="text" name="genero" id="genero" disabled value="{{ $frieren->genero }}"> <br>
        <label for="raca">Informe a raça do personagem</label>
        <input type="text" name="raca" id="raca" disabled value="{{ $frieren->raca }}"> <br>
        <label for="classe">Informe a classe do personagem</label>
        <input type="text" name="classe" id="classe" disabled value="{{ $frieren->classe }}"> <br>
        <label for="objetivo">Informe o objetivo da jornada do personagem</label>
        <input type="text" name="objetivo" id="objetivo" disabled value="{{ $frieren->objetivo }}"> <br>
        <button type="submit">Excluir</button>
    </form>
</body>
</html>