<?php
$str= "I'm sorry Dave I'm afraid I can't do that";
for($i =0; isset($str[$i]) == TRUE ;$i++){
    $chara = $str[$i];
    if ($chara == "a" || $chara == "e" || $chara == "i" || $chara == "o" || $chara == "u" || $chara == "y" ||
        $chara == "A" || $chara == "E" || $chara == "I" || $chara == "O" || $chara == "U" || $chara == "Y"){
        echo $chara;
}
}
?>