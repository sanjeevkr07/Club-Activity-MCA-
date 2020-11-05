<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>event form</title>
     <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="form.css">
  </head>
  <body>



    <div class="container-fluid" style="background: url(sportbg.jpg); background-repeat: no-repeat; height:600px; background-size: cover;">

        <nav class="navbar navbar-expand-lg navbar-light ">
              <a class="navbar-brand" href="index.html"><img src="logo.png" style="width:120px; height: 60px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1">
                  <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="nav1">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="hom1.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-home"></i>HOME</a></li>
                <li class="nav-item "><a href="hom1.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-home"></i>CLUBS</a></li>
                  <li cla="nav-item"><a href="about.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-user"></i>ABOUT</a></li>


              <li class="nav-item"><a href="news.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>

              </ul>

           </div>
        </nav>
      </div>



<div class="container">
                <?php
              require('db.php');
              // If form submitted, insert values into the database.
              if (isset($_REQUEST['usn'])){
                    // removes backslashes
              $usn = stripslashes($_REQUEST['usn']);
                    //escapes special characters in a string
              $usn = mysqli_real_escape_string($con,$usn);
              $name = stripslashes($_REQUEST['name']);
              $name = mysqli_real_escape_string($con,$name);
              $email = stripslashes($_REQUEST['email']);
              $email = mysqli_real_escape_string($con,$email);
              $event = stripslashes($_REQUEST['event']);
              $event = mysqli_real_escape_string($con,$event);

                    $query = "INSERT into `participants` (usn, name, email, event)
              VALUES ('$usn', '$name', '$email', '$event')";
                    $result = mysqli_query($con,$query);
                    if($result){
                        echo "<h1 class='display-4'>".$usn." Thanks for participating!</h1>";
                }
              }else{


              ?>













<h1 class="text-center display-4">Please fill the form!</h1>
<form action="" action="POST">
  <div class="form-group">
    <label for="usn">USN</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-arrow-circle-o-right"></i>
        </div>
      </div>
      <input id="usn" name="usn" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="name">Name</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-caret-square-o-right"></i>
        </div>
      </div>
      <input id="name" name="name" placeholder="Enter your name here!" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="email">Email</label>
    <div class="input-group">
      <div class="input-group-prepend">
        <div class="input-group-text">
          <i class="fa fa-address-card-o"></i>
        </div>
      </div>
      <input id="email" name="email" placeholder="abc@example.com" type="text" required="required" class="form-control">
    </div>
  </div>
  <div class="form-group">
    <label for="event">Select Event</label>
    <div>
      <select id="event" name="event" aria-describedby="eventHelpBlock" required="required" class="custom-select">

                  <?php
                  require('eventdb.php');
                  while($row1 = mysqli_fetch_array($result1)):;?>

                  <option value="<?php echo $row1[1];?>"><?php echo $row1[1];?></option>

                  <?php endwhile;?>

      </select>

      <span id="eventHelpBlock" class="form-text text-muted">Please select the event.</span>
    </div>
  </div>

  <div class="form-group">
    <button name="submit" type="submit" class="btn btn-primary">Submit</button>
  </div>
</form>
</div>
<?php } ?>
</body>
</html>
