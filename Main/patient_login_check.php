<?php
session_start();
$p_email = $_REQUEST['p_email'];
$p_password = $_REQUEST['p_password'];

// check from database if the user id and password combination exists
include 'connection.php';
$check_qry = "SELECT * FROM patient where p_email='$p_email' and p_password= '$p_password' ";
$result = mysqli_query($connect,$check_qry);


//
//$stmt=mysqli_prepare( $connect,  $check_qry );
//mysqli_stmt_bind_param($stmt,'ss',$p_email,$p_phone);
//mysqli_stmt_execute($stmt);
//$result= mysqli_stmt_get_result($stmt);

$rows_returned = mysqli_num_rows($result);


if ($rows_returned == 1){
    $row = mysqli_fetch_array($result);
    $_SESSION['p_name'] = $row['p_email'];
    $_SESSION['loggedin'] = true ;
    echo 'successfully loggedin';

    header('location:project.php');
}
else{
    $_SESSION['loggedin'] = false;
    ?>'<script>alert("Invalid username or Password")</script>';
    <div style="height:100%; width:100%; background-color: #000; color:red; text-align:center;padding:10%; font-weight:heavy; font-size: 10em;">
        ERROR
    </div>
<?php
}
?>