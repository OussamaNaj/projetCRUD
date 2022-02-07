<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>index</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>

<?php
$mysqli= new mysqli('localhost','oussama','oussama','projetCRUD');
$cin=$_GET['edit'];

$result=$mysqli->query("select * from employe where cin=$cin");
if(count($result)==1){
    $row=$result->fetch_array();
    $nom=$row['nom'];
    $prenom=$row['prenom'];
    $email=$row['email'];
    $date_naissance=$row['date_naissance'];
    $salaire=$row['salaire'];
    $departement=$row['departement'];
}
?>

<form action="update.php" method="post">
    <label>CIN</label>
    <input type="number" name="cin" readonly="readonly" placeholder="<?php echo $cin;?>" value="<?php echo $cin;?>">
    <br>
    <br>
    <label>Nom</label>
    <input type="text" name="nom" value="<?php echo "$nom";?>">
    <br>
    <br>
    <label>Prenom</label>
    <input type="text" name="prenom" value="<?php echo "$prenom";?>">
    <br>
    <br>
    <label>Email</label>
    <input type="email" name="email" value="<?php echo "$email";?>">
    <br>
    <br>
    <label>Date de Naissance</label>
    <input type="date" name="date_naissance" value="<?php echo "$date_naissance";?>">
    <br>
    <br>
    <label>Salaire</label>
    <input type="text" name="salaire" value="<?php echo $salaire;?>">
    <br>
    <br>
    <label>Departement</label>
    <input type="text" name="departement" value="<?php echo "$departement";?>">
    <br>
    <br>
    <button type="submit" name="update" >Update</button>
</form>
</body>
</html>