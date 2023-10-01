<?php

  $array1 = array("maça", "banana", "cereja"); 
  $array2 = ["maça", "banana", "cereja"]; 

  echo $array1[0] . "\n";

  $arrayAssociativo = array(
    "Nome" => "João",
    "Idade" => 25,
    "cidade" => "Lisboa"
  );

  echo $arrayAssociativo["cidade"] . "\n"; 

  $array2 = ["maça", "banana", "cereja"]; 
  $array2[] = "Uva";
  $array2[3] = "Abacaxi";
  $array2[5] = "pera";

  echo var_dump($array2);
  echo $array2[5];

  $pessoas = array(
    array("João", 25, "Lisboa"),
    array("Maria", 30, "Porto")
  ); 

  echo $pessoas[0][0];
  echo $pessoas[1][2];
