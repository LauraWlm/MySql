<?php
if (isset($_POST['delete_submit'])) {
    $delete = $_POST['delete'];
    for($i=0;$i<sizeof($delete);$i++)
{
    $sql = "DELETE FROM météo WHERE name=$delete[$i]";
    $req = mysql_query($sql) or die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
    }
}
?>

if (isset($_POST['delete_submit'])) {
    if(isset($_POST['delete'])){
        $delete = $_POST['delete'];
        try {
            $db = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
        } catch (Exception $e) {
            die('Erreur SQL !<br>'.$sql.'<br>'.mysql_error());
        }}}