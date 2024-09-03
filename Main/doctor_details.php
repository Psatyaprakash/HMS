<?php
include 'connection.php';
echo '<pre>';
print_r($_REQUEST);

print_r($_FILES);


$photo_array = $_FILES['d_image'];
$photo_name = time().$photo_array['full_path'];
$detination = 'doctor_images/'.$photo_name;
move_uploaded_file($photo_array['tmp_name'],$detination);


//$d_id = $_REQUEST['NULL'];
$firstname =addslashes( $_REQUEST['firstname']);
$lastname = $_REQUEST['lastname'];
$email = $_REQUEST['email'];
$mobile = $_REQUEST['mobile'];
$gender = $_REQUEST['gender'];
$dob = $_REQUEST['dob'];
$address = $_REQUEST['address'];

//$qualification = $_REQUEST['qualification'];
//$specialisation = $_REQUEST['specialisation'];
$d_password = $_REQUEST['d_password'];

//$firstname = mysqli_real_escape_string($connect,$_REQUEST['firstname'])  -- for O'Reilly

$doc_ins="INSERT INTO doctor(firstname,lastname,email,mobile,gender,dob,address,d_image,d_password) 
VALUES ('$firstname','$lastname','$email','$mobile','$gender','$dob','$address','$photo_name','$d_password')";

$result = mysqli_query($connect,$doc_ins);


if ($result) {
    header('location:doctor_details_view.php');
}