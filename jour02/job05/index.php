<?php
//Comptage et incrémentation
for($n=2;$n<=1000;$n++){
    $prim = true;
    //Calcul nombre primaire
    for($i=2;$i<$n; $i++){
        if ($n%$i ==0){
            $prim = false;
            $i=$n;
        }
    }
    //Affichage si nombre premier
    if($prim ==true){
        echo $n,"<br>";
    }
}
?>