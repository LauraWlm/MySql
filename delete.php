<?php
if (isset($_POST['delete'])) {
    $delete = $_POST['delete'];
    try {
        $db = new PDO('mysql:host=localhost;dbname=weatherapp;charset=utf8', 'root', '');
    } catch (Exception $e) {
        die('Erreur : ' . $e->getMessage());
    }
}
?>