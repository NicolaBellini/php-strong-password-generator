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
var_dump(array_rand($carachters['letters']));




?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- bootstrap -->
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap/5.3.3/js/bootstrap.min.js" integrity="sha512-ykZ1QQr0Jy/4ZkvKuqWn4iF3lqPZyij9iRv6sGqLRdTPkY69YX6+7wvVGmsdBbiIfN/8OdsI7HABjvEok6ZopQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
  
  <title>title</title>
</head>
<body>

<div class="container d-flex flex-wrap flex-column  p-5">
  <form action="index.php" method="get">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <!-- ho messo un pattern che impedisce all' utente di inserire testo al di fuori di numeri -->
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="passLength" pattern="\d+" placeholder="inserire la lunghezza della password desiderata">
     
    </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 

  <h2><?php echo generator($passwordLength, $carachters) ?></h2>
</div>




</body>
</html>