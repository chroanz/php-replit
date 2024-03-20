<?php
  // Ler um valor N. Calcular e escrever seu respectivo fatorial. Fatorial de N = N * (N-1) * (N-2) * (N-3) * ... * 1.

  // Entrada
  // A entrada contém um valor inteiro N (0 < N < 13).

  // Saída
  // A saída contém um valor inteiro, correspondente ao fatorial de N.

  $N = fgets(STDIN);
  $count = 1;
  for($i = 0; $i < $N; $i++){
    $calc = $N - $i;
    $count = $count * $calc;
  }

  echo "{$count}\n";

?>