<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>registration</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="h1.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">
  </head>
  <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
  <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
  <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
  <link rel="stylesheet" href="login.css">
  <body style="background:url(https://images.wallpapersden.com/image/download/grey-background-and-colorful-circle_66326_3840x2160.jpg); color:white;">
    <div class="container-fluid" >

         <nav class="navbar navbar-expand-lg navbar-light ">
               <a class="navbar-brand" href="index.html"><img src="img/logo.png" style="width:120px; height: 60px;"></a>
                 <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1">
                   <span class="navbar-toggler-icon"></span>
                 </button>

             <div class="collapse navbar-collapse" id="nav1">
               <ul class="navbar-nav ml-auto">
                 <li class="nav-item "><a href="#" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-home"></i>HOME</a></li>
                 <li class="nav-item "><a href="club.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-home"></i>CLUBS</a></li>
                   <li cla="nav-item"><a href="about.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-user"></i>ABOUT</a></li>


               <li class="nav-item"><a href="#" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>

               </ul>

            </div>
         </nav>


<div class="container login-container">
  <?php
      require('db.php');
      // If form submitted, insert values into the database.
      if (isset($_REQUEST['username'])){
              // removes backslashes
       $username = stripslashes($_REQUEST['username']);
              //escapes special characters in a string
       $username = mysqli_real_escape_string($con,$username);
       $uname = stripslashes($_REQUEST['uname']);
       $uname = mysqli_real_escape_string($con,$uname);
       $email = stripslashes($_REQUEST['email']);
       $email = mysqli_real_escape_string($con,$email);
       $password = stripslashes($_REQUEST['password']);
       $password = mysqli_real_escape_string($con,$password);
       $dob = stripslashes($_REQUEST['date']);
       $dob = mysqli_real_escape_string($con,$dob);
       $gender = stripslashes($_REQUEST['optradio']);
       $gender = mysqli_real_escape_string($con,$gender);
       $sem = stripslashes($_REQUEST['optradio2']);
       $sem = mysqli_real_escape_string($con,$sem);
       $club = stripslashes($_REQUEST['club']);
       $club = mysqli_real_escape_string($con,$club);
       $trn_date = date("Y-m-d H:i:s");
              $query = "INSERT into `users` (username,uname, email,password,dob,gender,sem,club)
      VALUES ('$username','$uname','$email', '$password', '$dob','$gender','$sem', '$club')";
              $result = mysqli_query($con,$query);
              if($result){
                  echo "<div class='container'>
      <h3>You are registered successfully.</h3>
      <br/>Click here to <a href='login.php'>Login</a></div>";
              }
          }else{
  ?>
            <div class="row">
                <div class="col-md-6 login-form-1">
                    <h3 style="color:white;">REGISTRATION</h3>
                    <form>
                        <div class="form-group">
                            <input type="text" class="form-control" name="username" placeholder="Your USN*" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="uname" placeholder="Your Name*" value="" required />
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" name="email" placeholder="Email*" value=""  required/>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control" name="password" placeholder="Password*" value="" required />
                        </div>

                        <div class="form-group">
                            <input type="date" class="form-control" name="date"placeholder="Date of Birth*" value="" required/>
                        </div>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio1">Gender <br>
                            <input type="radio" class="form-check-input" id="radio1" name="optradio" value="option1">Male
                            <input type="radio" class="form-check-input" id="radio2" name="optradio" value="option2">Female
                          </label>
                        </div>

                        <br><br>
                        <div class="form-check-inline">
                          <label class="form-check-label" for="radio3">Semester <br>
                            <input type="radio" class="form-check-input" id="radio3" name="optradio2" value="option3">Sem 3rd
                            <input type="radio" class="form-check-input" id="radio4" name="optradio2" value="option4">Sem 6th
                          </label>
                        </div>
                        <br><br>
                        <div class="form-group">
                            <input type="text" class="form-control" name="club" placeholder="Club*" value="" required/>
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Register" />
                        </div>


                    </form>
                  <?php } ?>
                </div>
                <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
            <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
            <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

              </body>
            </html>
