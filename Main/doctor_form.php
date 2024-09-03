<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Doctor</title>

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

<div class="d-flex justify-content-center ">
        <h1>Doctor Registaration Form</h1> 
    </div>
<form action="doctor_details.php" method="post" class="row  g-3 border" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="firstname" class="form-label">First Name:</label>
    <input type="text" class="form-control" name="firstname" id="firstname">
    <small id="name_error"></small>
  </div>
  <div class="col-md-6">
    <label for="lastname" class="form-label">Last Name:</label>
    <input type="text" class="form-control" name="lastname" id="lastname">
    <small id="name_error"></small>
  </div>
  <div class="col-md-3">
    <div class="col-3">
        <label for="gender" required>Gender:</label>
    </div>
    <div class="col-9 p-3">
        <input type="radio" id="male" name="gender" value="male"/>Male
        <input type="radio" id="female" name="gender" value="female"/>Female
    </div>
  </div>
  <div class="col-md-3">
    <p>
      DATE OF BIRTH :<span>*</span><br><input style="height: 60%;" placeholder="dd/mm/yyyy" type="date" name="dob" id="dob" value="" required>
  </p>
  </div>

  <div class="col-md-6">
    <label for="mobile" class="form-label">Mobile No.</label>
    <input type="text" class="form-control" id="mobile" name="mobile">
  </div>

  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" class="form-control" id="email" name="email">
  </div>
  <div class="col-md-6">
    <label for="d_password" class="form-label">Password</label>
    <input type="password" class="form-control" id="d_password" name="d_password">
  </div>
   
  
  
  
  
  <div class="col-6">
    <label for="address" class="form-label">Address</label>
    <input type="text" class="form-control" name="address" id="address" placeholder="1234 Main St">
  </div>
  <div class="col-6">
    <label for="d_image" class="form-label">Doctor Image</label>
    <input type="file" class="form-control" name="d_image" id="d_image" placeholder="image.jpg">
  </div>
  

  <div class="col-12 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Sign in</button>
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