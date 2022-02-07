<?php
$mysqli= new mysqli('localhost','oussama','oussama','projetCRUD');
if(isset($_POST['save'])) {
    $cin = $_POST['cin'];
    $nom = $_POST['nom'];
    $prenom = $_POST['prenom'];
    $email = $_POST['email'];
    $date_naissance = $_POST['date_naissance'];
    $salaire = $_POST['salaire'];
    $departement = $_POST['departement'];
    $mysqli->query("INSERT INTO employe (cin,nom,prenom,email,date_naissance,salaire,departement) VALUES ($cin,NULLIF('$nom',''),NULLIF('$prenom',''),NULLIF('$email',''),NULLIF('$date_naissance',''),NULLIF('$salaire',''),'$departement')");
    header("Location: consulter.php");
}