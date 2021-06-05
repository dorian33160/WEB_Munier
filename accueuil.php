<html>

<head>
    <title>Premier exemple php sqlite</title>
    <link rel="stylesheet" href="style.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>

<?php
try{
 $pdo = new PDO('sqlite:jeux.db');
 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
 //echo "Connecté à la base SQLite jeux.db<br>";

 // Création d'une requête SQL sur une table
 $stmt = $pdo->prepare("SELECT * FROM infosJeu");
 $stmt->execute();
 $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
 //print_r($result);
 ?>

<div class="row no-gutters">
    <?php foreach($result as $c) : ?>
        <div class="col-4">
            <div class="card-R6" style="">
                <img class="image_R6" src="" alt="<?= $c[Nom] ?>">
                <div class="card-body">
                    <h5 class="card-title"><?= $c[Nom] ?></h5>
                    <a href="#" class="btn btn-primary">Plus de détails ici</a>
                </div>
            </div>
        </div>
    <?php endforeach; ?>
</div>
 
<?php
} catch(Exception $e) {
 echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
 die();
}
?>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>
</html>