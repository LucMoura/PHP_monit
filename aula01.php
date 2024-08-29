<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

    <?php
    include 'functions.php';

    $monitores_segundo_semestre = ["Angelo","Augusto","Luana"];
    $monitores_quarto_semestre = array("Eurico","Leo");



    for ($i = 0; $i < count($monitores_segundo_semestre); $i++) {
        echo $monitores_segundo_semestre[$i] . "<br>";
    }

    echo "<h1> Atividade 1</h1>";

    $numeros = range(1,10);

    echo $numeros[0] . "<br>" . $numeros[count($numeros) -1] ."<br>";

    echo "<h1> Atividade 2</h2>";
    echo array_sum($numeros);

    echo "<h1> Atividade 3 </h3>";

    $array_2 = [23, 67, 12, 89, 34, 56, 78, 90, 3, 45];

    sort($array_2);

    echo $array_2[0] . "<br>" . $array_2[count($array_2) -1] ."<br>";

    echo "<h1> Atividade 4 </h1>";

    $palavra = array("P","R","O","G","R","A","M","A","R");

    $p_reverse = array_reverse($palavra);

    foreach ($p_reverse as $letra) {
        echo $letra;
    }

    echo "<h1>Atividade 5 </h1>";

 


    $num_1 = 4;
    $num_2 = 5;
    
    echo "A soma dos números ".$num_1 . " e ". $num_2 . "<br>";
    echo calculo($num_1, $num_2, "+");

    echo "<h1>Atividade 6</h1>";

    
    numeros_primos();

    echo "<h1>Atividade 7</h1>";
    $lista = range(1,6);
    echo calcular_soma($lista);

    echo "<h1>Atividade 8</h1>";

    $temp = 42;
    echo temperatura($temp);


    
    ?>
</body>
</html>