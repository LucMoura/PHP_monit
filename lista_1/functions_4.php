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
        
    function quadrante($num, $num_1){
        $veri = ($num < (-100) || $num_1 < (-100) || $num > (100) || $num_1 > (100) );
        $q1 = ($num > 0 && $num_1 > 0);
        $q2 = ($num < 0 && $num_1 > 0);
        $q3 = ($num < 0 && $num_1 < 0);
        $q4 = ($num > 0 && $num_1 < 0);
        $eixo = ($num = 0 || $num_1 = 0);

        if ($veri){
            return "Números não aceitos";
        }

        if ($q1){
            return "Q1";
        }

        if ($q2){
            return "Q2";
        }

        if ($q3){
            return "Q3";
        }

        if ($q4){
            return "Q4";
        }

        if ($eixo){
            return "Eixo";
        }
    }

    function filas($N, $fila_init, $M, $saida){
        $fila = $fila_init;

        foreach($saida as $pers_out){
            $indice = array_search($pers_out, $fila);
            unset($fila[$indice]);
            $fila = array_values($fila);
        }
        return $fila;
    }

    function print_lista($a = array()){
        foreach($a as $b){
            echo $b . " ";
        }
    }

    function h_triang($num){
        $tri = "";
        for ($i=0; $i < $num ; $i++) { 
            $space = $num - $i - 1;
            $asterisco = $i *2 + 1;
            $tri .=  str_repeat("&nbsp;", $space) . str_repeat("*", $asterisco) . "<br>";
        }
        return $tri;
    }
?>
