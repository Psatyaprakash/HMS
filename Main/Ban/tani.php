<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign Up</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" ></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.0/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body class="p-5 margin:10% text-light " style="background-image: url(https://wallpapers.com/images/hd/3000x3000-sevr6fa6817jkyg1.jpg)">
    <br></br>
    <div class="container">
  
<!--NEW-->

\   
<form action="" method="post">
<div class="row">
    <div class="col-md-6">
    <label>STUDENT NAME</label>
            <input type="text" class="col-md-8" name="student_name">
            <br><br>
            <p>
        DATE OF BIRTH :*<input placeholder="dd/mm/yyyy" type="date" name="dob" id="date" value="<?php if ($mode=='Edit') echo $row['dob']?>" required>
    </p>

    <label>Fathers Name</label>
    <input type="text" name="fathers_name">
    <br><br>
    <label>Mothers_name</label>
             <input type="text" name="mothers_name">
            <br></br>

            <label>gender</label>
            <select name="gender">
                <option value="Male" >Male</option>
                <option value="Female" >Female</option>
                <option value="other" >other</option>
            </select>
            <br></br>
            <label>contact</label>
              <input type="number" name="contact">
              <br><br>
              <label for="dtainsha143@gmail.com" class="form-label col-md-4" class="col-md-4">email</label>
              <input type="text" name="email" class="form-control is-invalid col-md-4" id="email">
               
               
               <div class="invalid-feedback">Please provide a valid email.</div>
    </div>

    <div class="col-md-6">
    <label>address</label>
              <input type="text" id="address" name="address">
<br><br>
              <label>nationality</label>
              <input type="text" name="nationality">
              <br><br>
              <label>religion</label>
              <input type="text" name="religion">
              <br><br>
              <label>caste</label>
                 <input type="radio" name="caste" id="GEN/OBC" value="general">GEN/OBC
                 <br></br>
                  <input type="radio" name="caste" id="SC" value="sc">SC
                  <br></br>
                  <input type="radio" name="caste" id="ST" value="st">ST
                  <br></br>
                  <input type="radio" name="caste" id="other" value="other">other
                  <br></br>

                  <label>state</label>
              <input type="text" id="state" name="state">
              <br><br>
              <label>course</label>
                 <select name="course">
                <option value="btech" >btech</option>
                <option value="mtech" >mtech</option>
                <option value="bca" >bca</option>
                <option value="mca" >mca</option>
            </select>

            <br></br>
              <div class=" mr-3">
                 <label>branch</label>
                 <select name="branch">
                <option value="cse" >cse</option>
                <option value="cst" >cst</option>
                <option value="cen" >cen</option>
                <option value="ece" >ece</option>
                <option value="eee" >eee</option>
                <option value="eie" >eie</option>
            </select>
<br> <br>
            <div>
                <label for="programming_language">programming_language</label>
                <br>
            <input type="checkbox" name="programming" id="1">
            <input type="checkbox" name="programming" id="2">
            <input type="checkbox" name="programming" id="3">
            <input type="checkbox" name="programming" id="4">
            </div>
            <br>
              
                 <label for="student_image" class="form-label">student_image</label>
                 <input class="form-control" type="file" id="student_image" disabled />

                 <br></br>
            
    </div>

</div>
<button class="btn btn-sucess" onClick="alert('successfully submitted')">submit</button>

</form>

</div>


</body>
</html>