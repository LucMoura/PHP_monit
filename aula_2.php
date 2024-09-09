<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //atividade 1
    echo "<H1>Atividade 1</H1><br>";

    $num1 = 12;
    $num2 = 11;
    $num3 = 9;

    echo "Dentre os números $num1, $num2 e $num3, o menor é ";
    if ($num1 < $num2)
    {
        if ($num1 < $num3)
        {
            echo "$num1 é o menor número<br>";
        } else {
            echo "$num3 é o menor número<br>";
        }
    } elseif ($num2 < $num1){
        if ($num2 < $num3)
        {
            echo "$num2 é o menor número<br>";
        } else {
            echo "$num3 é o menor número<br>";
        }
    } else{
        echo "Possui mais de um número igual";
    }

    //atividade 2
    echo "<H1> Atividade 2</H1>";

    $num4 = 4;
    $num5 = 3;
    $num6 = 5;

    echo "A ordem crescente dos número selecionados é:<br>";
    if ($num4 < $num5)
    {
        if ($num5 < $num6)
        {
            echo "$num4, $num5, $num6";
        } else if ($num6 < $num4){
            echo "$num6, $num4, $num5";
        }
    } elseif ($num5 < $num4)
    {
        if ($num4 < $num6)
        {
            echo "$num5, $num4, $num6";
        }else if ($num6 < $num5){
            echo "$num6, $num5, $num4";
        }
    }

    //atividade 3
    echo "<H1> Atividade 3</H1>";

    $num7 = 4;
    $num8 = 3;
    $num9 = 5;

    echo "A ordem descresecente dos números selecionados é:<br>";
    if ($num4 > $num5)
    {
        if ($num5 > $num6)
        {
            echo "$num4, $num5, $num6";
        } else if ($num6 > $num4){
            echo "$num6, $num4, $num5";
        }
        elseif ($num5 > $num4)
        {
            if ($num4 > $num6)
            {
                echo "$num5, $num4, $num6";
            }else if ($num6 > $num5){
                echo "$num6, $num5,$num4";
            }
        }
    }

    //atividade 4
    echo "<H1>Atividade 4</H1></br>";

    $salario = 2200;

    echo "O seu salário é de $salario e seu reajuste vai ser de: ";
    if ($salario <= 280)
    {
        echo "20%, totalizando ",  $salario *1.20," reais";
    } else if (280 < $salario && $salario <= 700){
        echo "15% totalizando ", $salario**1.15," reais";
    } else if (700 < $salario && $salario <= 1500){
        echo "10% totalizando ", $salario*1.10," reais";
    }else{
        echo "5% totalizando ", $salario*1.05," reais";
    }

    //atividade 5
    echo "<h1>Atividade 5 </h1>";
    $idade = 4;
    echo "Você tem $idade anos e se enquadra em ";

    switch($idade)
    {
        case ($idade <= 5 && $idade <=10):
            echo "Infantil";
            break;
        case ($idade >= 11 && $idade <= 15):
            echo "Juvenil";
            break;
        case ($idade >= 16 && $idade <= 20):
            echo "Junior";
            break;
        case ($idade >= 21 && $idade <= 25):
            echo "Profissional";
            break;
        default:
            echo "Entrada invalida";
            break;
        
    }

    //atividade 6
    echo "<h1>Atividade 6 </h1>";
    $distancia = 100;
    $medida = "cm";

    echo "Você selecionou $distancia$medida<br>A conversão para metros fica:";
    switch($medida)
    {
        case "Km":
            echo $distancia * 1000;
            break;
        case "m":
            echo $distancia;
            break;
        case "cm":
            echo $distancia /100;
            break;
        case "mm":
            echo $distancia / 1000;
            break;
    }

    //atividade 7
    echo "<h1>Atividade 7</h1>";    
    $fibonacci = 1;
    $ant_fibonacci = 0;
    while ($fibonacci < 500 && $ant_fibonacci < 500){
        $ant_fibonacci += $fibonacci;
        $fibonacci += $ant_fibonacci;
        
        if ($fibonacci > 500 ){
            echo "$ant_fibonacci<br>";
           
        }else
        {
            echo "$ant_fibonacci<br>";
            echo "$fibonacci<br>";
        }

      
    }

    //atividade 8
    echo "<h1>Atividade 8 </h1>";
    $num_fat = 5;
    $fat = 1;
    echo "A fatorial de $num_fat é";
    while ($num_fat > 0){
        $fat = $fat * $num_fat;
        $num_fat--;
        
    }
    echo " $fat";

    //atividade 9
    echo "<h1>Atividade 9 </h1>";
    $pais_A = 80000;
    $pais_B = 200000;
    $anos = 0;
    while ($pais_A != $pais_B){
        $pais_A = $pais_A*1.03;
        $pais_B = $pais_B*1.015;
        $anos++;
    }
    echo "São necessários $anos anos para as populações se igualarem";

    //atividade 10
    echo "<h1>Atividade 10</h1>";
    echo "Pulei pq mexe com formulários";

    //atividade 11
    echo "<h1>Atividade 11</h1>";
    $num_tabuada = 2;
    $tabuada = 0;
    echo "A tabuada de $num_tabuada é:<br>";
    while ($tabuada <= 10)
    {
        echo "$num_tabuada X $tabuada = ", ($num_tabuada*$tabuada), "<br>";
        $tabuada++;
    }

    ?>    
</body>
</html>
