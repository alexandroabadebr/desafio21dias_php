<?php

  $soma_das_frutas = 0;
  $nome_fruta = "";
  $quantidade = 2;

  for($i = 1; $quantidade <= 10; $i++) {
    echo "Digite o nome da fruta $i \n";
    $nome_fruta = fgets(STDIN);
    echo "Digite o valor da fruta $nome_fruta \n";
    $valor_fruta = floatval(trim(fgets(STDIN)));

    $soma_das_frutas += $valor_fruta;
    $nome_fruta .= "$nome_fruta, ";  
  }
