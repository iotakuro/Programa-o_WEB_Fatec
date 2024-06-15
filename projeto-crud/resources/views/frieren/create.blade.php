<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Inserção de Personagens do anime Frieren</title>
</head>
<body>
    <h1>Formulário de Inserção de Personagens</h1>
    <form action="{{ route ('frieren.store') }}" method="POST">
        @csrf
        <label for="nome">Informe o nome do Personagem de Frieren</label>
        <input type="text" name="nome" id="nome" value="{{old('nome')}}"><br><br>
        <label for="idade">Informe a idade do Personagem de Frieren</label>
        <input type="text" name="idade" id="idade" value="{{old('idade')}}"><br><br>
        <label for="genero">Informe o genero do personagem de Frieren</label>
        <input type="text" name="genero" id="genero" value="{{old('genero')}}"><br><br>
        <label for="raca">Informe a raça do personagem de Frieren</label>
        <input type="text" name="raca" id="raca" value="{{old('raca')}}"><br><br>
        <label for="classe">Informe a classe do personagem de Frieren</label>
        <input type="text" name="classe" id="classe" value="{{old('classe')}}"><br><br>
        <label for="objetivo">Informe o objetivo da jornada do personagem de Frieren</label>
        <input type="text" name="objetivo" id="objetivo" value="{{old('objetivo')}}"><br><br>
        <button type="submit">Salvar</button>
    </form>
</body>
</html>