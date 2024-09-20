<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Formulário de Identificação</title>
</head>
<body>
    <h1>Identificação do Usuário</h1>
    <form action="code_2.php" method="POST">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required>
        <br><br>
        <label for="ano_nascimento">Ano de Nascimento:</label>
        <input type="number" id="ano_nascimento" name="ano_nascimento" required>
        <br><br>
        <input type="submit" value="Enviar">
    </form>
    <?php
    session_start();
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $nome = htmlspecialchars($_POST['nome']);
        $ano_nascimento = intval($_POST['ano_nascimento']);
    
        $idade = date("Y") - $ano_nascimento;

        $_SESSION['nome'] = $nome;
        $_SESSION['idade'] = $idade;
    
        header('Location: pag_2.php');
        exit();
    }
    
    ?>
</body>
</html>
