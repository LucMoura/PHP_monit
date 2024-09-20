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
    if (isset($_SESSION['nome']) && isset($_SESSION['idade'])) {
        $nome = $_SESSION['nome'];
        $idade = $_SESSION['idade'];

        echo "<h1>Bem-vindo, $nome!</h1>";
        echo "<p>Sua idade é: $idade anos.</p>";

        session_destroy();
    } else {
        echo "<h1>Acesso Negado</h1>";
        echo "<p>Por favor, volte ao formulário para se identificar.</p>";
    }
?>
</body>
</html>