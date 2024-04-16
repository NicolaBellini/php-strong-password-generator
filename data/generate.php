<?php 

$passwordLength=$_POST['passLength'];

function customize(){

}


function generator($passwordLength, $carachters){

    $generatedPassword = '';

    if ($passwordLength <= 0) {
        return 'Non hai inserito un numero adatto';
    }

    if ($passwordLength >= 50) {
        return 'Abbonati a premium';
    }

    $selectedCharacters = [];

    if (isset($_POST['symbols'])) {
        $selectedCharacters = array_merge($selectedCharacters, $carachters['symbols']);
    }

    if (isset($_POST['maiusc'])) {
        $selectedCharacters = array_merge($selectedCharacters, $carachters['maiusc']);
    }

    if (isset($_POST['numbers'])) {
        $selectedCharacters = array_merge($selectedCharacters, $carachters['numbers']);
    }

    if (isset($_POST['letters'])) {
        $selectedCharacters = array_merge($selectedCharacters, $carachters['letters']);
    }

    for ($i = 0; $i < $passwordLength; $i++) {
      if(!isset($_POST['repeat'])){
        // se non è selezionato il no repeat allora non controllo la stringa
        $randomIndex = array_rand($selectedCharacters);
        $generatedPassword .= $selectedCharacters[$randomIndex];
      }else{
        // se è checkato il no repeat divido la stringa in un array provvisorio, il quale controlla ogni carattere prima di pusharselo dentro, poi riconverto l' array in una stringa 
        $randomIndex = array_rand($selectedCharacters);
        $splittedPassword = str_split($generatedPassword);
        if(!in_array($selectedCharacters[$randomIndex], $splittedPassword )){
          $splittedPassword[]=$selectedCharacters[$randomIndex];
          $generatedPassword = implode('', $splittedPassword);
        }else{
          // se scarta il carttere sottraggo a $i un ciclo
          $i--;
        }
      } 
    }

    return $generatedPassword;



};

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



$_SESSION['password']= generator($passwordLength, $carachters);




?>