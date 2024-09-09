<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    echo "<h1>atividade 1</h1>";
    $num_1 = 1;
    do {
        echo "$num_1<br>";
        $num_1 *= 2;
    } while ($num_1 <= 100 );

    echo "<h1>atividade 2</h1>";
    $i = 0;
    $num_fib = 1;
    $ant_fib = 0;
    
    do{
        $ant_fib += $num_fib;
        $num_fib += $ant_fib;
        
        echo "$ant_fib<br>";
        echo "$num_fib<br>";
        $i++;
    }while ($i <= 4);


    echo "<h1>atividade 3</h1>";
  
    for ($i=0; $i < 100; $i++) { 
        if ($i%2 != 0) {
            echo "$i <br>";
        }else{
            continue;
        }
    }

    echo "<h1>atividade 4</h1>";

    for ($num_2= 30; $num_2 > 0 ; $num_2--) { 
       if ($num_2% 4 ==0) {
        echo "[$num_2]<br>";
       }else{
        echo "$num_2<br++>";
       }
    }
    ?>
</body>
</html>