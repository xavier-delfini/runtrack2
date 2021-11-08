<?php 

function occurrences(string $str, $char){
    $j=0;
    for($i=0;isset($str[$i]); $i++){
    
if ($str[$i] == $char){
$j++;

}
}
return $j;
}

    echo occurrences("Hello LaPlateforme","l");
    echo "<br>", occurrences("Test","e");   
?>