<?php
if(isset($_GET['prenom']&& isset($_COOKIE['prenom'])){
    setcookie('prenom', $_POST['prenom']);
    header("Refresh");
    $_POST['prenom']= NULL;
    header("Refresh:1");
}
elseif(isset($_GET['prenom'])

if(!isset($_COOKIE['prenom'])){

echo '<form action="#" methode="POST">';
echo'<input type="text" name="prenom" >';
echo'<input type="submit" name="connexion" value="envoyer"/>';
echo'</form>';


}
else{
    setcookie('prenom', $_GET['prenom']);
    header("Refresh");
    echo "Bonjour ",$_COOKIE['prenom']," !";
}






?>