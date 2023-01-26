<?php
if (isset($_POST['suprimer'])) {
    $delete = $_POST['suprimer'];
    try {
        $db = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
?>