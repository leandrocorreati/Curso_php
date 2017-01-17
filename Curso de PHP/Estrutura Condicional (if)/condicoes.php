<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 16/01/2017
 * Time: 22:48
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <link rel="stylesheet" href="_css/estilo.css"/>
    <title>If Condições</title>
</head>
<body>
<div>
    <?php
    $a = isset($_GET["ano"])?$_GET["ano"]:1900;
    $i = date("Y") - $a;
    echo" Você nasceu em $a e tem $i anos.<br> ";

    if($i >= 18){
        $v = "já pode votar !";
        $d = "já pode dirigir !" ;
    }

    else
    {
        $v = "não pode votar !";
        $d = "não pode dirigir !" ;
    }
    echo "Com essa idade você $v. E também $d";

    switch ($i) {
        case $i > 18: echo "<br>oi yesss";
    }
    ?>
</div>
</body>
</html>