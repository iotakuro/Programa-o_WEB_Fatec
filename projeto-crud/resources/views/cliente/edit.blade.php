<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Alteração de Clientes</title>
</head>
<body>
    <h1>Formulário de Alteração de Clientes</h1>
    <form action="{{ route ('clientes.update')}}" method="POST">
        @CSRF
        @method('PUT')
        <label for="nome">Informe o nome do Cliente</label>
        <input type="text" name="nome" id="nome" value="{{ $cliente->nome }}">
        <label for="telefone">Informe o telefone do cliente</label>
        <input type="text" name="telefone" id="telefone" value="{{ $cliente->telefone }}">
        <label for="email">Informe o email</label>
        <input type="text" name="email" id="email" value="{{ $cliente->email }}">
        <button type="submit">Editar</button>
    </form>
</body>
</html>