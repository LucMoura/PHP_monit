<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<form action="welcome.php" method="post">
        <label for="">Coloque seu nome: </label>
        <input type="text" name="nome" required><br><br>
        <label for="">Coloque sua senha: </label>
        <input type="text" name="senha" required><br><br>
        <button type="submit">Enviar</button>
    </form>
<?php
    session_start();
    if(isset($_POST['name_1'], $_POST['pass_1'])) {
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $name_1 = $_POST['name_1'];
            $pass_1 = $_POST['pass_1'];
            if($name_1 == $_SESSION['contas'][0]) {
                if($pass_1 == $_SESSION['contas'][1]) {
                    session_destroy();
                    header("Location: welcome.php");
                    exit();
                }   else {
                        echo "<br>" . "Usuário ou senha inválidos!";
                }
            } else {
                echo "<br>" . "Usuário ou senha inválidos!";
            } 
        }
    }
    ?>
</body>
</html>