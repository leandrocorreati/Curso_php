<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 07/02/2017
 * Time: 22:03
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Tabuada</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
    $numero = isset($_GET["tnum"])?$_GET["tnum"]:1;
    for($multi = 1;$multi <= 10; $multi++)
    {
        $resultado = $numero * $multi;
        echo "$numero x $multi = $resultado <br>";
    }
    ?>
    <br/>
    <a href="javascript:history.go(-1)">Voltar</a>

</div>
</body>
</html>