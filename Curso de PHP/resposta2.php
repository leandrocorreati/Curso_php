<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 16/01/2017
 * Time: 15:05
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>Resposta Formulário</title>
    </head>
<body>
<div>
    <?php
    $nome = isset($_GET["nome"])?$_GET["nome"]:"[Não Configurado]";
    $ano = isset($_GET["ano"])?$_GET["ano"]:0;
    $sexo = isset($_GET["sexo"])?$_GET["sexo"]:"[Não Configurado]";
    $idade = date("Y") - $ano;
    echo "$nome tem $idade anos e é $sexo. "
    ?>
</div>
</body>
</html>