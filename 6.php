<html>

<head>

 <title>NBA 2K21</title>

</head>

<body>

<?php
$db = new SQLite3('jeux.db');

$results = $db->query("SELECT * FROM infosJeu WHERE Nom='NBA 2K21'");
?>

<h3>NBA 2K21</h3>

<ul>
<?php
while ($row = $results->fetchArray()) {
 echo "<li>{$row['Nom']}</li><li>{$row['Prix']}</li><li>{$row['DateSortie']}</li><li>{$row['Style']}</li><li>{$row['Editeur']}</li><li>{$row['PEGI']}</li><li>{$row['Langue']} </li>";
}
?>
</ul>

</body>
</html>
