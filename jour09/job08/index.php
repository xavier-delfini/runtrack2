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
$cont=mysqli_query($bdd,"SELECT SUM(capacite) FROM salles;");
$contenu =mysqli_fetch_all($cont,MYSQLI_ASSOC);
$head="capacite_totale";
?>

<table border=1>
    <thead>
<?php
    echo "<tr>";
echo "<th>",$head,"</th>";
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