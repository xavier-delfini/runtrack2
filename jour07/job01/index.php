<?php
//if($_GET==TRUE)

session_start();
if (!isset($_SESSION['nbvisites']) ){
   $_SESSION['nbvisites']=0;
    }
$_SESSION['nbvisites']++;
echo $_SESSION['nbvisites'];
echo '<form action="logout.php">';
echo '<button type="submit" value="1" submit="1">Reset</button>';
echo '</form>';
?>