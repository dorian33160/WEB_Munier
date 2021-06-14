<?php
 $num = $_GET['numjeu'];
?>

<html>

<head>
 <title>Premier exemple php sqlite</title>
 <link rel="stylesheet" href="style.css">
 <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
 <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-gtEjrD/SeCtmISkJkNUaaKMoLD0//ElJ19smozuHV6z3Iehds+3Ulb9Bn9Plx0x4" crossorigin="anonymous"></script>
</head>

<body>

<?php
$db = new SQLite3('jeux.db');

$infojeu = $db->query("SELECT * FROM infosJeu WHERE NumJeu='$num'");
?>

<h3>Informations sur le jeu</h3>

<?php echo "<img class='image_site' src='{$num}.jpg' alt='images_jeu'>"; ?>


<ul id="liste_infos_jeu">
<?php
while ($row = $infojeu->fetchArray()) {
 echo "<li>Nom: {$row['Nom']}</li>
 <li>Prix: {$row['Prix']} euros</li>
 <li>Date de Sortie: {$row['DateSortie']}</li>
 <li>Style du jeu: {$row['Style']}</li>
 <li>Editeur du jeu: {$row['Editeur']}</li>
 <li>PEGI (Age limite conseillé): {$row['PEGI']} ans</li>
 <li>Langue du jeu: {$row['Langue']}</li>";
}
?>
</ul>

<button type="button" class="btn btn-primary">Ajouter au panier</button>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.6/umd/popper.min.js" integrity="sha384-wHAiFfRlMFy6i5SRaxvfOCifBUQy1xHdJ/yoi7FRNXMRBu5WHdZYu1hA6ZOblgut" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.2.1/js/bootstrap.min.js" integrity="sha384-B0UglyR+jN6CkvvICOB2joaf5I4l3gm9GU6Hc1og6Ls7i6U/mkkaduKaBhlAXv9k" crossorigin="anonymous"></script>
</body>

</html>
