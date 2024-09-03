<?php
include 'connection.php';

echo '<pre>';


print_r($_FILES);


$photo_array = $_FILES['p_image'];
$photo_name = time().$photo_array['full_path'];
$detination = 'patient_images/'.$photo_name;
move_uploaded_file($photo_array['tmp_name'],$detination);

print_r($_REQUEST);
echo '<pre>';

//$p_id = $_REQUEST['NULL'];
$p_name = $_REQUEST['p_name'];
$p_email = $_REQUEST['p_email'];
$p_dob = $_REQUEST['p_dob'];
$p_gender = $_REQUEST['p_gender'];
$p_phone = $_REQUEST['p_phone'];
$p_address = $_REQUEST['p_address'];
//$p_image = $_REQUEST['p_image'];
$p_password = $_REQUEST['p_password'];



$ins_stmt = "INSERT INTO patient(p_id,p_name,p_email,p_dob,p_gender,p_phone,p_address,p_image,p_password) 
VALUES (null,'$p_name','$p_email','$p_dob','$p_gender',$p_phone,'$p_address','$photo_name','$p_password')";

$result = mysqli_query($connect,$ins_stmt);

$p_key=mysqli_insert_id($connect);
$disease_array=$_REQUEST['diseases'];
foreach($disease_array as $values){
   $sql = "INSERT INTO patient_diseases VALUES (null,$p_key,$values)";
  mysqli_query($connect,$sql);

}



if($result){
   header('location:patient_details_view.php');
}

//alter TABLE `patient_diseases` add CONSTRAINT fk_disease FOREIGN key (disease_id) REFERENCES diseases(disease_id) on delete RESTRICT;
?>
