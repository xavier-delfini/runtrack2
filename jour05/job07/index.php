<?php
echo'<form action="#" method=GET>';
echo' <input type="text" name="str">';
echo'<select name="fonction">';
echo'<option value="0">gras</option>';
echo'<option value="1">cesar</option>';
echo'<option value="2">plateforme</option>';
echo'<input type="submit" value="envoyer"/>';
echo'</select>';
echo'</form>';
function lettersearch(){
$minus=array("a","b","c","d","e","f","g","h","i","j","k","l","m","n","o","p","q","r","s","t","u","v","w","x","y","z"," ");
$maj=array("A","B","C","D","E","F","G","H","I","J","K","L","M","N","O","P","Q","R","S","T","U","V","W","X","Y","Z"," ");
$str=$_GET['str'];
//}
switch($_GET['fonction']){
    case 0:
        for($i=0;isset($str[$i]); $i++){
            for($j=0;isset($maj[$j]); $j++){
            if($maj[$j]==$str[$i]){
            return $str[$i];
            }
        }
        }
    break;
    case 1:
    break;
    case 2:
    break;
}
}



