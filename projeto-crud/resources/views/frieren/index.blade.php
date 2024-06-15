<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Frieren</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container mt-5">
        <h1 class="mb-4">Personagens de Frieren</h1>
        <a href="{{ route('frieren.create') }}" class="btn btn-primary mb-3">Inserir Personagem</a>
        <table class="table table-striped">
            <thead>
                <tr>
                    <th>Nome</th>
                    <th>Idade</th>
                    <th>Genero</th>
                    <th>Raça</th>
                    <th>Classe</th>
                    <th>Objetivo</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($personagens as $c)
                <tr>
                    <td>{{ $c->nome }}</td>
                    <td>{{ $c->idade }}</td>
                    <td>{{ $c->genero }}</td>
                    <td>{{ $c->raca }}</td>
                    <td>{{ $c->classe }}</td>
                    <td>{{ $c->objetivo }}</td>
                    <td>
                        <a href="{{ route('frieren.edit', $c->id) }}" class="btn btn-warning btn-sm">Alterar</a>
                        <form action="{{ route('frieren.destroy', $c->id) }}" method="POST" class="d-inline">
                            @csrf
                            @method('DELETE')
                            <button type="submit" class="btn btn-danger btn-sm">Excluir</button>
                        </form>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>
