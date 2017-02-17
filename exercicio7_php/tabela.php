<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 07/02/2017
 * Time: 22:53
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Tabela de Escolha de Números</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
 </head>
<body>
<div>
    <form method="get" action="primo.php">
        <select name="tnum" id="cnum">
            <optgroup>
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
                <option value="6">6</option>
                <option value="7">7</option>
                <option value="8">8</option>
                <option value="9">9</option>
                <option value="10">10</option>
            </optgroup>
            <input type="submit" value="Verificar número primo">
    </form>
    <?php
    ?>
</div>
</body>
</html>