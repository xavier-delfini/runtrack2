<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$bdd = mysqli_connect("localhost","root","","jour08");
$cont=mysqli_query($bdd,"SELECT salles.nom,etage.nom FROM salles INNER JOIN etage WHERE etage.id = salles.id_etage");
$contenu =mysqli_fetch_all($cont,);
?>
<table border=1>
    <thead>
<?php

echo "<tr>";
echo "<th>nom_salle</th>";
echo "<th>nom_étage</th>";
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($contenu as $conte => $value){
echo "<tr>";
foreach($value as $conte2 => $value2){
echo "<td>",$value2,"</td>";
}
echo"</tr>";
}
echo"</tbody>";
echo "</table>";
?>
</body>
</html>