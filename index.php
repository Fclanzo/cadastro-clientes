<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cadastro de clientes</title>
</head>
<body>
    <h1>Cadastro de cliente</h1>
    <?php
    $nome = "Francesco";
    $idade = "32";
    $fumante = "false";
    echo "<p>Id cliente: $nome <br>";
    echo "Idade cliente: $idade <br>";
    echo "Fumante: $fumante </p>";
    /*
        OPERADORES ARITMÉTICOS
          -	Negação	-$a	Inverte o valor da variável
          +	Soma	$a+$b	Soma o valor das duas variáveis
          -	Subtração	$a-$b	Subtrai o valor de $b do valor de $a
          *	Multiplicação	$a*$b	Multiplica o valor das duas variáveis
          /	Divisão	$a/$b	Divide $a por $b
          %	Módulo	$a%$b	Obtém o resto da divisão de $a por %b, por exemplo:5/4 = 2 (resto 1)
          **	Exponencial	$a**$b	Eleva $a a $b, este operador somente está disponível a partir do PHP 5.6, é o equivalente a função pow($a, $b);
    */

    /*
        OPERADORES RELACIONAIS
            $a == $b	Igual (==)	Verdadeiro (TRUE) se $a é igual a $b.
            $a === $b	Idêntico (===)	Verdadeiro (TRUE) se $a é igual a $b, e eles são do mesmo tipo.
            $a != $b	Diferente (!=)	Verdadeiro se $a não é igual a $b.
            $a <> $b	Diferente (<>)	Verdadeiro se $a não é igual a $b.
            $a !== $b	Não idêntico (!==)	Verdadeiro de $a não é igual a $b, ou eles não são do mesmo tipo.
            $a < $b	Menor que (<)	Verdadeiro se $a é menor que $b.
            $a > $b	Maior que (>)	Verdadeiro se $a é maior que $b.
            $a <= $b	Menor ou igual (<=)	Verdadeiro se $a é menor ou igual a $b.
            $a >= $b	Maior ou igual (>=)	Verdadeiro se $a é maior ou igual a $b.
    */
    echo 20>10;
    echo "<br>";
    /*
        OPERADORES LÓGICOS
    */
    echo "operadores lógicos<br>";
    $fumante = true;
    echo !$fumante;



    $idade = 18;
    if($idade>=18 && $fumante == false){
        echo "<p>Sua idade é $idade </p>";
        echo "<p>Pode entrar na festa</p>";
    }else{
        echo "Voce não pode entrar";
            }
    ?>
</body>
</html>