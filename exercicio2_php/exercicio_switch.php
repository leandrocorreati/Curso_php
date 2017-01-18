<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 17/01/2017
 * Time: 17:39
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Calculadora de operações</title>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
        $n = isset($_GET["num"])?$_GET["num"]: 0;
        $o = isset($_GET["oper"])?$_GET["oper"]: 1;


        switch ($o)
        {
            case 1 :
                $resposta = $n * 2;
                break;

            case 2 :
                $resposta = $n ^ 3;
                break;

            case 3 :
                $resposta = $raiz = sqrt($n);

        }
        echo " O resusltado da operação $o é: $resposta."
    ?>
</div>
</body>
</html>