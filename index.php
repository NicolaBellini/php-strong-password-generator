<?php
session_start();
require_once __DIR__.'/data/generate.php';

if (isset($_SESSION['password']) && !empty($_SESSION['password'])) {
    $password =  $_SESSION['password'];
} else {
    $password = 'Password non generata';
}

var_dump($_SESSION['generatedPassword']);


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
  <form action="result.php" method="post">
    <div class="mb-3">
      <label for="exampleInputEmail1" class="form-label">Email address</label>
      <!-- ho messo un pattern che impedisce all' utente di inserire testo al di fuori di numeri -->
      <input type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp" name="passLength" pattern="\d+" placeholder="inserire la lunghezza della password desiderata">
     
    </div>
    
   
    <button type="submit" class="btn btn-primary">Submit</button>
  </form> 

 
</div>




</body>
</html>