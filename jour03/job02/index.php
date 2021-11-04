<?php
$str= "Tous ces instants seront perdus dans le temps comme les larmes sous la pluie.";//Déclaration de la phrase dans la variable str
for($i =0; isset($str[$i]) == TRUE ;$i++){//On déclare $i et on lui donne 0, la boucle s'arrète si la variable $str est null par rapport a $i , on incrémente 1 a la variable $i
    $chara = $str[$i];//On donne la valeur de la case de du tableau $str pointé par $i à $chara
    $r = $i % 2; //On calcul le modulo de $i pour savoir si le caractère est pair ou impair dans son emplacement et on envoie son résultat dans la variable $r
    if ($r == 0){// Si le résultat est strictement egal a 0
        echo $chara;// Alors on affiche le caractère pair
    }
    //Sinon on affiche rien
}

?>