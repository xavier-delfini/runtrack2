<?php
$str= "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";
for($i =0; isset($str[$i]) == TRUE ;$i++){
    $chara = $str[$i];
    $r = $i % 2; 
    if ($r == 0){
        echo $chara;
    }
}

?>