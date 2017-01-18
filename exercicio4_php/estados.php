<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 18/01/2017
 * Time: 13:15
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Região</title>
    <link rel="stylesheet" href="_css/estilo.css"/>

    <style>
        span.estado
        {
            font-size: 25px;
            color: cornflowerblue ;
            text-decoration: underline;
        }
    </style>

</head>
<body>
<div>
    <?php
        $estado = isset($_GET["tEst"])?$_GET["tEst"]:0;

        switch ($estado)
        {
            case 1: echo " Seu estado fica na região <span class='estado'>sudeste</span>";
                break;
            case 2: echo " Seu estado fica na região <span class='estado'>nordeste</span>";
                break;
            case 3: echo " Seu estado fica na região <span class='estado'>centro-oeste</span>";
                break;
            case 4: echo " Seu estado fica na região <span class='estado'>norte</span>";
                break;
            case 5: echo " Seu estado fica na região <span class='estado'>sul</span>";
                break;
        }

    ?>
    <a href="formulario_estados.html" class="botao">VOLTAR</a>
</div>
</body>
</html>