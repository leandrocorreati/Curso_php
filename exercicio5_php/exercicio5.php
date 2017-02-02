<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 18/01/2017
 * Time: 17:58
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Testando o While no PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <?php
        $num = (int)0;
        while ($num < 10)
        {
            $num++;
            echo "$num </br>";

        }
    ?>

</div>
</body>
</html>