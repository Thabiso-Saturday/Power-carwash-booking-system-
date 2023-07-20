<?php
	include("connection.php");
	//include("sideBar.php");
	
?>
<!DOCTYPE HTML>
<html>
<head>
<title>CWMS | Admin Dashboard</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Bootstrap Core CSS -->
<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<!-- Custom CSS -->
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<!-- Graph CSS -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- jQuery -->
<script src="js/jquery-2.1.4.min.js"></script>
<!-- //jQuery -->
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<!-- lined-icons -->
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
<!-- //lined-icons -->
</head> 
<body>
   <div class="page-container">
   <!--/content-inner-->
<div class="left-content">
	   <div class="mother-grid-inner">
<!--header start here-->
<?php include("header.php");?>
<!--header end here-->
		<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="..\logout.php">Home</a> <i class="fa fa-angle-right"></i></li>
            </ol>
<!--four-grids here-->
		<div class="four-grids">

			<a href="all-bookings.php" target="_blank">
					<div class="col-md-3 four-grid">
						<div class="four-agileits">
							<div class="icon">
									<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Total Bookings</h3>

								<?php $query1 = "SELECT bk_id from booking";
									$result = mysqli_query($con, $query1);
									$cnt=mysqli_num_rows($result)
									
										
									
									
					?>			<h4> <?php echo htmlentities($cnt);?> </h4>
				
								
							</div>
							
						</div>
					</div>
				</a>
<a href="new-booking.php" target="_blank">
					<div class="col-md-3 four-grid">
						<div class="four-agileinfo">
							<div class="icon">
								<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>New Bookings</h3>
							<?php $query2 = "SELECT bk_id from booking  where bk_status='Pending'";
									$result = mysqli_query($con, $query2);
									$newbookings=mysqli_num_rows($result)
					?>
								<h4><?php echo htmlentities($newbookings);?></h4>

							</div>
							
						</div>
					</div>
				</a>
		<a href="completed-booking.php" target="_blank">
					<div class="col-md-3 four-grid">
						<div class="four-wthree">
							<div class="icon">
							<i class="glyphicon glyphicon-list-alt" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Completed Bookings</h3>
									<?php $query3 = "SELECT  bk_id  from booking  where bk_status='Pending'";
									$result = mysqli_query($con, $query3);
									$completedbookings=mysqli_num_rows($result)					?>
								<h4><?php echo htmlentities($completedbookings);?></h4>
								
							</div>
							
						</div>
					</div>
</a>
	

		<div class="four-grids">
			<a href="managecar-washingpoints.php" target="_blank">
					<div class="col-md-3 four-grid">
						<div class="four-w3ls">
							<div class="icon">
								<i class="glyphicon glyphicon-folder-open" aria-hidden="true"></i>
							</div>
							<div class="four-text">
								<h3>Washing Spot</h3>
										<?php  $query4  = "SELECT sp_Name from wspot";
										$result = mysqli_query($con, $query4);
										$washingpoints=mysqli_num_rows($result)
					?>
								<h4><?php echo htmlentities($washingpoints);?></h4>
								
							</div>
							
						</div>
					</div>
</a>

					<div class="clearfix"></div>
				</div>
<!--//four-grids here-->


<div class="inner-block">

</div>

</div>
</div>

			<!--/sidebar-menu-->
				<?php include("sidebarmenu.php");?>
							  
</body>
</html>
