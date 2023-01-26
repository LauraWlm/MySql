<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}

$query = 'SELECT * FROM `météo`;';
$arr = $pdo->query($query)->fetch();


if ($arr->num_rows > 0) {
    echo "<table><tr><th>Ville</th><th>Haut</th><th>Bas</th></tr>";

    while($row = $arr->fetch_assoc()) {
        echo "<tr><td>" . $row["ville"]. "</td><td>" . $row["haut"] . "</td><td>" . $row["bas"] . "</td></tr>";
    }
    echo "</table>";
} else {
    echo "Aucun résultat";
}

$pdo->close();
?>