<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 08/02/2017
 * Time: 22:28
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Funcionamento do INCLUDE</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
      //require "funcoes.php"; // Ao contrario do include o require interrompe a execução do programa assim que não localiza a função(método).
        include "funcoes.php"; // Usado para incluir funções(métodos)externos, sua desvantagem é que pode incluir metodos mesmo que os mesmos não existam.
        echo "Testando novas funções: <br>";
        olá();
        mostrarValor(4);
    ?>
</div>
</body>
</html>