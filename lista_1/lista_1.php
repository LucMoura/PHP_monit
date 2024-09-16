<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Aquecimento</h1>
    <form action="lista_1.php" method = "POST">

        <label for="num_1">Insira um numero: </label>
        <input type="number" name="num_1" id="num_1">

        <br><br>
        <label for="num_2">Insira um numero: </label>
        <input type="number" name="num_2" id = "num_2">
        
        <br><br>

        <label for="simb_oper">Selecione a operação</label>
        <select name="oper" id="oper">
            <option value=""></option>
            <option value="soma">soma</option>
            <option value="subtração">subtração</option>
            <option value="multiplicação">multiplicação</option>
            <option value="divisão">divisão</option>
        </select>
        <br><br>

        <button type="submit" name = "">enviar</button>
    </form>
    <?php
    include 'functions_4.php';
    
    if ($_SERVER['REQUEST_METHOD'] === 'POST'){
        $oper = $_POST['oper'];
        $num_1 = $_POST['num_1'];
        $num_2 = $_POST['num_2'];
        
        switch ($oper) {
            case 'soma':
                echo soma($num_1 , $num_2);
                break;
            case 'subtração':
                echo sub($num_1 , $num_2);
                break;
            case 'multiplicação':
                echo mult($num_1, $num_2);
                break;
            
            case 'divisão':
                echo div($num_1, $num_2);
                break;
            
            default:

                break;
        }
    }

    ?>

    <h1>Questão 1</h1>
    <form action="lista_1.php" method="post">
        <label for="">Lista de números</label>
        <input type="text" name="lista_numeros" id="lista">
        <button type="submit">Enviar</button>

    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $lista = $_POST['lista_numeros']?? $lista = "";
            $lista = explode(',' ,  $lista);
            $lista = array_map('intval', $lista);
            $lista = array_unique($lista);
            foreach($lista as $num){
                echo $num;
            }
        }

    ?>
    <h1>Questão 2</h1>
    <form action="lista_1.php" method="post">
        <label for="">Digite os números</label>
        <input type="text" name="lista_2" id="lista_input_par_impar">
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $lista = $_POST['lista_2']?? $lista = "";
            $lista = explode(',', $lista);
            $lista = array_map('intval', $lista);

            $resultado = par_impar($lista);
            echo "<table>";
            echo "<tr><th>Pares</th><th>Ímpares</th></tr>";
            echo "<tr><td>" . implode(', ', $resultado['pares']) . "</td><td>" . implode(', ', $resultado['impares']) . "</td></tr>";
            echo "</table>";
           
        }

    ?>

    <h1>Questão 3</h1>
    <form action="lista_1.php" method="Post">
        <label for="">Digite o primeiro número: </label>
        <input type="number" name="num_1" id="num_1">
        <br><br>
        <label for="">Digite o segundo número: </label>
        <input type="number" name = "num_2" id="num_2">
        <button type="submit">Enviar</button>
    </form>

    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $num = $_POST['num_1']?? $num;
            $num_1 = $_POST['num_2']?? $num_1;

            echo quadrante($num, $num_1);
        }
    ?>

    <h1>Questão 4</h1>
    <form action="lista_1.php" method="post">
        <label for="">Digite a Quantidade de pessoas na fila</label>
        <input type="number" name="num_person" id="num_person">
        <br><br>
        <label for="">Digite os seus identificadores</label>
        <input type="text" name="ident_person" id="ident_person">
        <br><br>
        <label for="">Digite a quantidade de pessoas que sairam</label>
        <input type="number" name="exit_person" id="exit_person">
        <br><br>
        <label for="">Digite o identificadores dos que sairam</label>
        <input type="text" name="ident_exit_person" id="ident_exit_person">
        <button type="submit">Enviar</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $N = $_POST['num_person'];
            $ident_person_str = $_POST['ident_person'];
            $M = $_POST['exit_person'];
            $exit_person_str = $_POST['ident_exit_person'];

            $ident_person = explode(',',$ident_person_str);
            $exit_person = explode(',',$exit_person_str);

            $final_fila = filas($N, $ident_person, $M, $exit_person);
            print_lista($final_fila);
        }
    ?>
    <h1>Questão 5</h1>
    <form action="lista_1.php" method="Post">
        <label for="">Digite a altura do seu triangulo</label>
        <input type="number" name = "H_tri" id="H_tri">
        <button type="submit">Enviar</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $h_tri = $_POST['H_tri'];
            echo veri_trian($h_tri);    
            echo h_triang($h_tri);
        }
    ?>
    <h1>Questão 6</h1>
    <form action="lista_1.php" method = "Post">
        <label for="">Selecione a forma geometrica: </label>
        <select name="form_geo" id="form_geo">
            <option value=""></option>
            <option value="Triângulo">Triangulo</option>
            <option value="Quadrado">Quadrado</option>
            <option value="Retângulo">Retângulo</option>
        </select>
        <br><br>
        <label for="">Lado // Altura: </label>
        <input type="number" name="Altura" id="Altura">
        <br><br>
        <label for="">Largura: </label>
        <input type="number" name="Largura" id="Largura">
        <br><br>
        <button type="submit">Enviar</button>
    </form>
    <?php
        if ($_SERVER['REQUEST_METHOD'] === 'POST'){
            $forma = $_POST['form_geo'];
            $dimensao = $_POST['Altura'];
            $largura = $_POST['Largura'] ?? $dimensao;

            echo veri_forms($dimensao, $largura);
            switch ($forma) {
                case 'Quadrado':
                    desenharQuadrado($dimensao);
                    break;
                case 'Retângulo':
                    desenharRetangulo($dimensao, $largura);
                    break;
                case 'Triângulo':
                    desenharTriangulo($dimensao);
                    break;
            }
        }
    ?>

</body>
</html>