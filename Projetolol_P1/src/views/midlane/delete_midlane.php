<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
  <title>Excluir Campeão Mid</title>
</head>

<body>
  <main class="container">
    <h1>Excluir Campeão</h1>
    <form action="/midlane/destroy" method="post">
      <input type="hidden" name="idMid" value="<?= $resultado['idMid'] ?>">
      <div class="row">
        <div class="col-8 mt-4">
          <label for="nomeCamp" class="form-label">Nome:</label>
          <input type="text" name="nomeCamp" class="form-control" value="<?= $resultado['nomeCamp'] ?>" disabled>
        </div>
        <div class="col-8 mt-4">
          <label for="item" class="form-label">Items:</label>
          <input type="text" name="item" class="form-control" value="<?= $resultado['item'] ?>" disabled>
        </div>
        <div class="col-8 mt-4">
          <label for="counterCamp" class="form-label">Counter:</label>
          <input type="text" name="counterCamp" class="form-control" value="<?= $resultado['counterCamp'] ?>" disabled>
        </div>
        <div class="col-8 mt-4">
          <label for="idJg" class="form-label">ID do Jungle:</label>
          <input type="text" name="idJg" class="form-control" value="<?= $resultado['idJg'] ?>" disabled>
        </div>
      </div>
      <div class="row">
        <div class="col">
          <button type="submit" class="mt-4 btn btn-danger">Exlcuir</button>
        </div>
      </div>
    </form>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
</body>

</html>