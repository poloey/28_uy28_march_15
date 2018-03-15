<?php 

if (isset($_POST['name']) && isset($_POST['email'])) {
  $name = $_POST['name'];
  $email = $_POST['email'];
  $string = "$name, $email \n";
  $date = date('y-m-d');
  $file = fopen("data/{$date}.txt", 'a');
  fwrite($file, $string);
  fclose($file);
}

require 'header.php';
?>
  <div class="container mt-4">
    <form method='post'>
      <div class="form-group">
        <label for="name">Name</label>
        <input required type="text" name="name" id="name" class='form-control'>
      </div>
      <div class="form-group">
        <label for="email">Email</label>
        <input required type="text" name="email" id="email" class='form-control'>
      </div>
      <div class="form-group">
        <button class='btn btn-outline-info' type='submit'>Add people</button>
      </div>
    </form>
  </div>
<?php require 'footer.php'; ?>