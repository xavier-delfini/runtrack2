<?php


session_start();
if (!isset($_SESSION['nbvisites']) ){
   $_SESSION['nbvisites']=0;
    }
$_SESSION['nbvisites']++;
echo $_SESSION['nbvisites'];
echo  '<form action="logout.php">';
echo  '<button type="submit">reset</button>';
echo '</form>';
?>