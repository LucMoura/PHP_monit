<?php

function calculo($a,$b, $operacao) {
        switch ($operacao) {
            case "+":
                return $a + $b;
                break;
            case "-":
                return $a - $b;
                break;
            case "*":
                return $a* $b;
                break;
            case "/":
                return $a / $b;
                break;
        }
    
    }


function numeros_primos() {
    for ($i=1; $i < 101 ; $i++) { 
        $contagem = 0;

        for ($j=1; $j < 101 ; $j++) { 
            if ($i % $j == 0) {
                $contagem++;
            }else {
                continue;
            }
    }
    if ($contagem == 2) {
        echo $i . "<br>";
        }
    
    }
}

function calcular_soma(array $a){
    if (count($a) > 6) {
    return "Maior que 6";
    } else{
        return array_sum($a);  
    }
}

function temperatura($celsius,){
    return ($celsius*1.8) + 32;
}
?>