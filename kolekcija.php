<?php
$jsonString = file_get_contents('kolekcija.json');
$kolekcija = json_decode($jsonString, true);
?>
<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Kolekcija | Projekt</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>

<body>
  <nav class="navbar navbar-expand-lg bg-warning">
    <div class="container-fluid justify-content-center">
      <a class="navbar-brand" href="#"></a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
        <ul class="navbar-nav mb-2 mb-lg-0">
          <li class="nav-item mx-5">
            <a class="nav-link" aria-current="page" href="index.php">Početna</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link active fw-bold" href="kolekcija.php">Kolekcija</a>
          </li>
          <li class="nav-item mx-5">
            <a class="nav-link" href="kontakt.php">Kontakt</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <div class="container mt-5">
    <div class="jumbotron">
      <h1 class="display-4">Kolekcija</h1>
      <p class="lead">Tablica ispod pretstavlja moju kompletnu glazbenu kolekciju. Neke stvari imam u više primjeraka,
        ako ste zainteresirani možete mi se javiti putem stranice "Kontakt".
      </p>
      <hr class="my-4">
    </div>
    <table class="table table-striped">
      <thead>
        <tr>
          <th scope="col">Izvođač</th>
          <th scope="col">Naziv</th>
          <th scope="col">Godina izdanja</th>
          <th scope="col">Format</th>
          <th scope="col">Vrste</th>
        </tr>
      </thead>
      <tbody>
        <?php foreach ($kolekcija as $item): ?>
          <tr>
            <td><?php echo htmlspecialchars($item['izvodac']); ?></td>
            <td><?php echo htmlspecialchars($item['naziv']); ?></td>
            <td><?php echo htmlspecialchars($item['godina_izdanja']); ?></td>
            <td><?php echo htmlspecialchars($item['format']); ?></td>
            <td><?php
            if (isset($item['vrste']['vrsta'])) {
              if (is_array($item['vrste']['vrsta'])) {
                foreach ($item['vrste']['vrsta'] as $vrsta) {
                  echo htmlspecialchars($vrsta) . "<br>";
                }
              } else {
                echo htmlspecialchars($item['vrste']['vrsta']);
              }
            }
            ?></td>
          </tr>
        <?php endforeach; ?>
      </tbody>
    </table>
  </div>
  <br><br><br>
  <footer class="mt-auto py-3 fixed-bottom bg-warning-subtle">
    <div class="container">
      <span class="text-muted">&copy; Tin Polak 2024</span>
    </div>
  </footer>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe"
    crossorigin="anonymous"></script>
</body>

</html>