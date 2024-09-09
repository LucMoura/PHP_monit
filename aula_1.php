<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $num1 = 14;
    $num2 = 4;

    echo "<br>Atividade 1<br>:";
    echo "O resultado dos números selecionados é:       ", (($num1 + $num2) * ($num1 - $num2)) / 4;
    echo "<br>";

    echo "<br>Atividade 2:<br>";

    $num3 = 13;

    if ($num3%2 == 0)
    {
        echo "O número $num3 é par";
    } else{
        echo "o número $num3 é impar";
    }

    echo "<br>";

    echo "<br>Atividade 3:<br>";

    $num4 = 10;
    $num5 = 5;

    $operacao = "-";

    switch ($operacao){
        case "+":
            echo "A soma dos números $num4 e $num5 é igual a: ", ($num4 + $num5);
            break;
        case "-":
            echo "A subtração dos números $num4 e $num5 é igual a: ", ($num4 - $num5);
            break;
        case "*":
            echo "O produto entre os números $num4 e $num5 é igual a: ", ($num4 * $num5);
            break;
        case "/":
            echo "A divisão entre os números $num4 e $num5 é igual a: ", ($num4 / $num5);
            break;
        default:
            echo "Operador desconhecido";
    }

    echo "<br><br>";
    echo "Atividade 4:<br>";

    $dia = 3;

    switch ($dia){
        case  1:
            echo "Hoje é domingo";
            break;
        case 2:
            echo "Hoje é segunda-feira";
            break;
        case 3:
            echo "Hoje é terça-feira";
            break;
        case 4:
            echo "Hoje é quarta-feira";
            break;
        case 5:
            echo "Hoje é quinta-feira";
            break;
        case 6:
            echo "Hoje é sexta-feira";
            break;
        default:
            echo "Dia inexistente";
    }



    
    ?>
</body>
</html>