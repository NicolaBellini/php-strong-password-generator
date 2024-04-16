<?php 
session_start();

include './data/generate.php';

if (isset($_SESSION['password']) && !empty($_SESSION['password'])) {
    $password =  $_SESSION['password'];
} else {
    $password = 'Password non generata';
};

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
  
<h1><?php echo $password ?></h1>

</body>
</html>