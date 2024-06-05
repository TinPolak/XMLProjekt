<?php
$xml = simplexml_load_file('potraznja.xml');
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kontakt | Projekt</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-warning">
        <div class="container-fluid justify-content-center">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarSupportedContent">
                <ul class="navbar-nav mb-2 mb-lg-0">
                    <li class="nav-item mx-5">
                        <a class="nav-link" aria-current="page" href="index.php">Početna</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link" href="kolekcija.php">Kolekcija</a>
                    </li>
                    <li class="nav-item mx-5">
                        <a class="nav-link active fw-bold" href="kontakt.php">Kontakt</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <div class="container mt-5">
        <div class="jumbotron">
            <h1 class="display-4">Kontakt</h1>
            <p class="lead">Imate prijedlog, pitanje ili želite ponuditi nešto za moju kolekciju? Slobodno me
                kontaktirajte putem
                e-maila
                na <a href="mailto:tpolak@tvz.hr">tpolak@tvz.hr</a>.
                Radujem se vašim porukama!
            </p>
            <hr class="my-4">
            <p>Ispod se nalazi popis stvari koje aktualno tražim za kolekciju.</p>
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
                <?php foreach ($xml->medij as $medij): ?>
                    <tr>
                        <td><?php echo $medij->izvodac; ?></td>
                        <td><?php echo $medij->naziv; ?></td>
                        <td><?php echo $medij->godina_izdanja; ?></td>
                        <td><?php echo $medij->format; ?></td>
                        <td><?php
                        if (isset($medij->vrste)) {
                            foreach ($medij->vrste->vrsta as $vrsta) {
                                echo $vrsta . "<br>";
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