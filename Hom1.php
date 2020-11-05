<?php
include("auth.php");
?>
<!DOCTYPE html>
<html>
<head>
	<title>Club Activity</title>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
	<link rel="stylesheet" type="text/css" href="h1.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

</head>
<body>


	<div class="container-fluid" style="background: url(img/image4.jpg); background-repeat: no-repeat; height:300px; background-size: cover;">

				<nav class="navbar navbar-expand-lg navbar-light ">
		  				<a class="navbar-brand" href="index.html"><img src="img/logo.png" style="width:120px; height: 60px;"></a>
							  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1">
							    <span class="navbar-toggler-icon"></span>
							  </button>

		  			<div class="collapse navbar-collapse" id="nav1">
					    <ul class="navbar-nav ml-auto">
					    	<li class="nav-item "><a href="hom1.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-home"></i>HOME</a></li>
					    	<li class="nav-item "><a href="club.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-home"></i>CLUBS</a></li>
					        <li cla="nav-item"><a href="about.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-user"></i>ABOUT</a></li>


							<li class="nav-item"><a href="logout.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>

					    </ul>

		 			 </div>
				</nav>





			<div class="row">

				<div class="jumbotron">
							  <h1 class="display-1" style="color:#FFFFFF;">CLUB ACTIVITY</h1>

			 </div>

			</div>
    </div><br><br>



    <div class="container">
			<div class="form">
			<p class="text-center" style="font-size:30px;">Welcome <?php echo $_SESSION['uname']; ?>!</p>

			</div>
         <div class="row">
            <div class="col-md-4">
			     <div class="row">

                        <div class="row" style="height:250px; width: 100%; background: url(img/upon.jpg); margin-bottom: 10px; margin-top: 5px;">
                             <div class="col-md-6">
                                    <h3 style="color:black;">Ongoing Events</h3>
                                    <?php
                                    require 'connect.php';
                                    $sql="SELECT ename, edate as create_date FROM event WHERE YEARWEEK(edate) = YEARWEEK(NOW()) ORDER BY `edate` DESC";
                                    $result = $conn->query($sql);

									if ($result->num_rows > 0) {
									    // output data of each row
									    while($row = $result->fetch_assoc()) {
									        echo "<i class='fa fa-check-circle-o'></i> <a href='#' data-target='#myModalp' data-toggle='modal' style='color:black;'>".$row["ename"]."</a>"."<br>";
									    }
									} else {
									    echo "0 results";
									}
									$conn->close();
									 ?>
									 <div class="modal fade" id="myModalp" role="dialog">
										<div class="modal-dialog">
											<div class="modal-content">
												<div class="modal-header">
											        <h5 class="modal-title">info</h5>
											        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
											          <span aria-hidden="true">&times;</span>
											        </button>
											       </div>
												<div class="modal-body" >
													<p>Thankyou for your interest!!

													</p>
													<a class="btn btn-primary" href="form.php">Interested?</a><p id="demo"></p>


												</div>

											</div>

										</div>

									</div>




                            </div>
                        </div>

                </div></br>
                <div class="row">
                    <div class="row" style="height:250px; width: 100%; background: url(img/upon.jpg); margin-top:0px; ">

                            <h3 style="color:black;">Upcoming Events</h3>
														<ul style="width:100%">
															<li style="font-size:15px;">HACKATHON 5.0</li>
															<li style="font-size:15px;">DANCE COMPETITION</li>
															<li style="font-size:15px;">CODING COMPETITION</li>
															<li style="font-size:15px;">INTRA-COLLEGE CRICKET COMPETITION</li>
															<li>PHOTOGRAPHY CONTEST</li>
															<li>MEHENDI AND NAIL-ART</li>
															<li>NOVEL WRITING </li>
															<li>IT QUIZ</li>
														</ul>
                        </div>
                    </div>






			     </div>


			<br><br>
			<hr class="my-4">
            <div class="col-md-8">
                <div id="demo" class="carousel slide" data-ride="carousel">
                     <ul class="carousel-indicators">
					    <li data-target="#demo" data-slide-to="0" class="active"></li>
					    <li data-target="#demo" data-slide-to="1"></li>
					    <li data-target="#demo" data-slide-to="2"></li>
					    <li data-target="#demo" data-slide-to="3"></li>
					 </ul>

					 <div class="carousel-inner">
					     <div class="carousel-item active">
					        <img src="img/pic.jpg" alt="Los Angeles" style="width:100%; height:500px;">
					     </div>
					     <div class="carousel-item">
					        <img src="img/code1.jpg" alt="Chicago" style="width:100%; height:500px;">
					     </div>
					     <div class="carousel-item">
					       <img src="img/i11.jpg" alt="Chicago" style="width:100%; height:500px;">
					     </div>
					     <div class="carousel-item">
					      <img src="img/s11.jpg" alt="New York" style="width:100%; height:500px;">
					     </div>
					 </div>

                 </div>
            </div>
    </div>
	</div>

            <hr class="my-4">


 <footer class="container-fluid bg-grey py-5">
<div class="container">
   <div class="row">
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 ">
               <div class="logo-part">
                  <img src="img/logo.png" class="w-50 logo-footer" >
                  <p>DAYANANDA SAGAR COLLEGE OF ENGINEERING, SHAVIGE MALLESHWARA HILLS, KUMARSWAMY LAYOUT, BANGALORE - 78</p>
                  <p></p>
               </div>
            </div>
            <div class="col-md-6 px-4">
               <h6> About Club Activity</h6>

               <a href="about.php" class="btn-footer"> More Info </a><br>
               <a href="contact.php" class="btn-footer"> Contact Us</a>
            </div>
         </div>
      </div>
      <div class="col-md-6">
         <div class="row">
            <div class="col-md-6 px-4">
               <h6>Links</h6>
               <div class="row ">
                  <div class="col-md-6">
                     <ul>
                        <li> <a href="hom1.php"> Home</a> </li>
                        <li> <a href="about.php"> About</a> </li>
                        <li> <a href="Hom1.php"> Clubs</a> </li>
                        <li> <a href="contact.php"> Contact</a> </li>
                     </ul>
                  </div>
                  <div class="col-md-6 px-4">
                     <ul>
                        <li> <a href="#"> Cab Faciliy</a> </li>
                        <li> <a href="#"> Fax</a> </li>
                        <li> <a href="#"> Terms</a> </li>
                        <li> <a href="#"> Policy</a> </li>
                        <li> <a href="#"> Refunds</a> </li>
                        <li> <a href="#"> Paypal</a> </li>
                     </ul>
                  </div>
               </div>
            </div>
            <div class="col-md-6 ">
               <h6> Newsletter</h6>
               <div class="social">
                  <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                  <a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a>
               </div>
               <form class="form-footer my-3">
                  <input type="text"  placeholder="search here...." name="search">
                  <input type="button" value="Go" >
               </form>
               <p>That's technology limitation of LCD monitors</p>
            </div>
         </div>
      </div>
   </div>
</div>



        <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

   </body>
</html>
