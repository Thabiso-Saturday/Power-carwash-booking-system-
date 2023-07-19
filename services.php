<?php
  session_start();

  include("connection.php");
  include("function.php");
 
  include("backgPic.php");
  if(!isset($_SESSION['user_id']))
  {
	  header("Location: logout.php");
  }
  
  if(isset($_POST["add_to_cart"]))
{
	if(isset($_SESSION["shopping_cart"]))
	{
		$item_array_id = array_column($_SESSION["shopping_cart"], "item_id");
		if(!in_array($_GET["id"], $item_array_id))
		{
			$count = count($_SESSION["shopping_cart"]);
			$item_array = array(
				'item_id'			=>	$_GET["id"],
				'item_name'			=>	$_POST["hidden_name"],
				'item_price'		=>	$_POST["hidden_price"],
				'item_quantity'		=>	$_POST["quantity"]
			);
			$_SESSION["shopping_cart"][$count] = $item_array;
		}
		else
		{
			echo '<script>alert("Item Already Added")</script>';
		}
	}
	else
	{
		$item_array = array(
			'item_id'			=>	$_GET["id"],
			'item_name'			=>	$_POST["hidden_name"],
			'item_price'		=>	$_POST["hidden_price"],
			'item_quantity'		=>	$_POST["quantity"]
		);
		$_SESSION["shopping_cart"][0] = $item_array;
	}
}

if(isset($_GET["action"]))
{
	if($_GET["action"] == "delete")
	{
		foreach($_SESSION["shopping_cart"] as $keys => $values)
		{
			if($values["item_id"] == $_GET["id"])
			{
				unset($_SESSION["shopping_cart"][$keys]);
				echo '<script>alert("Item Removed")</script>';
				echo '<script>window.location="services.php"</script>';
			}
		}
	}
}

?>
<?php include "header.php";?>



<!DOCTYPE html>
<html>
	
	<head>
	
		<title>Service</title>
		
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css" />
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
		<style>
			

				.card {
				  box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
				  margin: 8px;
				}

				.about-section {
				  padding: 50px;
				  text-align: center;
				  background-color: #474e5d;
				  color: white;
				}
			.column {
				  float: left;
				  width: 33.3%;
				  margin-bottom: 16px;
				  padding: 0 8px;
				}
			.container::after, .row::after {
				  content: "";
				  clear: both;
				  display: table;
				}
				.container::after, .row::after {
				  content: "";
				  clear: both;
				  display: table;
				}

				.title {
				  color: grey;
				}
		</style>
		
	</head>
	<body>
		<form action="services.php" method="post" >
		<center>
		<div style="font-size:18px;margin:10px;color:white;"><h2>Select Branch</h2></div>
			<select style="width:50%; height:50px" name="wSpot">
			<?php
				$query = "SELECT * FROM wspot";
				$result = mysqli_query($con, $query);
				if(mysqli_num_rows($result) > 0)
				{
					while($row = mysqli_fetch_array($result))
					{
						$spotId=$row["sp_Id"];
				?>
			   
						<option style="font-size:15px;margin:7px;color:red;" value=<?php echo $spotId;?>><?php echo $row["sp_Name"];?></option>
						
			
			</div>
			<?php
					}
				}
			?>
			</select>
			<input style="border-radius: 20px;width:50px; height:50px" type="submit" name="service" value="go"/>
			</center>
			</form>
	
		<br />
		<div class="container">
			
			<br />
			
			<br /><br />
			<?php
				
				
					if(isset($_POST["service"]))
					{
						$_SESSION['wspot']=$_POST["wSpot"];
						$servOffered=$_SESSION['wspot'];
						$query = "SELECT * FROM services_cart c, wspot ws, service s where c.sp_Id=ws.sp_Id and c.sType_id=s.sType_id and c.sp_Id='$servOffered' order by c.sType_id ";
						$result = mysqli_query($con, $query);
						if(mysqli_num_rows($result) > 0)
						{
							while($row = mysqli_fetch_array($result))
							{
						
				?>
			
				<form method="post" action="Cart.php?action=add&id=<?php echo $row["serv_id"]; ?>">
				
				 <div class="row">
					<div class="column" style="border:3px solid #5cb85c; background-color:white; border-radius:5px; padding:16px;" align="center">
						
			
					
						<h2 class="text-info"><?php echo $row["serv_type"]; ?></h2>
						<?php $serv=$row["serv_type"] ;?>
						<img src="./Pictures/<?php echo $row["serv_image"]; ?>" class="img-responsive" /><br />
						<h4 class="text-info"><?php echo $row["serv_descrip"]; ?></h4>
						
						
						
						
						<h4 class="text-info"><?php echo $row["vehicle_type"]." = R ".$row["serv_price"]; ?></h4>
						<!--h4 class="text-danger">R <?php// echo $row["serv_price"]; ?></h4-->

						<input  type="text" name="quantity" value="1" class="form-control" />
						
						<input type="hidden" name="hidden_name" value="<?php echo $row["vehicle_type"]; ?>" />

						<input type="hidden" name="hidden_price" value="<?php echo $row["serv_price"]; ?>" />
						<input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
						
						
				   </div>
				   </div>
				   
						
			
					
				</form>
				
			
			<?php
						}
					
					}
				}
			?>
			
	</body>
</html>