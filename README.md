# cadastro-clientes
Operadores lógicos
Estrutura de decisão
if
switch
ternário
Estrutura de repetição
while
for
Desafios
Operadores lógicos
Os operadores lógicos são:
&& (AND ou E): se apenas uma expressão for falsa o resultado será falso. Para ser verdadeiro, todas as expressões precisam ser verdadeiras.
|| (OR ou OU): uma expressão precisa ser verdadeira para o resultado ser verdadeiro. O resultado só sera falso se todas as expressões forem falso.
! (NOT ou NÃO): inverte o resultado, se for verdadeiro e você usar o NOT o resultado mudará para falso, se for falso mudará para verdadeiro.
Estrutura de decisão
IF
Quando você precisa que seu código tome alguma decisão baseado em uma ou mais condições.
Sintaxe
if(condição){
    resposta verdadeira
}else{
    resposta falsa
}
IF Simples
if($idade>=18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa</p>";
}
IF com ELSE
if($idade>=18 && $fumante == false){
    echo "<p>Sua idade é $idade </p>";
    echo "<p>Pode entrar na festa</p>";
}else{
    echo "Você não pode entrar";
}
IF com ELSE IF
if($nota >= 8){
    echo "<p>Aprovado</p>";
}else if($nota >= 5){
    echo "<p>Recuperação</p>";
}else{
    echo "<p>Reprovado</p>";
}