<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 15/02/2017
 * Time: 17:58
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Matrizes e Vetores</title>
    <link rel="stylesheet" href="_css/estilo.css">
</head>
<body>
<div>
     <pre>
        <table border="1"><tr>
    <?php
    /* $vetor[] = new int[2]; // vetor em Exemplo de vetor em PHP
    $vetor[0]= 28;
    $vetor[1]= 89;
    $vetor[2]= 89;
    $vetor = array(28,89,89); /// pode ser usado para colocar valor nas posições do vetor e também para declarar um vetor.*/

   $n = array(3,5,8);
   print_r($n);
   $n[] = 7;

   $c = range(5,20,5); // O Range em PHP funciona da seguinte forma,
                        // a primeira posição signnifica o valor da posição 0 em seguida se estabelece o valor da ultima  posição do vetor e o ultimo
                        // parametro determina o intervalo para atingir o valor da ultima posição(EXEMPLO: 5,10,15,20)
    print_r ($c);

    foreach ($c as $v)
    {
       echo "<td>$v" ;
    }

    $v = array ( 0 => 5, 1=>9, 2=>8, 3=> 7 );
    print_r($v);
    $v[]="56";
    unset($v[9]); // Serve para desalocar espaço na memoria, ele exclui a posição informada no parametro

    // O PHP permite que você possa criar vetores mistos(com tipos de valores diferentes)
    $cad = array("nome" => "ana", "idade"=>23,"peso"=>78.5);
    foreach ($cad as $campo => $valor)
    {
        echo "O valor de $campo é $valor";
    }

    $matriz = array(array(2,3), array(3,4), array(9,5)); // Matriz em PHP(varios arrays dentro de um array)

    var_dump($v); // Exibe o vetor na tela com os tipos de cada posição
    $total = count($v);
    echo ("$total");

    // LIFO (Last In First Out)


    array_pop($v); // Exclui todas as posições e valores de um vetor


    /*(int)$vetor1[] = new int[3];
    for ($i = 0; $i < 3; $i++)
    {
        $vetor1 = 2;
        print("Posição [".$i."]".$vetor1[$i]);
    }*/


    ?>
            </tr></table>
    </pre>
</div>
</body>
</html>