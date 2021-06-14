<?php
 $num = $_GET['numjeu'];
?>

<html>

<head>
 <title>Premier exemple php sqlite</title>
 <link rel="stylesheet" href="style.css">
</head>

<body>

<?php
$db = new SQLite3('jeux.db');

$infojeu = $db->query("SELECT * FROM infosJeu WHERE NumJeu='$num'");
?>

<h3>Informations sur le jeu</h3>



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

</body>

</html>
