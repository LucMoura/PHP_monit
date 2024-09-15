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
            $pares = [];
            $impares = [];
        
            $numeros = array_filter($numeros, 'is_numeric');
        
            foreach ($numeros as $numero) {
                $operacoes = [
                    0 => function() use (&$pares, $numero) { $pares[] = $numero; },
                    1 => function() use (&$impares, $numero) { $impares[] = $numero; },
                ];
                $operacoes[$numero % 2]();
            }
            
            return ['pares' => $pares, 'impares' => $impares];
        }
        
    
?>
