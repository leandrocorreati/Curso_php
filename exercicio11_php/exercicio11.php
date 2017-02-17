<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 10/02/2017
 * Time: 18:19
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Funções em String</title>
</head>
<body>
<div>
    <?php
    $nome = "Leandro Antonio Correa"; // Converte qualquer caracter da string que esteja em maiusculo para minusculo.
    $nome2 = strtolower($nome);
    echo "Seu nome é ". $nome2;

    echo"<p>";
    $nome3 = strtoupper($nome);// Converte qualquer caracter da string que esteja em minusculo para maiusculo.
    $nome2 = strtolower($nome);
    print("Seu nome é ". $nome3);

    echo"<p>";
    print("Seu nome é ".ucfirst($nome)); // converte a priemira letra da string em maiuscula

    echo"<p>";
    print ("Seu nome é ". ucwords($nome)); // Converte todas as letras inicias de cada palavra em maiuscula

    echo"<p>";
    print(strrev($nome)); // Inverte a sring ao contrario

    echo"<p>";
    $frase = "Eu estou aprendendo PHP";
    $pos = strpos($frase, "PHP");  // Localiza a posição de uma string e retorna a posição dela. EX: PHP está na posição 20
    echo "A string foi localizada na posição $pos";

    echo"<p>";
    $frase = "Eu estou aprendendo PHP";
    $pos = stripos($frase, "PHP");  // Localiza a posição de uma string e retorna a posição dela independente ser estver em maiuscula ou minuscula. EX: PHP está na posição 20
    echo "A string foi localizada na posição $pos";

    echo"<p>";
    $site = "O mundo é incrivel";
    $sub = substr($site,0,7); // Gera uma substring de uma string já existente, recebe como parametro a string a ser dividida e sua posição inicial e sua posição final
    echo"$sub ";

    echo"<p>";
    $novo = "Antonio";
    $novo1 = str_pad($nome,30," ",STR_PAD_RIGHT); // Faz com que uma string caiba em um determinado espaço(quantidade de caracteres), recebe como parametro uma string a
    print("Meu professor é o $novo1");            // quatidade caracteres do novo espaço, com o que será preenchido e a forma de preencher que podem ser tanto a direita(STR_PAD_RIGHT),
                                                // (STR_PAD_LEFT) e (STR_PAD_CENTER)

    echo"<p>";
    $txt = str_repeat("PHP",5);
    print("O texto gerado foi $txt");
    print(str_repeat("-",20));

    echo"<p>";
    $frase_nova = "Gosto de estudar Matematica !!!";
    $frase_refeita = str_replace("Matematica","PHP",$frase); // substitui uma palavra por outra dentro de uma string, recebe como parametro a palavra a ser substituida depois
    print($frase_refeita);                                   // a palavra que irá substituir e a variavel que armazena a string(caso a palavra a ser substituida esteja com letra
                                                            // maiuscula em algum momento do texto é apenas acrescentar i ao metodo str_ireplace();
    ?>
</div>
</body>
</html>