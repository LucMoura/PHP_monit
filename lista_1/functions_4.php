<?php
    function soma ($num, $num_1){
        return ($num + $num_1);
    }

    function sub($num, $num_1){
        return ($num - $num_1);
    }

    function mult($num, $num_1){
        return ($num * $num_1);
    }

    function div($num, $num_1){
        return ($num / $num_1);
    }

    function par_impar($numeros){
            $pares = array_filter($numeros, fn($numero) => $numero % 2 === 0);
            $impares = array_filter($numeros, fn($numero) => $numero % 2 !== 0);
        
            return ['pares' => $pares, 'impares' => $impares];
        }
        
    
?>
