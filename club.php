<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>Clubs</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
    <link rel="stylesheet" type="text/css" href="h1.css">
  <link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,900" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css" integrity="sha384-lZN37f5QGtY3VHgisS14W3ExzMWZxybE1SJSEsQp9S+oqd12jhcu+A56Ebc1zFSJ" crossorigin="anonymous">
  <link href="https://fonts.googleapis.com/css?family=Roboto:100,300,400,500,700" rel="stylesheet">

  </head>
  <body>
    <div class="container-fluid" style="background: url(img/sportbg.jpg); background-repeat: no-repeat; height:500px; background-size: cover;">

        <nav class="navbar navbar-expand-lg navbar-light ">
              <a class="navbar-brand" href="index.html"><img src="logo.png" style="width:120px; height: 60px;"></a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#nav1">
                  <span class="navbar-toggler-icon"></span>
                </button>

            <div class="collapse navbar-collapse" id="nav1">
              <ul class="navbar-nav ml-auto">
                <li class="nav-item "><a href="Hom1.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-home"></i>HOME</a></li>
                <li class="nav-item "><a href="club.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-home"></i>CLUBS</a></li>
                  <li cla="nav-item"><a href="about.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-user"></i>ABOUT</a></li>


              <li class="nav-item"><a href="logout.php" class="nav-link" style="color: #FFFFFF;"><i class="fas fa-sign-out-alt"></i>LOGOUT</a></li>

              </ul>

           </div>
        </nav>
      </div>
    <div class="container">



        <h1 class="display-3 text-center">Clubs</h1>
        <div class="text-center">
          <button type="button" name="button" onclick="myIt()" class="btn btn-success" style="background:white; color:black;">IT</button>
          <button type="button" name="button" onclick="myPhoto()" class="btn btn-success" style="background:white; color:black;">Photography</button>
          <button type="button" name="button" onclick="myArt()" class="btn btn-success" style="background:white; color:black;">Art</button>
          <button type="button" name="button" onclick="mySport()" class="btn btn-success" style="background:white; color:black;">Sports</button>
        </div>
        <hr>
          <div class="row" id="it">
            <h1 class="display-4">IT(club Activity)</h1>

            <p>The Information Technology (IT) Club provides students with opportunities to discuss various IT issues outside the classroom in order to create a greater appreciation for and understanding of technology. ... In addition to their own education, IT Club members strive to educate the masses on the use of technology</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/UEnZRNtVH3M" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="row"id="photo">
            <h1 class="display-4">Photography</h1>
            <p>The mission of the Photography Club is to provide a supportive environment for interested photography students to share their creativity, knowledge and passion for photography while attending College.  The club will hold regular meetings and discussions and organize events such as; photo-walks, field trips, museum and gallery visits, and lectures and workshops by visiting artists</p>
            <iframe width="560" height="315" src="https://www.youtube.com/embed/FA3ETgH3BMg" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>

          </div>
          <div class="row" id="art">
            <h1 class="display-4">Art</h1>
            <p>he Art Club focuses on the expression and the qualitative preoccupation of its members, with various creative activities, promoting, thus, the expression and creativity, and the enhancement of imagination. Many people usually use the term 'art' to refer exclusively to the art of painting. Nevertheless, our club combines painting with hand makings, expeditions (museums, galleries), excursions, and also meetings with artists. At the workshops of the club, one can discover hidden talents of oneself, and also escape from the daily routine!</p>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/Oz0-fPhuSaM" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>
          <div class="row" id="sport">
            <h1 class="display-4">Sports</h1>
            <p>A Sport Club is defined as a registered student organization that exists to promote and develop interest in a particular sport or physical activity. A club's focus may be recreational, instructional, competitive, or a combination of these types of activities based on its constitution</p>

            <iframe width="560" height="315" src="https://www.youtube.com/embed/aO9qvBIfgec" frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
          </div>


    </div>
    <script>
    $(document).ready(function() {
    $("#photo").hide();
    $("#art").hide();
    $("#sport").hide();
    });


    var x = document.getElementById("it");
    var y = document.getElementById("photo");
    var z = document.getElementById("art");
    var a = document.getElementById("sport");
    function myIt() {

      x.style.display="block";
      y.style.display="none";
      z.style.display="none";
      a.style.display="none";
    }
    function myPhoto() {

      x.style.display="none";
      y.style.display="block";
      z.style.display="none";
      a.style.display="none";
    }
    function myArt() {

      x.style.display="none";
      y.style.display="none";
      z.style.display="block";
      a.style.display="none";
    }
    function mySport() {

      x.style.display="none";
      y.style.display="none";
      z.style.display="none";
      a.style.display="block";
    }
    </script>
    <hr>
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
