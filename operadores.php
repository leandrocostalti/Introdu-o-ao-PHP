<?php
$valorA = 3;
$valorB = 2;
//Soma
echo "A soma de A + B = ".($valorA + $valorB);
//Subtração
echo "<br> A subtração de A - B = ".($valorA - $valorB);
//Multiplicação
echo "<br> A multiplicação de A * B = ".($valorA * $valorB);
//Divisão
echo "<br> A divisão de A / B = ".($valorA / $valorB);
//Incremento
echo "<br> O incremento de A ++= ".(++$valorA);
//Decremento
echo "<br> O decremento de A --= ".(--$valorA);
//Decremento sobre a variavel decrementada anteriormente
echo "<br> O decremento de A --= ".(--$valorA);
echo "<hr>";

$compA = 8;
$compB = 8;

//Maior que
echo "A > B, resultado = ".($compA>$compB);
//Menor que
echo "<br>A < B, resultado = ".($compA<$compB);
//Maior ou igual
echo "<br>A >= B, resultado = ".($compA>=$compB);
//Menor ou igual
echo "<br>A <= B, resultado = ".($compA<=$compB);
//Igualdade
echo "<br>A == B, resultado = ".($compA==$compB);
//Diferença
echo "<br>A != B, resultado = ".($compA!=$compB);
//Diferença
echo "<br>A <> B, resultado = ".($compA<>$compB);
//Igual e do mesmo tipo
echo "<br>A === B, resultado = ".($compA===$compB);
//Diferente e do mesmo tipo
echo "<br>A !== B, resultado = ".($compA!==$compB);
