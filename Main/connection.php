<?php
$host= 'localhost';
$user = 'root';
$password = '';
$dbname = 'hms';

$connect = mysqli_connect($host,$user,$password,$dbname);

if ($connect){
  //  echo '..'.'<br>';
}
else{
    echo 'connection error:'.mysqli_connect_error();
}
?>