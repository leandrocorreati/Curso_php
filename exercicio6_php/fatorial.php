<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 07/02/2017
 * Time: 18:57
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Fatorial</title>
    <link rel="stylesheet" href="_css/estilo.css"
</head>
<body>
<div>
    <?php
        $v = isset ($_GET["val"])?$_GET["val"]: 1;
        echo "<h1> Calculando o Fatorial de $v </h1>";
        $c = $v;
        $fat = 1;

        do
        {
            $fat = $fat * $c;
            $c--;
        }while($c >= 1);
        echo "<h2>$v != $fat </h2>";
    ?>
    <p><a href="exercicio6B.php.php" class="botao">Voltar</a></p>
</div>
</body>
</html>