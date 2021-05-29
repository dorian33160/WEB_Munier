<html>

<head>
 <title>Premier exemple php sqlite</title>
</head>

<body>

<?php
$db = new SQLite3('jeux.db');

$results = $db->query('SELECT * FROM infosJeu');
?>

<h3> Liste des jeux</h3>

<ul>

<?php
echo "<div>";
while ($row = $results->fetchArray()) {
 echo "<li>{$row['infosJeu']}-{$row['infosEditeur']}-{$row['infosClient']}-{$row['infosPLateforme']}-{$row['infosPayement']}-{$row['panier']}-{$row['achat']} </li>";
}
echo "</div>";

?>

</ul>

</body>
</html>
