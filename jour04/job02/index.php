<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="#" method="GET">
    Nom:    <input type="text" name="texte1">
    Prénom:    <input type="text" name="texte2">
    Email:  <input type="email" name="mail">
    Date de naissance:    <input type="date" name="date">
        <button type="submit">Envoyer</button>
        <?php
    if(isset($_GET['texte1'])){
        $tableau =array(
            "LName" => "Nom de famille",$_GET['texte1'],
            "Fname" =>"Prénom",$_GET['texte2'],
            "mail" =>"E-Mail",$_GET['mail'],
            "Naissance" =>"Date de naissance",$_GET['date'],
        );

        ?>
<table border=1>
<tr>
<th>Argument</th>
<th>Valeur</th>
</tr>
<tr>
<td><?php echo $tableau["LName"]; ?></td>
<td><?php echo $tableau[0]; ?></td>
</tr>
<tr>
<td><?php echo $tableau["Fname"]?></td>
<td><?php echo $tableau[1]?></td>
</tr>
<tr>
<td><?php echo $tableau["mail"]?></td>
<td><?php echo $tableau[2]?></td>
</tr>
<tr>
<td><?php echo $tableau["Naissance"]?></td>
<td><?php echo $tableau[3]?></td>
</tr>
</table>
<?php
}
?>
</body>
</html>