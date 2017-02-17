<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 08/02/2017
 * Time: 20:58
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Parâmetro Dinâmico</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
    function soma()
    {
      $p = func_get_args();
      $tot = func_num_args();
      $s =0 ;
      for ($i = 0; $i < $tot; $i++)
      {
          $s = $s + $p[$i];
      }
      return $s;
    }
   $r  = soma(3,5,8);
    echo " A soma  dos valores é ". $r;
    ?>
</div>
</body>
</html>