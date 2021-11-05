<?php

$str='On n est pas le meilleur quand on le croit mais quand on le sait';
$dic = array(
    "consonnes" => "b","c","d","f","g","h","j","k","l","m","n","p","q","r","s","t","v","w","x","z",
    "voyelles" => "a","e","i","o","u","y");

    
    foreach ($dic as $k => $v) {
        var_dump($k);
        var_dump($v);
echo $v[$k];
    }
    /*
for($i=0 ; isset($str[$i]) == TRUE ;$i++){
    for($c=0 ; isset($dic[$c]) == TRUE ;$c++){
if ($dic[$c][$c] == $str[0][$i]){
    echo $str[$i];
}
    }
}



    $chara=$str[$i];
    
            $v= $v + 1;
        }
    else{
        $c= $c + 1;
    }
}
    $dic[0][0] = $c;
    $dic[1][0] = $v;

echo "<table border=1>";
echo "<tr>";
echo "<th>","Voyelles","</th>";
echo "<th>","Consonnes","</th>";
echo "</tr>";
echo "<tr>";
echo "<td>",$dic[1][0],"</td>";
echo "<td>",$dic[0][0],"</td>";
echo "</tr>";
echo "</table>";
*/
?>