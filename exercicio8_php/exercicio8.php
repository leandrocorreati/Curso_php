<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 08/02/2017
 * Time: 18:09
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title></title>
    <link rel="stylesheet" href="_css/estilo.css">
 </head>
<body>
<div>
    <?php
        function soma ($a,$b)
        {
            $soma = $a + $b;
            return $soma; // POR BOAS PRATICAS NUNCA SE DEVE MANDAR ESCREVER DENTRO DE UM MÉTODO
        }
    echo "A Soma é ". soma(4,65);
    echo "<br>A soma é ". soma(45,67);
    $x = 5;
    $y = 15;
    echo "<br>A soma é ". soma($x,$y);

        function soma2 ($a,$b)
        {
            $s = $a + $b;
            return $s;
        }
        $res = soma2(4,6);
        echo "$res";
    ?>
</div>
</body>
</html>