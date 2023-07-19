<?php
	
	session_start();

  include("connection.php");
  include("function.php");
  include("backgPic.php");
  include ("header.php");
  
   if(!isset($_SESSION['user_id']))
  {
	  header("Location: logout.php");
  }
  
  if(isset($_POST['payment']))
  {
	  
	  //something was posted
	  $bk_date =$_POST['bkDate'];
	  $bk_timeIn =$_POST['timeIn'];
	  
	 
	  $query = "SELECT * FROM users ";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						$userId=$row["id"];
						
					}
				}
				$querySQL = "SELECT * FROM services_cart ";
				$result1 = mysqli_query($con, $querySQL);
				if(mysqli_num_rows($result1) > 0)
				{
					while($row = mysqli_fetch_array($result1))
					{
						$servId=$row["serv_id"];
						
					}
				}
				$servOffered= $_SESSION['wspot'];
				
			   //$servOffered=$values["servOffered"]
			   $bk_status="Pending";
			   
			   
              $query = "insert into booking(bk_date,bk_timeIn,bk_status,serv_id,user_id,sp_Id) values('$bk_date','$bk_timeIn','$bk_status','$servId','$userId','$servOffered')";

              mysqli_query($con, $query);
              header("Location:payment.php");
	   
             die;	   
  }
  
  
  
    
  
  ?>
  <html>
<head>
 

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
			background-color: blue;
			margin: auto;
			width:80%;
			padding: 20px;
		}
		
		.button {
		  border: none;
		  color: white;
		  padding: 15px 32px;
		  text-align: center;
		  text-decoration: none;
		  display: inline-block;
		  font-size: 16px;
		  margin: 4px 2px;
		  cursor: pointer;
		}

		.button {background-color: #4CAF50;}
		<?php
				$query = "SELECT * FROM users ";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						$name=$row["fullname"];
						$contact=$row["contacts"];
						$email=$row["email"];
					}
				}
				?>
		
	 </style>
	 <div id="box">
	    <form method = "post">
			<div style="font-size:20px;margin:10px;color:white;">Booking details</div><br><br>
		    <div style="font-size:15px;margin:7px;color:red;">Full Name</div>
		    <input id="text" type="text" name="FullName" value="<?php echo $name; ?>"/><br><br>
			
			<div style="font-size:15px;margin:7px;color:red;">Contact #</div>
			 <input id="text" type="text" name="Contact" value="<?php echo $contact; ?>"/><br><br>
			 
			  <div style="font-size:15px;margin:7px;color:red;">Email</div>
		    <input id="text" type="email" name="Email"value="<?php echo $email; ?>"/><br><br>
			
			
			
			  <div style="font-size:15px;margin:7px;color:red;">Wash Date</div>
		    <input type="date" name="bkDate"><br><br>
			
			
			
			<div style="font-size:15px;margin:7px;color:red;">Washing session</div>
            <select name="timeIn">   
            <option value='08:00:00'>08:00</option>
            <option value='09:00:00'>09:00</option>
            <option value='10:00:00'>10:00</option>
            <option value='11:00:00'>11:00</option>
            <option value='12:00:00'>12:00</option>
            <option value='13:00:00'>13:00</option>
            <option value='14:00:00'>14:00</option>
            <option value='15:00:00'>15:00</option>
            <option value='16:00:00'>16:00</option>
			<option value='17:00:00'>17:00</option>
            <option value='18:00:00'>18:00</option>
            </select><br/>
			
			
					
					
			
			<br/>
			<input id="button" type="reset" style="position:relative; left:0px;color:red;" value="Reset">
			
			  
			 <input id="button" type="submit" style="position:relative; left:20px;" name="payment">
			 <br><br>
		
		    
		</form>
			
	 
	 </div>
	




</body>
</html>

