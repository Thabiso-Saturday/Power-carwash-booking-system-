
<!DOCTYPE html>
<html>

<meta name="viewport" content="width=device-width, initial-scale=1">


<style>
body {
  font-family: Arial;
  margin: 0;
}

/* Header/Logo Title */
.header {
  padding: 1%;
  text-align: right;
  background: #1abc9c;
  color: white;
  font-size: 30px;
  
}


/* Page Content */
.content {padding:20px;}

</style>
</head>
<body>

<?php if(isset($_SESSION['user_id']))
		{
		
 ?>

<div class="header">
  <h2 style="font-family: Cooper; color: maroon; text-align: left;">POWER CAR-WASH</h2>

  <button><a href="Cart.php">Cart</a></button>
 
  <div>
  
  <button><a href="index.php">Home</a></button>
  <button><a href="services.php" >Services</a></button>
  <button><a href="about.php">About</a></button>
  <button><a href="logout.php">logout</a></button>
  </div>
</nav>
</div>
<?php
	}
	else{
?>

	<div class="header">
  <h2 style="font-family: Cooper; color: maroon; text-align: left;">POWER CAR-WASH</h2>

  
 
  <div>
  
  <button><a href="index.php">Home</a></button>
  
  <button><a href="about.php">About</a></button>
  <button><a href="login.php">login</a></button>
  </div>
</nav>
</div>

<?php
	}
	
?>


</body>
</html>

<body>

</body>
</html>