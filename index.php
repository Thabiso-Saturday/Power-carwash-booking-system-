<?php
  session_start();

  include("connection.php");
  include("function.php");
  include("backgPic.php"); 
  include "header.php";
  
   if(!isset($_SESSION['user_id']))
  {
	  header("Location: logout.php");
  }

?>

<!DOCTYPE html>
<html>

<head>
<title>PowerCHome</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta content="text/html; charset=iso-8859-2" http-equiv="Content-Type">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<style>
.mySlides {display:none;}
</style>
</head>

<body>

<br><br>
  

<div style="border:3px solid #5cb85c;width=1100;height=500; background-color:white; border-radius:5px; padding:16px; align="center";" >
 
  <img class="mySlides" src="./Pictures/Pic1.jpg"class="img-responsive" style="width:100%">
  <img class="mySlides" src="./Pictures/Pic4.jpg"class="img-responsive" style="width:100%">
   <img class="mySlides" src="./Pictures/Pic2.jpg"class="img-responsive" style="width:100%">
   <img class="mySlides" src="./Pictures/Pic3.jpg"class="img-responsive" style="width:100%">
     <img class="mySlides" src="./Pictures/Pic5.jpg"class="img-responsive" style="width:100%">
	   <img class="mySlides" src="./Pictures/Pic7.jpg"class="img-responsive" style="width:100%">
	     <img class="mySlides" src="./Pictures/Pic6.jpg"class="img-responsive" style="width:100%">
   
</div>

<script>
var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 4000); // Change image every 2 seconds
}
</script>

</body>
<footer>
	<head>
    <meta charset="utf-8">
    <title>Customize the scroll-bar</title>
  
    <style media="screen">
        body {
            background-image: linear-gradient(
                to right, dodgerblue, darkblue);
        }
    </style>
</head>
  
<body>
    <center>
        <h1 style="color:lawngreen;">
           Our location
        </h1>
          
        <div>
            <!-- Google Map Copied Code -->
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d114877.97367081196!2d29.129969651144297!3d-25.871561441970268!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x1eeaed4f5621cac9%3A0x2566efbdc52aefd6!2sEmalahleni!5e0!3m2!1sen!2sza!4v1666226869752!5m2!1sen!2sza" width="1100" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
    </center>
</body>
</footer>
</html>


