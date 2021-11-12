<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-16">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php
$bdd = mysqli_connect("localhost","root","","jour08");
$col=mysqli_query($bdd,"SHOW COLUMNS FROM etudiants");
$cont=mysqli_query($bdd,"SELECT * FROM salles");
$colonne = mysqli_fetch_all($col);
$contenu =mysqli_fetch_all($cont);

?>
<table border=1>
    <thead>
<?php

    echo "<tr>";
    foreach ($colonne as $row =>$ligne){
echo "<th>",$ligne[0],"</th>";
    }
echo "</tr>";
echo "</thead>";
echo "<tbody>";

foreach ($contenu as $conte =>$value){
echo "<tr>";
for ($i=0; isset($value[$i]); $i++){
echo "<td>",$value[$i],"</td>";
}
echo"</tr>";
}
echo"</tbody>";
?>
</body>
</html>


