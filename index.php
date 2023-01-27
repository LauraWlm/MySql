<?php
try
{
	$db = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}


$query = 'SELECT * FROM `météo`';
$stmt = $db->query($query);
$result = $stmt->fetchAll();

if (count($result) > 0) {
    echo "<table><tr><th>Ville</th><th>Haut</th><th>Bas</th></tr>";

    foreach ($result as $row) {
        echo "<tr><td>" . $row["ville"]. "</td><td>" . $row["haut"] . "</td><td>" . $row["bas"] . "</td>";
        echo "<td><input type='checkbox' name='delete[]' value='" . $row['name'] . "'></td></tr>";
    }
    echo "Aucun résultat";
}

$db = null;
?>

<form method="POST" action="">
 <label for="ville"> Ville: </label>
 <input type="text" id="ville" name="ville" required>

 <label for="haut">Haut:</label>
<input type="text" id="haut" name="haut" required>

<label for="bas">Bas:</label>
<input type="text" id="bas" name="bas" required>

<input type="submit"  value="Ajouter">

</form>


<?php
if(isset($_POST['ville']) && isset($_POST['haut']) && isset($_POST['bas'])){

$ville = $_POST['ville'];
$haut = $_POST['haut'];
$bas = $_POST['bas'];

try {
    $db = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
} catch (Exception $e) {
    die('Erreur : ' . $e->getMessage());
}

$query = "INSERT INTO météo (ville, haut, bas) VALUES (:ville, :haut, :bas)";
$stmt = $db->prepare($query);
$stmt->bindValue(':ville', $ville);
$stmt->bindValue(':haut', $haut);
$stmt->bindValue(':bas', $bas);

$stmt->execute();

$db = null;
?>
<form method="POST" action="">
<input type="submit" name="delete_submit" value="Supprimer">
</form>

<?php
}
if (isset($_POST['delete_submit'])) {
    $delete = $_POST[$row['name']];
    for($i=0;$i<sizeof($delete);$i++)
{
    $sql = "DELETE FROM météo WHERE name=$delete[$i]";
    $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
    }
}

?>