<?php 

/*5) Solicite a entrada de um número e descubra se um número digitado é par ou ímpar. */

/*$num=20;
 if($num%2==0){
 	echo "O número é par";
 }
else {
	echo "O número é ímpar";
}*/

/*6) Faça um algoritmo PHP que receba os valores A e B, imprima-os em ordem crescente em relação aos seus valores. Exemplo, para A=5, B=4. Você deve imprimir na tela: "4 5".*/
/*$a=3;
$b=7;

if($a > $b){
	echo $a." , ".$b;
}
else {
	echo $b." , ".$a;
}*/

/*7) Faça um algoritmo em PHP onde verifica se o valor da variável A é maior ou menor que o valor da variável B. A mensagem a ser impressa deve ser “A maior que B” ou “A menor que B”.*/
/*$num1=5;
$num2=6;

if($num1 > $num2){
  echo "A é maior do que B";
}
else {
	echo "B é maior do que A";
}*/



/*8) Crie um algoritmo para calcular a média final de um aluno, para isso, solicite a entrada de três notas e as insira em um array, por fim, calcule a média geral. Caso a média seja maior ou igual a seis, exiba aprovado, caso contrário, exiba reprovado. Exiba também a média final calculada.
Ex: N1 = 5 | N2 = 10 | N3 = 4 | MG = 6,33 [Aprovado]*/

/*$notas= array (10,8.2,7.7);
$soma=0;

//var_dump($notas);
    
    for($cont=0;$cont < count($notas);$cont++){//A função count conta quantas notas tem no array 

          $soma+=$notas[$cont];
              }
   $media=$soma/count($notas);
   echo "Média: ".$media."<br>";


   if($media >= 6){
       echo "APROVADO!";
}
   else{
    echo "REPROVADO!";
   }*/

/* 9) Crie um algoritmo que pergunte ao usuário seu nome e sua idade. Em seguida verifique se a idade é maior ou menor que 18, exiba da seguinte forma: Fulano é maior de 18 e tem XX Anos ou Fulano não é maior de 18 e tem XX Anos.*/
/*$nome="André";
$idade=24;
      if($idade>18){
        echo $nome." é maior de 18 e tem ".$idade." anos";    
      }
      else{
        echo $nome." é menor de 18 e tem ".$idade."anos";  
      }*/

/*10) Ler um número inteiro entre 1 e 12 e escrever o mês correspondente. Caso o número seja fora desse intervalo, informar que não existe mês com este número.*/

$num=3;


switch ($num) {
  case '1':
      echo "Janeiro";
    break;
  case '2':
     echo "Fevereiro";
  break;
  case '3':
    echo "Março";
    break;
  case '4':
  echo "Abril";
     break;

  case '5':
  echo "Maio";
  break;

  case '6':
   echo "Junho";
   break;
  
  case  '7':
  echo "Julho";
  break;

  case  '8':
  echo "Agosto";
  break;

  case  '9':
  echo "Setembro";
  break;

  case '10':
  echo "Outubro";
  break;
 
  case '11':
  echo "Novembro";
  break;

  case '12':
  echo "Dezembro";


  default:
     echo "Não existe mês com este número";
    break;
}












 ?>