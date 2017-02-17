<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 09/02/2017
 * Time: 20:53
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
    // a função wordwrap() serve para quebrar linha em uma string com texto muito longo
    $texto = "O FORMATAÇÃO COM PRINTF FUNCIONA DA SEGUINTE FORMA; O % FAZ REFERENCIA AO UMA VARIAVEL O S EM SEGUIDA DELA É O TIPO DA VARIAVEL(S=STRING, F=FLOAT, I=INT, ETC)O PONTO 2(.2) SIGNIFICA QUE A VARIAVEL SERÁ FORMATADA COM 2 NÚMEROS DEPOIS DO PONTO EM SEGUIDA DETERMINAMOS ONDE AS VARIAVEIS FICARÃO";
//  $resposta = wordwrap($t,10,"<br/>\n");
//  echo $resposta;



    // Função strlen - serve para contar os caracteres de uma variavel string
    $txt = "Curso em Video";
    $tamanho = strlen ($txt);
    echo $tamanho."<br>";
    echo"<p>";

    $nome = "   José da Silva<br>   "; // Exemplo de string com espaços
    echo"A quantidade de caracteres na variável nome é ".(strlen($nome))."<br>"; // O Método strlen() vai contar quantos caracteres tem na string $nome
    echo"";

    $novo = trim($nome); // O Método trim() eliminia os espaços do inicio e do fim da variavel $nome e aramazena o resultado na variavel $novo
    echo $novo;
    echo"A quantidade de caracteres na variável nome sem espaços é ".(strlen($novo)); // Agora na chamada do Método strlen() recebendo $novo como parametro e retorna o resultado da contagem sem os espaços
    echo"<p>";

    // Método str_word_count serve para contar quantas palavras há em uma sring
    $frase = "Eu vou estudar PHP";
    $cont = str_word_count($frase,0); // A finalidae do 0 como parametro é fazer com que o metodo apenas conte quantas palavras há na string.
    print($cont);                     // Se ao invês de 0 colocar 1, ele gera um array(vetor) com cada palavra da string em uma posição
                                      // e se colocar 2 como parametro é gerado um array de todas as letras e é informado em que posição desse array começa cada palavra da string

    $site = "Curso em Video";
    $vetor1 = explode(" ", $site);
    print_r($vetor1);

    // A função implode() ou join() serve para juntar intens do tipo string de um array, em uma unica variavel string
    $vetor[0]="Leandro";
    $vetor[1]="Antônio";
    $vetor[2]="Corrêa";
    $texto=implode(" ",$vetor); // obs: o " " serve para determinar o que irá preencher os espaços entre as strings do array

    // A função chr() recebe como parametro um número e retorna a qual tecla do teclado ele se refere
    $letra = chr(65);
    print("A letra de codigo 67 é ". $letra);

    // A função ord() recebe como parametro um letra e retorna a qual o número(código) do teclado ela se refere
    $letra = "c";
    $cod = ord($letra);
    print("A $letra de codigo $cod");

    ?>
</div>
</body>
</html>