<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>Doctor Sign-up</title>
        <link rel="stylesheet" href="assets/css/responsiveRegistration.css">
        <script type="text/javascript" lang="javascript" src="ssets/js/responsiveRegistaration.js"></script>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-4bw+/aepP/YC94hEpVNVgiZdgIC5+VKNBQNGCHeKRQN+PtmoHDEXuppvnDJzQIu9" crossorigin="anonymous"> <link rel="stylesheet" type="text/css" href="assets/css/style.css" />
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js" integrity="sha384-HwwvtgBNo3bZJJLYd8oVXjrBZt8cqVSpeBNS5n7C8IVInixGAoxmnlMuBnhbgrkm" crossorigin="anonymous"></script>
 </head>
       
    <body>

        <header id="menu-jk">
    
            <div id="nav-head" class="header-nav">
                <div class="container">
                    <div class="row">
                        <div class="col-lg-2 col-md-3  col-sm-12" style="color:#000;font-weight:bold; font-size:42px; margin-top: 1% !important;">HMS
                           <a data-toggle="collapse" data-target="#menu" href="#menu" ><i class="fas d-block d-md-none small-menu fa-bars"></i></a>
                        </div>
                        <div id="menu" class="col-lg-8 col-md-9 d-none d-md-block nav-item">
                            <ul>
                                <li><a href="#">Home</a></li>
                                <li><a href="#services">Services</a></li>
                                <li><a href="#about_us">About Us</a></li>
                                <li><a href="#gallery">Gallery</a></li>
                                <li><a href="#contact_us">Contact Us</a></li>
                                <li><a href="#logins">Logins</a></li>  
                            </ul>
                        </div>
                        <div class="col-sm-2 d-none d-lg-block appoint">
                            <a class="btn btn-success" href="sign-up.html">Book an Appointment</a>
                        </div>
                    </div>
    
                </div>
            </div>
        </header>
<!--Form starts here-->
        <h1>Doctor Registaration Form</h1>
       <div class="row">
            <div class="col-md-3"></div>
            <div class="container m-5 p-5">
            <form action="doctor_details.php" method="post">
            
            <div class="row">
                <div class="col-md-3">
                    <label for="fname">First Name:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="fname" name="firstname" placeholder="Enter your first name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="lname">Last Name:</label>
                </div>
                <div class="col-md-3">
                    <input type="text" id="lname" name="lastname" placeholder="Enter your last name">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="email">Email:</label>
                </div>
                <div class="col-md-6">
                    <input type="email" id="email" name="email" placeholder="it should contain @,.">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="mobile">Mobile:</label>
                </div>
                <div class="col-md-6">
                    <input type="tel" id="mobile" name="mobile" placeholder="only 10 digits are allowed">
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <label for="gender" required>Gender:</label>
                </div>
                <div class="col-90 p-3">
                    <input type="radio" id="male" name="gender" value="male"/>Male
                    <input type="radio" id="female" name="gender" value="female"/>Female
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="dob">Date Of Birth:</label>
                </div>
                <div class="col-md-6">
                    <input type="Date" id="dob" name="dob">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="address">Address:</label>
                </div>
                <div class="col-md-9">
                    <textarea name="address" id="address" cols="3" rows="1"></textarea>
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="city">City:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="city" name="city" maxlength="10">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="pincode">Area PIN:</label>
                </div>
                <div class="col-md-6">
                    <input type="number" id="pin" name="pin" maxlength="6">
                </div>
            </div>
            <div class="row">
                <div class="col-md-3">
                    <label for="state">State:</label>
                </div>
                <div class="col-md-6">
                    <input type="text" id="state" name="state">
                </div>
            </div>
           
            <div class="row">
                <div class="col-md-3">
                    <label for="password">Password:</label>
                </div>
                <div class="col-md-6">
                    <input type="password" id="password" name="password" maxlength="8">
                </div>
            </div>
            <br>
            <div class="row">
                <input type="submit" value="Registered" onclick="SaveDoctorDetails()">
            </div> 
            </form> 
        </div>  
            <div class="col-md-3"></div>
       </div>
    </body>
</html>
