<?php
session_start();
$user_id = $_REQUEST['user_id'];
$password_set = $_REQUEST['password'];

// check from database if the user id and password combination exists
include 'connection.php';
$check_qry = "SELECT * FROM patient where user_id=? and password_set = ? ";
//$result = mysqli_query($connection.php,$check_qry);

$stmt=mysqli_prepare( $conn,  $check_qry );
mysqli_stmt_bind_param($stmt,'ss',$user_id,$password_set);
mysqli_stmt_execute($stmt);
$result= mysqli_stmt_get_result($stmt);

$rows_returned = mysqli_num_rows($result);


if ($rows_returned == 1){
    $row = mysqli_fetch_array($result);
    $_SESSION['user_name'] = $row['user_id'];
    $_SESSION['loggedin'] = true ;

    header('location:project.php');
}
else{
    $_SESSION['loggedin'] = false;
}
?>