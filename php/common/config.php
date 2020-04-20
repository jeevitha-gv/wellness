 <?php

$link = mysqli_connect("localhost","root","Admin1234#@","database");

if (!$link) 
{
   echo "Error: Unable to connect to MySQL." . PHP_EOL;
   echo "Debugging errno: " . mysqli_connect_errno() . PHP_EOL;
   echo "Debugging error: " . mysqli_connect_error() . PHP_EOL;
   exit;
}
?>


<!-- Updated with new requirements SDD -->