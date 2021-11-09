<?php
setcookie('nbvisites', $value, time()+1);/*On déclare un cookie nommé avec le même nom
que notre cookie crée précédement d'une durée de une seconde pour que celui ci expire
une seconde après être déclarer*/
header("Location:index.php");//On redirige vers la page index.php
?>
