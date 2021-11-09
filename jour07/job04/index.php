<?php
if(isset($_COOKIE['prenom'])){
    echo "Bonjour ",$_COOKIE['prenom']," !";
    echo '<form action="#" method="post">';
    echo'<input type="submit" name="deco" value="Déconnection"/>';
    echo'</form>';
        if(isset($_POST['deco'])){
            setcookie('prenom', $_POST['prenom'],time()-3600);
            header("Refresh:1");
    }
}
elseif(isset($_POST['prenom'])){
setcookie('prenom', $_POST['prenom']);
header("Refresh:1");
}

else{
echo '<form action="#" method="post">';
echo'<input type="text" name="prenom" >';
echo'<input type="submit" name="connexion" value="Envoyer"/>';
echo'</form>';
}
?>