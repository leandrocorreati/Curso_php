<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 07/02/2017
 * Time: 20:07
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Escolha o número para ver a tabuada</title>
    <link rel="stylesheet" href="_css/estilo.css"
</head>
<body>
<div>
    <form method="get" action="tabuada.php">
    Escolha um número
    <select name="tNum" id="cNum">
        <optgroup>
            <option value="1">1</<option>
            <option value="2">2</<option>
            <option value="3">3</<option>
            <option value="4">4</<option>
            <option value="5">5</<option>
            <option value="6">6</<option>
            <option value="7">7</<option>
            <option value="8">8</<option>
            <option value="9">9</<option>
            <option value="10">10</<option>
        </optgroup>
        <input type="submit" value="MOSTRAR TABUADA"/>
    </form>
    <?php

    ?>
</div>
</body>
</html>