<?php
//Resolva os exercícios abaixo
/*1) - Crie um algoritmo que receba um número digitado pelo usuário e verifique se esse valor é positivo, negativo ou igual a zero. A saída deve ser: "Valor Positivo", "Valor Negativo" ou "Igual a Zero".*/
/*$val=-50;//Valor de entrada
 $resultado="";

if($val > 0){
  $resultado = "Valor Positivo";
  // ou echo "Valor Positivo";
}elseif($val < 0){
  $resultado = "Valor Negativo";
}else{
  $resultado = "Igual a Zero";
}
echo $resultado;*/


/*2) Crie um algoritmo que solicite a entrada de um número, e exiba a tabuada de 0 a 10 de acordo com o número solicitado, ex: 
Entrada = 4
Saída = 4 X 0 = 0...4 X 10 = 40. */

/*$valor=3;

for($cont=1;$cont<=10;$cont++){
      
          echo $cont." X ".$valor."=".$cont*$valor."<br>";
}
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";
echo"<br>";*/

/*3) Crie um algoritmo que solicite um número, e faça o cálculo fatorial do mesmo, exiba o resultado na tela. Ex:
Entrada = 3
Processamento: (3 * 2) * 1
Saída: 6*/

/*$num = 5;
 
  if($num > 0){
    $valor = $num;
    for($i = ($valor - 1); $i > 0; $i--){
      $valor = $valor * $i;
    }
  }else{
    $valor = 0;
  }
 
  echo "!{$num} = {$valor}";*/
 

 /*4) Crie um programa em que o usuário escolha uma operação (soma, subtração, multiplicação ou divisão). Crie duas caixas de texto para receber 2 números. Realize a operação escolhida em cada um dos números.*/

$num01 = filter_input(INPUT_POST, "txtNumero1");
$num02 = filter_input(INPUT_POST, "txtNumero2");
$opera = filter_input(INPUT_POST, "slOperacao");
$resul = "";
 
if($num01  && $num02){
  switch($opera){
    case "+":
      $resul = ($num01 + $num02);
    break;
    case "-":
      $resul = ($num01 - $num02);
    break;
    case "*":
      $resul = ($num01 * $num02);
    break;
    case "/":
      $resul = ($num01 / $num02);
    break;
  }
}
 
?>
 
 <!DOCTYPE html>
 <html lang="en" dir="ltr">
   <head>
     <meta charset="utf-8">
     <title>Operações</title>
     <style>
      input, select{padding:10px; margin: 5px;}
     </style>
   </head>
   <body>
     <h1><?=$resul;?></h1>
     <form method="post">
       <label>Número 1: <input type="text" name="txtNumero1"/></label><br>
       <label>Número 2: <input type="text" name="txtNumero2"/></label><br>
       <label>Operação:
         <select name="slOperacao">
           <option value="+">Adição</option>
           <option value="-">Subtração</option>
           <option value="*">Multiplicação</option>
           <option value="/">Divisão</option>
         </select>
       </label><br>
       <input type="submit" name="btnCalcular" value="Calcular">
     </form>
   </body>
 </html>
  

 