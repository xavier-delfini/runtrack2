<?php 
$jour=NULL;
function bonjour($jour){
    if($jour==true){
        echo "Bonjour<br>";
    }
    elseif($jour==false){
        echo "Bonsoir<br>";
    }
}
bonjour(true);
bonjour(false);

?>