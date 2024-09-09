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
        echo "<h1>Atividade 1</h1>";
        $atividade_1 = [1,2,4,2,45,4];
        echo soma_lista($atividade_1);

        echo "<h1>Atividade 2</h1>";
        $atividade_2 = [2,44,1,42,41,542,23,45,654];
        echo maior_valor($atividade_2);

        echo "<h1>Atividade 3</h1>";

        
        $atividade_3 = range(1,20);
        $pares = numeros_pares($atividade_3);
        for ($i=0; $i < count($pares); $i++) { 
            echo $pares[$i] . "<br>";
        }

        echo "<h1>Atividade 4</h1>";

        $atividade_4 = "Paralelepipedo";
        $letra = "e";

        echo char_in_string($atividade_4, $letra);

        echo "<h1>Atividade 5</h1>";
        $palavra = "wompwomp";
        echo reverse_string($palavra);

        echo "<h1>Atividade 6</h1>";

        

    ?>
</body>
</html>