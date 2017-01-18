<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 17/01/2017
 * Time: 10:47
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>

    <style>
        span.aprovado
        {
            font-size: 20px;
            color: cornflowerblue ;
        }
        span.reprovado
        {
            font-size: 20px;
            color: #FF0000;
        }
    </style>

    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Exercicio</title>
</head>
<body>
<div>
    <?php
    $n1 = isset($_GET["n1"])?$_GET["n1"]:0;
    $n2 = isset($_GET["n2"])?$_GET["n1"]:0;
    $media = ($n1 + $n2) / 2;

    if ($media >= 6) {
        echo " <span class='aprovado'>Você foi aprovado !!!</span>";
    }
    else
    {
        echo "<span class = 'reprovado'>Você foi reprovado !!</span>";
    }
    ?>
    <a href="formulario_media.html"><input type="submit" value="VOLTAR"></a>


</div>
</body>
</html>