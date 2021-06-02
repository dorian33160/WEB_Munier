<html>

<head>
 <title>Premier exemple php sqlite</title>
</head>

<body>

<?php
$db = new SQLite3('jeux.db');

$results = $db->query('SELECT Nom FROM infosJeu');
?>

<h3> Liste des jeux</h3>

<ul>

<?php
echo "<div class='nom_jeux_accueuil'>";
while ($row = $results->fetchArray()) {
 echo "<li>{$row['Nom']}</li>";
}
echo "</div>";

?>

</ul>

</body>
</html>
