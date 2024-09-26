<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="code_4.php" method="post">
            <label for="">Coloque seu nome: </label>
            <input type="text" name="nome" required><br><br>
            <label for="">Coloque sua senha: </label>
            <input type="text" name="senha" required><br><br>
            <button type="submit">Enviar</button>
        </form>
    <?php
         session_start();
         if (!isset($_SESSION['conta_user'])) {
             $_SESSION['conta_user'] = array();
         }
         if ($_SERVER['REQUEST_METHOD'] === 'POST') {
             $nome = $_POST['nome'];
             $senha = $_POST['senha'];
             $id = uniqid();
             array_push($_SESSION['conta_user'], $nome);
             array_push($_SESSION['conta_user'], $senha);
             array_push($_SESSION['conta_user'], $id);
         }
    ?>
</body>
</html>