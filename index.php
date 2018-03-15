<?php 

// $filer = fopen('hello.txt', 'r');

// echo fread($filer, filesize('hello.txt'));

// $filew = fopen('hello2.txt', 'w');
// fwrite($filew, 'dhaka bangladesh');


// $filew = fopen('hello2.txt', 'a');
// fwrite($filew, "dhaka bangladesh \n");

if (isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $string = "name: $name and email: $email \n";
  $today = date('y-m-d');
  $file = fopen("{$today}.txt", 'a');
  fwrite($file, $string);
  fclose($file);
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Document</title>
  <link rel="stylesheet" href="bootstrap.min.css">
</head>
<body class='bg-info'>

<div class="container">
  <div class="card mt-4">
  <div class="card-header">
    <h2>Person info</h2>
  </div>
  <div class="card-body">
    <form action="" method='post'>
      <div class="form-group">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" class='form-control'>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input type="text" name="email" id="email" class='form-control'>
      </div>
      <div class="form-group">
        <button class='btn btn-outline-info' type='submit'>Add people</button>
      </div>
    </form>
  </div>
  </div>
</div>

  
</body>
</html>
