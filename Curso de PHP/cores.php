<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 16/01/2017
 * Time: 18:17
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Gerador de Cores</title>
    <?php
    $txt = isset($_GET["t"])?$_GET["t"]:"texto generico";
    $tam = isset($_GET["tam"])?$_GET["tam"]:"12pt";
    $cor = isset($_GET["cor"])?$_GET["cor"]:"#000000";
    ?>
    <style>

        span.texto
        {
            font-size: <?php echo $tam; ?>;
            color: <?php echo $cor; ?>;
        }

    </style>

</head>
<body>
<div>
    <?php
        echo "<span class='texto'>$txt</span>";
    ?>

    <a href="formulario2.html">Voltar</a>
   </div>
</body>
</html>