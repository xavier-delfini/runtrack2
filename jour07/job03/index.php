<?php
/*Démarrage de session*/
session_start();
/*Formulaire*/
echo'<form action="#" method=GET>';
echo'<input type="text" name="prenom" >';
echo'<input type="submit" value="envoyer"/>';
echo'</form>';
echo'<form action="logout.php">';
echo'<input type="submit" value="reset"/>';
echo'</form>'; 
/*Boucles*/
if(isset($_GET['prenom'])){
    if(isset($_SESSION['prenom'])){
$_SESSION['prenom'].= $_GET['prenom']."<br>";
    }
else{
    $_SESSION['prenom']= $_GET['prenom']."<br>";
}
echo $_SESSION['prenom'];
}
?>