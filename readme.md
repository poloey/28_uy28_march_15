# file handling in php 

# to open a file 

~~~php
$handle = fopen ('file location', 'mode of opening')
~~~

available opening mode `a` `w` `r`

## to read file 

~~~php
fread('handle', 'filesize');
~~~

## to know the size of file 

~~~php
filesize('file location')
~~~

## to write inside file

~~~php
fwrite('handle', 'whatever you want to write');
~~~

## to read single line from handle 

~~~php
fgets('handle');
~~~

## to explode string to array 

~~~php
explode('delimeter', 'string');

eg:
explode(',', 'hello, world') // ['hello', 'world']
~~~

## assign multiple variable at a time using `list`

~~~php
$fruits = ['apple', 'orange', 'banana'];
list($f1, $f2, $f3) = $fruits;
~~~

## new line to html break

~~~php
nl2br('string');
~~~

## to close file 

~~~php
fclose('handle')
~~~

## table data generation 

~~~php
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
~~~











