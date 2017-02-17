<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 08/02/2017
 * Time: 19:17
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Método de Soma</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    function somar($n1,$n2)
    {
        $resultado = $n1 + $n2;
        return $resultado;
    }
    $n1 = isset($_GET["tnum1"])?$_GET["tnum1"]:1;
    $n2 = isset($_GET["tnum2"])?$_GET["tnum2"]:1;
    echo somar($n1,$n2)
    ?>
    <br/>
    <a href="javascript:history.go(-1)">Voltar</a>
</div>
</body>
</html>