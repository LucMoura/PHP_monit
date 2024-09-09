<?php

function soma_forms($num1, $num2){
    return $num1 + $num2;
}

function fat_num($num){
    $fat = 1;
    for ($num; $num != 0 ; $num--) { 
        $fat = $fat*$num;
    }
    return $fat;
}

?>