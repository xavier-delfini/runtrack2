<?php 

function leespeak(string $str){
    for($i=0;isset($str[$i]); $i++){
        switch($str[$i]){
            case "A":
            $str[$i] = 4;
            case "a":
            $str[$i] = 4;
            case "B":
            $str[$i] = 8;
            case "b":
            $str[$i] = 8;
            case "E":
            $str[$i] = 3;
            case "e":
            $str[$i] = 3;
            case "G":
            $str[$i] = 6;
            case "g":
            $str[$i] = 6;
            case "L":
            $str[$i] = 1;
            case "l":
            $str[$i] = 1;
            case "S":
            $str[$i] = 5;
            case "s":
            $str[$i] = 5;
            case "T":
            $str[$i] = 7;
            case "t":
            $str[$i] = 7;
            default:
            $str[$i] = $str[$i];
    }
}
        return $str;
}
        
        echo leespeak("Ceci est une phrase avec des lettres en leetspeak");
        echo leespeak("Babar l'éléphant");