<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 07/02/2017
 * Time: 20:15
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Tabuada</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    $numero = isset ($_GET["tNum"])?$_GET["tNum"]: 1;
    $multi = 0;
    do
    {
        $multi++;
        $resultado = $numero * $multi;
        echo "$numero x $multi = $resultado <br>";
    }while($multi < 10);
    ?>
   </div>
</body>
</html>