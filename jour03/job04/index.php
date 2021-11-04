<?php
$str="Dans l'espace, personne ne vous entend crier";
for($i=0 ; isset($str[$i]) == TRUE ;$i++){
}
$i = $i- 2;//On enlève les guillemet compté comme des caractères
echo "Il y a ",$i," caractères dans la phrase ",$str;
?>
