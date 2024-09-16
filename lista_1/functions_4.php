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

    function veri_trian($num){
        if ($num <= 0 || !is_numeric($num)){
            return "Triangulo inexistente";
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

    function veri_forms($dimensao, $largura){
        if ($dimensao <= 0 || $largura <= 0 || !is_numeric($dimensao) || !is_numeric($largura)) {
            return "Por favor, insira valores numéricos positivos para as dimensões. <br>";
        }
    }
    function desenharQuadrado($lado) {
        for ($i = 0; $i < $lado; $i++) {
            echo str_repeat("*", $lado) . "<br>";
        }
    }

    function desenharRetangulo($altura, $largura) {
        for ($i = 0; $i < $altura; $i++) {
            echo str_repeat("*", $largura) . "<br>";
        }
    }

    function desenharTriangulo($altura) {
        for ($i = 1; $i <= $altura; $i++) {
            echo str_repeat(" ", $altura - $i) . str_repeat("*", $i * 2 - 1) . "<br>";
        }
    }
?>
