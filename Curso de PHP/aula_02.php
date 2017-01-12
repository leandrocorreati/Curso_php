<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 11/01/2017
 * Time: 20:51
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Aula 02</title>
</head>
<body>
<div>
    <?php
    $preco = (int)40;
    $desconto = (int)10;
    $precosfinal = $preco - (($preco /100) * $desconto);
    echo "O preço final é  $precosfinal -----------";


    $n1 = 3;
    $n2 = $n1;
    echo "$n1 é igual a $n2"

    ?>
</div>
</body>
</html>