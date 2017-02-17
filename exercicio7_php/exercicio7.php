<?php
/**
 * Created by PhpStorm.
 * User: leandro
 * Date: 07/02/2017
 * Time: 21:32
 */ ?>
<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
        "http://www.w3.org/TR/html4/loose.dtd">
<html>
<head>
    <title>Exemplo FOR PHP</title>
    <link rel="stylesheet" href="_css/estilo.css"/>
</head>
<body>
<div>
    <form method="get" action="tabuada2.php">
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
        <input type="submit" value="Gerar tabuada">
    </form>


    <?php
       /* for ($i = 1; $i <= 10; $i++)
        {
            echo "<br> $i";
        }
        echo "  </br>";

        for ($j = 10; $j >= 1 ; $j--)
        {
            echo "$j </br>";
        }
        echo " <br>";

        for($l = 0; $l <=100; $l+=2)
        {
            echo "$l <br>";
        }
       */

    ?>
</div>
</body>
</html>