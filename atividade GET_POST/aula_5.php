<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Atividade 1</h1>
    <form action="aula_5.php" method="post">
        <label for="num_1">Número 1:</label>
        <input type="number" name="num_1" id="num_1">

        <label for="num_2">Número 2:</label>
        <input type="number" name="num_2" id="num_2">
        <br><br>
        <button type="submit">enviar</button>

    </form>
    <?php
        include 'functions_3.php';
        if (isset($_POST["num_1"])  && isset($_POST["num_2"])){
            $num1 = htmlspecialchars($_POST["num_1"]);
            $num2 =  htmlspecialchars($_POST["num_2"]);

            echo "A soma dos números é " . soma_forms($num1, $num2);
        }
    ?>
    <br><br>
    <h1>Atividade 2</h1>
    <form action="aula_5.php" method="post">
        <label for="num_fat">Insira um número para achar a fatorial</label>
        <input type="number" name="num_3" id="num_3">
        <br><br>
        <button type="submit">Enviar</button>
        <?php


            if (isset($_POST["num_3"])){
                $num3 = htmlspecialchars($_POST["num_3"]);
                echo "A fatorial do número é ". fat_num($num3);

            }
        ?>

    </form>

    <h1>Atividade 3</h1>
    <form action="aula_5.php" method="post">
        <label for="nascimento">Insira a sua data de nascimento:</label>
        <input type="number" name="data" id="data" required>

        <label for="nome">Informe o seu nome:</label>
        <input type="text" name="nome" id="nome" required>
        <br><br>
        <button type="submit">enviar</button>
    </form>

    <?php

        if (isset($_POST["nome"]) && isset($_POST["data"])){
            $data = htmlspecialchars($_POST["data"]);
            $nome =htmlspecialchars($_POST["nome"]);

            echo "<br> <br>O seu nome é $nome você nasceu no ano $data e você tem " . (2024 - $data) . " anos";

        }
    ?>
</body>
</html>