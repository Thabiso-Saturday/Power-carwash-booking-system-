<?php
	
	session_start();

  include("connection.php");
  include("function.php");
  include ("header.php");
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
<HTML>
<HEAD>
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
		</style>

</HEAD>
<BODY>
		<div style="clear:both"></div>
			<br />
			<h3 style=" background-color:white"; >Service Details</h3>
			<div class="table-responsive">
				<table class="table table-bordered" style=" background-color:white"; >
					<tr>
						<td width="10%"><h3>Vehicle Name</h3></td>
						<td width="10%"><h3>Quantity</h3></td>
						<td width="10%"><h3>Price</h3></td>
						<td width="10%"><h3>Total</h3></td>
						<td width="15%"><h3>Action</h3></td>
					</tr>
					<?php
					if(!empty($_SESSION["shopping_cart"]))
					{
						$total = 0;
						foreach($_SESSION["shopping_cart"] as $keys => $values)
						{
					?>
					<tr>
						<td><?php echo $values["item_name"]; ?></td>
						<td><?php echo $values["item_quantity"]; ?></td>
						<td>R <?php echo $values["item_price"]; ?></td>
						<td>R <?php echo number_format($values["item_quantity"] * $values["item_price"], 2);?></td>
						<td><a href="Cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
					</tr>
					<?php
							$total = $total + ($values["item_quantity"] * $values["item_price"]);
						}
					?>
					<tr>
						<td colspan="3" align="right"><h2>Total</h2></td>
						<td align="right">R <?php echo number_format($total, 2); ?></td>
						<td></td>
					</tr>
					
					<?php
					}
					?>
						
				</table>
			</div>
		</div>
	</div>
	<br />
	
	<form action="booking.php" method="post">
		
			
			

 <input id="button" type="submit" style="position:relative; left:20px;" value="Book"><br><br>	
	</form>
	
	</body>
</html>
</BODY>
</HTML>






