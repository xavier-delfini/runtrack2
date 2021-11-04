<?php
$test =array(200,204,173,98,171,404,459);// Déclaration des valeurs dans un tableau 
foreach($test as $n){// Pour chaque boucle mettre la valeur $test du tableau dans la variable $n
    $r= $n % 2;// On regarde si le nombre est pair en calculant son modulo  
if ($r == 0){//Si le résultat est à 0
    echo $n, ' est pair</br>';// Alors ce nombre est pair
}
else{//Sinon
    echo $n, ' est impair</br>';//Le nombre est inpair
}
}
?>
