<?php
/* Début du compteur*/
if(!isset($_COOKIE['nbvisites'])){// Si le cookie n'existe pas 
$value = 0; //On assigne la valeur 0 a la variable $value
}
/* Transfère de la valeur du cookie a une variable pour lui ajouter 1*/
else{
$value=$_COOKIE['nbvisites'] ;/*On attribu la valeur du cookie nommé nbvisites à la
variable $value*/

}
$value++;
setcookie('nbvisites', $value); /*Création du cookie nommé nbvisites et qui possède la 
valeur de la variable $value*/
echo $_COOKIE['nbvisites'];//affichage du compteur
echo  '<form action="logout.php">';
echo  '<button type="submit">Reset</button>';//Affichage du bouton reset
echo '</form>';
?>