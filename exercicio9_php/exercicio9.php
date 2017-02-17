<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 08/02/2017
 * Time: 21:34
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Procedimento</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php //PASSAGEM POR VALOR
    function teste($x)
    {
        $x = $x + 2;
        echo "O VALOR DE X É ".$x."<br>";
    }
    $a = 3 ;
    teste($a);
    echo "O VALOR DE A É ".$a."<br>";



    function teste2(&$y) //PASSAGEM POR REFERÊNCIA
    {
        $y = $y + 2;
        echo "<br>O VALOR DE Y É ".$y;
    }
    $b = 3;
    teste($b);
    echo "<br>".teste($b);
    ?>
</div>
</body>
</html>