<?php
// Faça um programa que leia três valores e apresente o maior dos três valores lidos seguido da mensagem “eh o maior”. Utilize a fórmula:
// MaiorAB = (a + b + abs(a - b)) / 2
// Obs.: a fórmula apenas calcula o maior entre os dois primeiros (a e b). Um segundo passo, portanto é necessário para chegar no resultado esperado.
// Entrada
// O arquivo de entrada contém três valores inteiros.
// Saída
// Imprima o maior dos três valores seguido por um espaço e a mensagem "eh o maior".
$numbers = explode(" ", fgets(STDIN));
$maior = ($numbers[0] + $numbers[1] + abs($numbers[0] - $numbers[1])) / 2;
$resultado = ($maior + $numbers[2] + abs($maior - $numbers[2])) / 2;
echo "$resultado eh o maior\n";
?>