<?php 

// $filer = fopen('hello.txt', 'r');

// echo fread($filer, filesize('hello.txt'));

// $filew = fopen('hello2.txt', 'w');
// fwrite($filew, 'dhaka bangladesh');


// $filew = fopen('hello2.txt', 'a');
// fwrite($filew, "dhaka bangladesh \n");

$today = date('y-m-d');
$filename = "{$today}.txt";
$file = fopen($filename, 'a+');
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
<body>
  <div class="container mt-4">
    <table class="table table-bordered">
      <tr>
        <th>Name</th>
        <th>Email</th>
      </tr>
      <?php
        while($string = fgets($file)):
          $slist = explode(',', $string);
          list($name, $email) = $slist;
       ?>
       <tr>
         <td><?php echo $name ?></td>
         <td><?php echo $email ?></td>
       </tr>

      <?php endwhile; ?>
    </table>
  </div>

  
</body>
</html>
