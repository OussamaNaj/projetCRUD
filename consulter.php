<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>consulter</title>
    <link rel="stylesheet" href="index.css">
</head>
<body>
<?php
    $mysqli= new mysqli('localhost','oussama','oussama','projetCRUD');
    $result=$mysqli->query("select * from employe");
?>
<table class="tb" style="width:300px;">
    <thead>
        <tr>
            <th>CIN</th>
            <th>NOM</th>
            <th>PRENOM</th>
            <th>EMAIL</th>
            <th>DATE NAISSANCE</th>
            <th>SALAIRE</th>
            <th>DEPARTEMENT</th>
            <th>Action</th>
        </tr>
    </thead>

<?php
    while ($row=$result->fetch_assoc()):
?>
<tr id=<?php echo $row['cin'] ?> >
    <td><?php echo $row['cin']?></td>
    <td><?php echo $row['nom']?></td>
    <td><?php echo $row['prenom']?></td>
    <td><?php echo $row['email']?></td>
    <td><?php echo $row['date_naissance']?></td>
    <td><?php echo $row['salaire']?></td>
    <td><?php echo $row['departement']?></td>
    <td>
        <button class="button"><a href="edit.php?edit=<?php echo $row['cin']; ?>">Edit</a></button>
        <button class="button"><a href="delete.php?delete=<?php echo $row['cin']; ?>">DELETE</a></button>
    </td>

</tr>
<?php endwhile;?>
</table>
<button style="{border-radius: 4px;padding: 9px 10px;}"><a href="index.html">Ajouter</a></button>
</body>
</html>