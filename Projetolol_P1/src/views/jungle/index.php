<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Jungle</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  <link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
  <link href="https://cdn.datatables.net/2.0.5/css/dataTables.bootstrap5.css">
</head>

<body>
  <main class="container">
    <h1>Jungles</h1>
    <a href="/jungle/insert" class="btn btn-success mt-3">Novo Jungle</a>
    <p class="mt-3"><?= $mensagem ?></p>
    <table class="table table-stripped table-hover" id="tabela">
      <thead>
        <tr>
          <th>ID</th>
          <th>Nome Campeão</th>
          <th>Item</th>
          <th>Counter</th>
          <th>Ações</th>
        </tr>
      </thead>
      <tbody>
        <?php
        while ($r = $resultado->fetch(PDO::FETCH_ASSOC)) {
          ?>
          <tr>
            <td><?= $r['idJg'] ?></td>
            <td><?= $r['nomeCamp'] ?></td>
            <td><?= $r['item'] ?></td>
            <td><?= $r['counterCamp'] ?></td>
            <td>
              <a href="/jungle/updateID/id/<?= $r['idJg'] ?>" class="btn btn-primary">
                Alterar
              </a>
              <a href="/jungle/excluirID/id/<?= $r['idJg'] ?>" class="btn btn-danger">
                Excluir
              </a>
            </td>
          </tr>
          <?php
        }
        ?>
      </tbody>
    </table>
  </main>


  <script src="https://code.jquery.com/jquery-3.7.1.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz"
    crossorigin="anonymous"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/2.0.5/js/dataTables.bootstrap5.min.js"></script>
  <script>
    var table = new DataTable('#tabela', {
      language: {
        url: 'https://cdn.datatables.net/plug-ins/2.0.6/i18n/pt-BR.json',
      },
    });
  </script>
</body>

</html>