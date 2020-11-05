
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Login</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link rel="stylesheet" type="text/css" href="h1.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">


<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link rel="stylesheet" href="login.css">
</head>
<body style="background:url(https://images.wallpapersden.com/image/download/grey-background-and-colorful-circle_66326_3840x2160.jpg);color:white;">
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
                    session_start();
                    // If form submitted, insert values into the database.
                    if (isset($_POST['username'])){
                          // removes backslashes
                    $username = stripslashes($_REQUEST['username']);
                          //escapes special characters in a string
                    $username = mysqli_real_escape_string($con,$username);
                    $password = stripslashes($_REQUEST['password']);
                    $password = mysqli_real_escape_string($con,$password);


                //Checking is user existing in the database or not
                          $query = "SELECT * FROM `users` WHERE username='$username'
                    and password='$password'";

                    $result = mysqli_query($con,$query) or die(mysql_error());
                    $rows = mysqli_num_rows($result);
                          if($rows==1){
                       $_SESSION['username'] = $username;
                       $_SESSION['uname']= $rows[1];
                              // Redirect user to index.php
                       header("Location: Hom1.php");
                           }else{
                    echo "<div class='container'>
                    <h3>Username/password is incorrect.</h3>
                    <br/>Click here to <a href='login.php'>Login</a></div>";
                    }
                      }else{
                    ?>
                    <div class="col-md-6 login-form-2">
                    <h1>Log In</h1>
                    <form action="" method="post" name="login">

                    <div class="form-group">
                      <input type="text"  name="username" class="form-control" placeholder="Username*" value="" required/>
                    </div>
                    <div class="form-group">
                      <input type="password" name="password" class="form-control" placeholder="Password *" value=""  required/>
                    </div>
                        <div class="form-group">
                            <input type="submit" class="btnSubmit" value="Login" />
                        </div>
                    </form>
                    <div class="form-group">

                            <a href="#" class="ForgetPwd" value="Login">Forget Password?</a><br><br>
                            <a href="registration.php" class="ForgetPwd">Register Here!</a>
                        </div>
                    <?php } ?>

                </div>
            </div>
        </div>
        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
      </body>
      </html>
