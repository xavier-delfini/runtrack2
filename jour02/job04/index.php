<?php

$j=3; 
$k=5;
for($n=1; $n<=100; $n++){
    $i=$n;
    $trois=$i % $j;
    $cinq=$i % $k;
    if ($trois == 0 && $cinq == 0){ 
        echo "FizzBuzz","<br>";
    }
    elseif($trois == 0){
        echo"Fizz","<br>";
    }
    elseif($cinq == 0){
        echo"Buzz","<br>";
    }
    else{
        echo $n,"<br>";
    }
}

?>