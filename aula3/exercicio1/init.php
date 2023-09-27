<?php

  // $resultado = 10 === "10";
  // $resultado = 10 <=> "10";

  // echo "Tipo de variável: " . gettype($resultado) . "\n";
  // echo "Resultado: " . ($resultado ? "true" : "false") . "\n";



  // #sitaxe
  // if($resultado) {
    // echo "Entrei no if";
  // }

  // if($resultado == false) {
    // echo "Entrei no if com else" . "\n";
  // }


  //$resultado = 10 <=> "10";

  echo "Digite um número";
  $resultado = fgets(STDIN);

  switch($resultado) {
    case 1:
      echo "Foi digitado o número 1";
      break;
    case 2:
      echo "Foi digitado o número 2";
      break;
    case 3:
      echo "Foi digitado o número 3";
      break;
  }
  

