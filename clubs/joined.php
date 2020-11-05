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
VALUES ('$username', '$name', '$email', '$event')";
    $result = mysqli_query($con,$query);
    if($result){
        echo " Thanks for participating!";
      }
      else{
        echo "string";
      }


?>
