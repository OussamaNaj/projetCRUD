<?php

$mysqli = new mysqli('localhost', 'oussama', 'oussama', 'projetCRUD');

if (isset($_POST['update'])) {
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $salaire = $_POST['salaire'];
    $departement = $_POST['departement'];
    $mysqli->query("UPDATE employe SET nom=NULLIF('$nom',''), prenom=NULLIF('$prenom',''), email=NULLIF('$email',''), date_naissance=NULLIF('$date_naissance',''), salaire=NULLIF('$salaire',''), departement='$departement' where cin =$cin");
}
header("Location: consulter.php");
