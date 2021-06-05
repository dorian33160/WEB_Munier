<html>

<head>
 <title>Premier exemple php sqlite</title>
 <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
$db = new SQLite3('jeux.db');

$req = $db->query('SELECT Nom FROM infosJeu');
?>

<h3> Liste des jeux</h3>

<?php



?>

<div class="card-R6" style="width: 18rem;">
    <img class="image_R6" src="tom-clancys-rainbow-six-siege-cover.jpg" alt="Fiche R6">
    <div class="card-body">
        <h5 class="card-title">Card title</h5>
        <a href="#" class="btn btn-primary">Voir les détails</a>
    </div>
</div>

</body>
</html>