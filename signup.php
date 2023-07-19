<?php
  session_start();
  include("connection.php");
  include("function.php");
  include("backgPic.php");
  
  
  if($_SERVER['REQUEST_METHOD'] == "POST")
  {
	  
	  //something was posted
	  $email = $_POST['email'];
	  $password = $_POST['password'];
	  $fullname =  $_POST['fullname'];
	  $Confirm_Password = $_POST['Confirm_Password'];
	  $address = $_POST['address'];
	 $contacts = $_POST['contacts'];
	  if(!empty($fullname) &&!empty($email) && !empty($password) && !is_numeric($email)&&!empty($Confirm_Password)/* && !empty($address) && !is_numeric($contacts)*/)
	  {
	    //save to database
		if($password==$Confirm_Password)
		 {
			 
			   $user_id = random_num(20);
              $query = "insert into users(user_id,email,password,fullname,Confirm_Password,address,contacts) values ('$user_id','$email',' $password','$fullname','$Confirm_Password','$address','$contacts')";

              mysqli_query($con, $query);
              header("Location: login.php");
	   
             die;	   
			
		 }
		else
		 {
			echo "Passwords don't match!!!";
		 }
		
	  }else
	  {
		  
		  echo "Please enter some valid information!";
	  }
  }
  

?>
<!DOCTYPE html>
<html>
<head>
 <?php include "header.php";?>
  <title> Signup </title>

</head>
  <body>
     <style type = "text/css">
	     
		 #text{
			 height: 25px;
			 border-radius: 5px;
			 padding: 4px;
			 border: solid thin #aaa;
			 width: 100%;
		 }
		 
		#button{
			padding: 10px;
			width: 100px;
			color: white;
			background-color: lightblue;
			border: none;
		}
		#box{
			background-color: grey;
			margin: auto;
			width:80%;
			padding: 20px;
		}
	 </style>
	 <div id="box">
	    <form method = "post">
			<div style="font-size:20px;margin:10px;color:white;">Create New Account</div><br><br>
		    <div style="font-size:15px;margin:7px;color:red;">Email</div>
		    <input id="text" type="text" name="email"><br><br>
			
			<div style="font-size:15px;margin:7px;color:red;">Password</div>
			 <input id="text" type="password" name="password"><br><br>
			 
			  <div style="font-size:15px;margin:7px;color:red;">Confirm Password</div>
		    <input id="text" type="password" name="Confirm Password"><br><br>
			
			
			  <div style="font-size:15px;margin:7px;color:red;">fullname</div>
		    <input id="text" type="text" name="fullname"><br><br>
			
			<div style="font-size:15px;margin:7px;color:red;">Contacts</div>
		    <input id="text" type="text" name="contacts"><br><br>
			
			<div style="font-size:15px;margin:7px;color:red;">Address</div>
		    <input id="text" type="text" name="address"><br><br>
			
			  <input id="button" type="submit" value="Signup"><br><br>
			 <a href = "Login.php">Click to Login</a><br><br>
		
		    
		</form>
			
	 
	 </div>
   
   </body>
</html>