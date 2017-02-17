<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 07/02/2017
 * Time: 22:48
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Verificar se um Número é Primo</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    $numero = isset($_GET["tnum"])?$_GET["tnum"]:1;
    echo "Analisando o número...$numero <br>";
    $index = 0;
    echo "Valores multiplos: ";
    for ($multi = 1; $multi <= $numero; $multi++)
    {
        if($numero % $multi == 0)
        {
            $index+=1;
            echo " $multi - ";
        }
    }
    if ($index > 2)
    {
        echo "<br> $numero não é primo ";
    }
    else
        echo "<br>$numero é primo";
    ?>
    <br/>
    <br>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>