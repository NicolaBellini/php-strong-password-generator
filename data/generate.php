<?php 
$carachters=[
  'letters'=>[
    'a', 'b', 'c', 'd', 'e', 'f', 'g', 'h', 'i', 'j', 'k', 'l', 'm', 'n', 'o', 'p', 'q', 'r', 's', 't', 'u', 'v', 'w', 'x', 'y', 'z'
  ],
  'maiusc'=>[
    'A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'
  ],
  'symbols'=>[
    '!', '?', '&', '%', '$', '<', '>', '^', '+', '-', '*', '/', '(', ')', '[', ']', '{', '}', '@', '#', '_', '='
  ],
  'numbers'=>[
    0,1, 2, 3, 4, 5, 6, 7, 8, 9,
  ],
];

function generator($passwordLength, $carachters){
  $passwordGenerated='';

  // ciclo tante volte quanto la lunghezza della password indicata nel campo di input passwordlenght

  for($i=0 ; $i<$passwordLength ; $i++){
    // genero un indice random prensente nell' array
    $randomIndex= array_rand($carachters['letters']);
    // uso quell' indice random per prendere un carattere ad indice random nell' array desiderato
    $passwordGenerated .= $carachters['letters'][$randomIndex];
  
  };

  return $passwordGenerated;
};

$passwordLength=$_GET['passLength'];





?>