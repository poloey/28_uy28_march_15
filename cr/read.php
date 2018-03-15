<?php 
$date = date('y-m-d');
$file_name = "data/{$date}.txt";
$file = fopen($file_name, 'r');
// echo nl2br( fread($file, filesize($file_name)));
// echo fgets($file);
// echo fgets($file);
// echo fgets($file);

// while($string = fgets($file)) {
//   $stringexploded = explode(',', $string);
//   // $name=  $stringexploded[0];
//   // $email=  $stringexploded[1];
//   list($name, $email) = $stringexploded;
//   echo $name . '<br>';

// }
// die;


 ?>
<?php require 'header.php'; ?>
<div class="container mt-4">
  <table class="table table-bordered">
    <tr>
      <th>Name</th>
      <th>Email</th>
    </tr>
    <?php while($string = fgets($file)): ?>
    <?php 
      $stringexploded = explode(',', $string);
      list($name, $email) = $stringexploded;
     ?>
     <tr>
       <td><?php echo $name ?></td>
       <td><?php echo $email ?></td>
     </tr>
    <?php endwhile; ?>
  </table>


</div>
<?php require 'footer.php'; ?>



