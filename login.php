<?php
  session_start();
  
  
  include("connection.php");
  include("function.php");
  include("backgPic.php");
  
?>
<!DOCTYPE html>
<html>
<head>

  <title> Login </title>
  <?php include "header.php";?>

</head>
  <body>
     <style type = "text/css">
	     
		 #text{
			 height: 25px;
			 border-radius: 5px;
			 padding: 4px;
			 align: right;
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
			width: 300px;
			padding: 20px;
			position:absolute; right: 0px;
			border-radius: 10px;
		}
		
	 </style>
	 <div id="box">
	    <form method = "post">
			
			<div style="font-size:15px;margin:7px;color:red;Text-align:center;">Email</div>
		    <input id="text" type="text" name="email"><br><br>
			<div style="font-size:15px;margin:7px;color:red;Text-align:center;">Password</div>
			 <input id="text" type="password" name="password"><br><br>
			  <input id="button" type="submit" style="position:relative; left:100px;" value="Login"><br><br>
			 <a href = "signup.php"> Create Account<a/><br><br>

			 <?php 
			 
		if($_SERVER['REQUEST_METHOD'] == "POST")
  {
	  
	  //something was posted
	  $email = $_POST['email'];
	  $pass = $_POST['password'];
	  
	  if(!empty($email) && !empty($pass) && !is_numeric($email))
	  {
	    //read from database
		
        $query = "select * from users where email = '$email' limit 1";
		
		$result = mysqli_query($con, $query);
		
		if($result)
		{
			if($result && mysqli_num_rows($result) > 0)
			{
				$user_data = mysqli_fetch_assoc($result);
				if($user_data['password'] == $pass)
				{	if($user_data['user_type']=="user")
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: index.php"); 
						die;
					}
					else if($user_data['user_type']=="admin")
					{
						$_SESSION['user_id'] = $user_data['user_id'];
						header("Location: Admin\\adminHome.php"); 
						die;
					}
					
				}
			}
		}
		echo "wrong email or password!";
			   
	  }else
	  {
		  
		 echo $errCred= "wrong email or password!";
	  }
  }  ?>
		
		    
		</form>
			
	 
	 </div>
   
   </body>
</html>