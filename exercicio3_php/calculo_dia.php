<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 18/01/2017
 * Time: 12:20
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>$Title$</title>
</head>
<body>
<div>
    <?php
    $d = isset($_GET["ds"])?$_GET["ds"]:0;
    switch ($d)
    {
        case 2:
        case 3:
        case 4:
        case 5:
        case 6:
            echo "LEVANTA E VAI TRABALHAR !!!!!!";
            break;
        case 7:
        case 8:
            echo "vai dormir ";
        break;
    }
    ?>
    <br/><a href="formulario_semana.html" class="botao">Voltar</a>
</div>
</body>
</html>