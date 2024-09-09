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

function maior_valor($lista = []){
    sort($lista);
    return $lista[count ($lista)-1];

}

function soma_lista($lista = []){
    return array_sum($lista);
}

function numeros_pares($lista = []){
    $pares = [];
    for ($i=0; $i < count($lista); $i++) { 
        if ($lista[$i] % 2 == 0) {
            $pares[] = $lista[$i];
        }else{
            continue;
        }
    }
    return $pares;

}

function char_in_string($lista, $str){
    $num_qst_4 = substr_count(strtolower($lista), strtolower($str));    
    return $num_qst_4;
}

function reverse_string($palavra){
    return strrev($palavra);
}

?>