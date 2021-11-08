<?php 
function calcule(int $a, string $operation, int $b){
    switch($operation){
    case '*':
        return $a * $b;
    case '+':
        return $a + $b;
    case '-':
        return $a + $b;
    case '/':
        return $a / $b;
    case '%':
        return $a % $b;
}
    }

echo calcule(15,'+',32);
echo "<br>",calcule(40,'-',25);
echo "<br>",calcule(15,'*',5);
echo "<br>",calcule(15,'/',5);
echo "<br>",calcule(15,'%',4);
?>