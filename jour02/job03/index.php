<?php


for($nombre=0;$nombre<=100; $nombre ++){
    if ($nombre >=0 && $nombre <= 20){
        echo "<i>",$nombre,"</i>","<br>";
    }
    elseif ($nombre >= 25 && $nombre <= 50){
        if($nombre==42){
            echo "La Plateforme_","<br>";
        }
        else{
            echo "<u>",$nombre,"</u>","<br>";
        }
    }
    else{
        echo $nombre,"<br>";
    }
}
?>