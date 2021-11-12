<?php 
$bdd = mysqli_connect("localhost","root","","jour08");      

$req = mysqli_query($bdd,"SHOW COLUMNS FROM etudiants");

$res = mysqli_fetch_all($req);// On execute et on compille le résultat sous forme d'array
//(utile uniquement pour une récuperation de donnée)

var_dump($res);

echo $res[1][1];

foreach($res as $key =>$value){

}
var_dump($key);
var_dump($value);