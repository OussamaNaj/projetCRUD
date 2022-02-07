<?php
$mysqli= new mysqli('localhost','oussama','oussama','projetCRUD');

if(isset($_GET['delete'])) {
    $cin=$_GET['delete'];
    $mysqli->query("DELETE FROM employe where cin=$cin");
    header("Location: consulter.php");
}