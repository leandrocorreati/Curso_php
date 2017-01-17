<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 16/01/2017
 * Time: 11:57
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Resposta</title>
    <meta charset = "utf8"/>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
    $valor = $_GET["v"];
    $rq = sqrt($valor);
    echo " A raiz de $valor é igual a ".number_format($rq);
    ?>
    <a href="aula_03.php">Voltar</a>
</div>
</body>
</html>