<?php
$test =array(200,204,173,98,171,404,459);
foreach($test as $n){
    $r= $n % 2;
if ($r == 0){
    echo $n, ' est pair</br>';
}
else{
    echo $n, ' est impair</br>';
}
}
?>
