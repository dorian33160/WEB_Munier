<?php
try{
 $pdo = new PDO('sqlite:jeux.db');
 $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
 $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // ERRMODE_WARNING | ERRMODE_EXCEPTION | ERRMODE_SILENT
 echo "Connecté à la base SQLite jeux.db<br>";

 // Création d'une requête SQL sur une table
 $stmt = $pdo->prepare("SELECT * FROM infosJeu");
 $stmt->execute();
 //$result = $stmt->fetchAll();
 //print_r($result);
 ?>
 <h3> Table des Jeux</h3>
 <table>
 <thead>
 <tr>
 <th>N°</th>
 <th>Nom Jeu</th>
 <th>Prix Jeu</th>
 <th>Date Sorite</th>
 <th>Style</th>
 <th>Editeur</th>
 <th>PEGI</th>
 <th>Langue</th>
 <th>N° plateforme</th>
 </tr>
 
 </thead>

 <?php
 while ($row = $stmt->fetchObject()) {
 echo "<tr>
 <td>{$row->NumJeu}</td>
 <td>{$row->Nom}</td>
 <td>{$row->Prix}</td>
 <td>{$row->DateSortie}</td>
 <td>{$row->Style}</td>
 <td>{$row->Editeur}</td>
 <td>{$row->PEGI}</td>
 <td>{$row->Langue}</td>
 <td>{$row->NumPlateforme}</td>
 </tr>";
 }
 ?>
 </table>
<?php
} catch(Exception $e) {
 echo "Impossible d'accéder à la base de données SQLite : ".$e->getMessage();
 die();
}
?>