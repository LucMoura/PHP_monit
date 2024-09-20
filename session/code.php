<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        session_start();

        echo "<h1>Questão 1</h1>";

        if (isset($_SESSION['contador'])){
            $_SESSION['contador']++;
        }
        echo "<h1> Pagina principal, que inicia o contador </h1>";

        echo "Contador iniciado. Valor: ". $_SESSION['contador'];

        echo "<h1> Questão 2 </h1>";
    ?>
   
</body>
</html>


