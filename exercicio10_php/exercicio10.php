<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 09/02/2017
 * Time: 19:56
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Funções String</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
    <?php
    $produto = "leite";
    $preco = 4.5;
    // NESSE EXEMPLO FOI FEITA A CHAMADA DO METODO NUMBER_FORMAT() COLOCADO COMO PARAMETRO A VARIAVEL E QUANTAS CASAS DECIMAIS ELA TERA DEPOIS DA VIRGULA
    echo "O $produto custa R$ ". number_format($preco,2);

    printf ("O %s custa R$ %.2f ",$produto, $preco);    // O FORMATAÇÃO COM PRINTF FUNCIONA DA SEGUINTE FORMA; O % FAZ REFERENCIA AO UMA VARIAVEL
                                                        // O S EM SEGUIDA DELA É O TIPO DA VARIAVEL(S=STRING, F=FLOAT, I=INT, ETC)
                                                        // O PONTO 2(.2) SIGNIFICA QUE A VARIAVEL SERÁ FORMATADA COM 2 NÚMEROS DEPOIS DO PONTO
                                                        // EM SEGUIDA DETERMINAMOS ONDE AS VARIAVEIS FICARÃO
    echo"<br>";
    $x[0]=4;
    $x[1]=3;
    $x[2]=8;
    print_r($x);
    echo"<br> Método print_r<br>";
    $v2 = array (2,3,4,6,1);
    print_r($v2);
    echo"<br> Método var_dump";
    var_dump($v2);
    echo"<br> Método var_export <br>";
    var_export($v2);
    ?>
</div>
</body>
</html>