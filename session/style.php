<?php
session_start();
$tema = isset($_SESSION['tema']) ? $_SESSION['tema'] : 'claro';
header("Content-Type: text/css");
if ($tema == 'claro') {
    echo "
        body {
            background-color: #ffffff;
            color: #000000;
        }
    ";
} elseif ($tema == 'escuro') {
    echo "
        body {
            background-color: #333333;
            color: #ffffff;
        }
    ";
} elseif ($tema == 'azul') {
    echo "
        body {
            background-color: #007BFF;
            color: #ffffff;
        }
    ";
}
?>