<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient Update</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
</head>
<body>
<style>
      h1{
        margin-top: 1%;
        font-family: 'Courier New', Courier, monospace;
        color: bisque;
      }
      body{
        background: url(https://images.unsplash.com/photo-1617634795446-b58c985ec639?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=436&q=80);
        background-size: cover;
    background-repeat: no-repeat;
    background-position: center;

      }

        .border{
            border: 2px solid black;
            border-radius: 15px;
            margin-left: 10%;
            margin-top: 5%;
            margin-right: 10%;
            padding-bottom: 12px;
            background: transparent;
            font-family: Impact, Haettenschweiler, 'Arial Narrow Bold', sans-serif;

            background: rgb(153, 148, 123);
            background: linear-gradient(90deg, rgb(175, 139, 156) 0%, hsla(176, 57%, 89%, 1) 100%);
            background: -moz-linear-gradient(90deg, hsla(332, 53%, 82%, 1) 0%, rgb(133, 158, 156) 100%);
            background: -webkit-linear-gradient(90deg, hsla(332, 53%, 82%, 1) 0%, hsla(176, 57%, 89%, 1) 100%);
            filter: progid: DXImageTransform.Microsoft.gradient( startColorstr="#E9B7CE", endColorstr="#D3F3F1", GradientType=1 );};
</style>
<?php
        include 'connection.php';
        $p_id = $_REQUEST['p_id'];
        $sql = "select * from patient  where p_id = $p_id";
        $result = mysqli_query($connect,$sql);
        $result_array_row = mysqli_fetch_array($result);
        //child table data fetch for checkbox
        $child = "select * from patient_diseases where patient_id = $p_id";
        $child_array= mysqli_query($connect,$child);
        $p_d_array = array();
        while ( $child_result_row = mysqli_fetch_array($child_array)) {
            $p_d_array[]= $child_result_row['disease_id'];
        };

  ?>

<div class="d-flex justify-content-center ">
        <h1>Patient Update Form</h1> 
    </div>
<form action="patient_update2.php" method="post" class="row  g-3 border" enctype="multipart/form-data">
    <h3>Patient id: <?php echo $result_array_row['p_id']; ?> </h3>
    <input type="text" name="new_id" id="new_id" value="<?php echo $result_array_row['p_id']; ?>" style="display:none;">
  <div class="col-md-6">
    <label for="p_name" class="form-label">Name</label>
    <input type="text" class="form-control" name="p_name" id="p_name" value="<?php echo $result_array_row['p_name']; ?>">
    <small id="name_error"></small>
  </div>
  <div class="col-md-3">
    <fieldset>
      <legend>Gender<span>*</span></legend>
   <select name="p_gender" id="p_gender" class="form-label">
       <option class="form-control" <?php if ($result_array_row['p_gender']=='male') echo ' selected '; ?> value="male" id="Male">Male</option>
       <option class="form-control" <?php if ($result_array_row['p_gender']=='female') echo ' selected '; ?> value="female" id="Female">Female</option>
      </select>
    </fieldset>
  </div>
  <div class="col-md-3">
    <p>
      DATE OF BIRTH :<span>*</span><br><input style="height: 60%;" placeholder="dd/mm/yyyy" type="date" name="p_dob" id="date" value="<?php echo $result_array_row['p_dob']; ?>" required>
  </p>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="p_email" name="p_email" value="<?php echo $result_array_row['p_email']; ?>">
  </div>
  <div class="col-md-6">
    
  </div>
   
  
  <div class="col-md-6">
    <label for="p_phone" class="form-label">Phone</label>
    <input type="text" class="form-control" id="p_phone" name="p_phone" value="<?php echo $result_array_row['p_phone']; ?>">
  </div>
  <div class="col-md-6">
    <p>Disease <span>*</span></p>
    <?php 
        include 'connection.php';
        $sql_stmt = "SELECT * FROM `diseases`";
        $result = mysqli_query($connect,$sql_stmt);
        while ($row=mysqli_fetch_array($result)) {
    ?>
    <label><?php echo $row['disease_name']; ?></label>
    <input style="background-color:#e6ffff" type="checkbox" name="diseases[]"
    <?php
        if (count($p_d_array)>0 ){
            if(in_array($row['disease_id'],$p_d_array)) {
                echo ' checked ';
            }

        }
    ?>
    value="<?php echo $row['disease_id']; ?>"/>  
    <?php            
        }
    ?>
                                
  </div>
  
  <div class="col-6">
    <label for="p_address" class="form-label">Address</label>
    <input type="text" class="form-control" name="p_address" id="p_address" value="<?php echo $result_array_row['p_address']; ?>" placeholder="1234 Main St">
  </div>
  <div class="col-6">
    <label for="p_image" class="form-label">Patient Image</label>
    <input type="file" class="form-control" name="p_image" id="p_image" placeholder="image.jpg">
    <img src="patient_images/<?php echo $result_array_row['p_image']; ?>" alt="">
  </div>
  

  <div class="col-12 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Update</button>
  </div>
</form>

<script>
/*
$( document ).ready(function() {
    var w = getElementById("p_name").length;
   
    if(w < 3 || w > 10){
      
      var str = getElementById("p_name");
      var newStr = str.replace("", "Error");
      console.log(newStr); 

    }else{
        
    }
    
})*/
</script>
</body>
</html>