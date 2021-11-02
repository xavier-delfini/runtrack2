<?php
$tableau = array (
    array("type","nom","valeur"),
    array("Chaîne de caractères","string","LaPlateforme"),
    array("Nombres entiers","int",3),
    array("Nombres décimaux","float",19.99),
    array("Booléens","bool",true),
    array("Rien","null","")
  );

echo "<table border=1>";
echo "<tr>";
echo "<th>",$tableau[0][0],"</th>";
echo "<th>",$tableau[0][1],"</th>";
echo "<th>",$tableau[0][2],"</th>";
echo "</tr>";
echo "<tr>";
echo "<td>",$tableau[1][0],"</td>";
echo "<td>",$tableau[1][1],"</td>";
echo "<td>",$tableau[1][2],"</td>";
echo "</tr>";
echo "<tr>";
echo "<td>",$tableau[2][0],"</td>";
echo "<td>",$tableau[2][1],"</td>";
echo "<td>",$tableau[2][2],"</td>";
echo "</tr>";
echo "<tr>";
echo "<td>",$tableau[3][0],"</td>";
echo "<td>",$tableau[3][1],"</td>";
echo "<td>",$tableau[3][2],"</td>";
echo "</tr>";
echo "<tr>";
echo "<td>",$tableau[4][0],"</td>";
echo "<td>",$tableau[4][1],"</td>";
echo "<td>",$tableau[4][2],"</td>";
echo "</tr>";
echo "<tr>";
echo "<td>",$tableau[5][0],"</td>";
echo "<td>",$tableau[5][1],"</td>";
echo "<td>",$tableau[5][2],"</td>";
echo "</tr>";
echo "</table>"
?>