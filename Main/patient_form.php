<?php session_start();?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient</title>

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
        <h1>Patient Login Form</h1> 
    </div>
<form action="patient_login.php" method="post" class="row  g-3 border" enctype="multipart/form-data">
  <div class="col-md-6">
    <label for="p_name" class="form-label">Name</label>
    <input type="text" onclick="validateName()" class="form-control" name="p_name" id="p_name">
    <small id="name_error"></small>
  </div>
  <div class="col-md-3">
    <fieldset>
      <legend>Gender<span>*</span></legend>
   <select name="p_gender" id="p_gender" class="form-label" required>
       <option class="form-control" value="1" id="Male">Male</option>
       <option class="form-control" value="2" id="Female">Female</option>
      </select>
    </fieldset>
  </div>
  <div class="col-md-3">
    <p>
      DATE OF BIRTH :<span>*</span><br><input style="height: 60%;" placeholder="dd/mm/yyyy" type="date" name="p_dob" id="date" value="" required>
  </p>
  </div>
  <div class="col-md-6">
    <label for="inputEmail4" class="form-label">Email</label>
    <input type="email" onclick="validateEmail()" class="form-control" id="p_email" name="p_email">
    <small id="email_error"></small>
  </div>
  <div class="col-md-6">
    <label for="password" class="form-label">Password</label>
    <input type="password" onclick="validatePass()" class="form-control" id="p_password" name="p_password">
    <small id="pass_error"></small>
  </div>
   
  
  <div class="col-md-6">
    <label for="p_phone" class="form-label">Phone</label>
    <input type="text" onclick="validatePhone()" class="form-control" id="p_phone" name="p_phone">
    <small id="phone_error"></small>
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
    <input style="background-color:#e6ffff" type="checkbox" name="diseases[]" value="<?php echo $row['disease_id']; ?>"/>  
    
    <?php            
        }
    ?>
                                
  </div>
  
  <div class="col-6">
    <label for="p_address" class="form-label">Address</label>
    <input type="text" class="form-control" name="p_address" id="p_address" placeholder="1234 Main St">
  </div>
  <div class="col-6">
    <label for="p_image" class="form-label">Patient Image</label>
    <input type="file" class="form-control" name="p_image" id="p_image" placeholder="image.jpg">
  </div>
  

  <div class="col-12 d-flex justify-content-center">
    <button type="submit" class="btn btn-primary">Sign in</button>
  </div>
</form>

<script>

function validateName() {
    let p_name = document.getElementById("p_name").value;
    let first_letter = p_name.substring(0,1);
    if(isNaN(first_letter)){
        document.getElementById("name_error").innerHTML=""
    }else{
        document.getElementById("name_error").innerHTML='name cannot be in number'
    }
}

function validateEmail(){
  let p_email = document.getElementById("p_email");
  var mailformat = /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/;
if(p_mail.value.match(mailformat)){
        document.getElementById("email_error").innerHTML=""
    }else{
        document.getElementById("email_error").innerHTML='include @ in your email'
    }

}
function validatePass(){
      let pass = document.getElementById("p_password").val();
      if(pass > 8){
        document.getElementById("pass_error").innerHtml=""
      }else{
        document.getElementById("pass_error").innerHtml="Password must contain atleast 8 characters"
      }
}

</script>
</body>
</html>