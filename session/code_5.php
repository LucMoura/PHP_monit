<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.php">
    <title>Document</title>
</head>
<body>
<?php
    session_start();
    if ($_SERVER['REQUEST_METHOD'] == 'POST' && isset($_POST['tema'])) {
        $_SESSION['tema'] = $_POST['tema'];
    }
    $temaSelecionado = isset($_SESSION['tema']) ? $_SESSION['tema'] : 'claro';
?>
<h1>Escolha um Tema</h1>
    <form method="post">
        <select name="tema">
            <option value="claro" <?php echo $temaSelecionado == 'claro' ? 'selected' : ''; ?>>Claro</option>
            <option value="escuro" <?php echo $temaSelecionado == 'escuro' ? 'selected' : ''; ?>>Escuro</option>
            <option value="azul" <?php echo $temaSelecionado == 'azul' ? 'selected' : ''; ?>>Azul</option>
        </select>
        <button type="submit">Aplicar</button>
    </form>

</body>
</html>