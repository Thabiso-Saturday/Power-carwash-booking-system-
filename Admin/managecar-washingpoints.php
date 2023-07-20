<?php
session_start();

include("connection.php");
if(strlen($_SESSION['user_id'])==0)
	{	
header('location:..\logout.php');
}
else{ 

//Code for Deletion
if($_GET['rid']){
$id=$_GET['rid'];
$sql="delete from wspot where sp_Id='$id'";
$result = mysqli_query($con, $sql);
 echo "<script>alert('Record Deleted');</script>";
 echo "<script>window.location.href ='managecar-washingpoints.php'</script>";
}


	?>
<!DOCTYPE HTML>
<html>
<head>
<title>CWMS | Manage Wash Spot</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

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
<!-- tables -->
<link rel="stylesheet" type="text/css" href="css/table-style.css" />
<link rel="stylesheet" type="text/css" href="css/basictable.css" />
<script type="text/javascript" src="js/jquery.basictable.min.js"></script>

<!-- //tables -->
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
				     <div class="clearfix"> </div>	
				</div>
<!--heder end here-->
<ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="dashboard.php">Home</a><i class="fa fa-angle-right"></i>Manage Car Washing Spot</li>
            </ol>
<div class="agile-grids">	
				<!-- tables -->
				
				<div class="agile-tables">
					<div class="w3l-table-info">
					  <h2>Manage Car Washing Spot</h2>
					    <table id="table">
						<thead>
						  <tr>
						  <th>#</th>
							<th >Washing Point Name</th>
							<th>Address</th>
							<th>Contact Number</th>
							
							<th>Action</th>
						  </tr>
						</thead>
						<tbody>
<?php $query = "SELECT * from wspot";
$result = mysqli_query($con, $query);
$cnt=1;
if(mysqli_num_rows($result) > 0)
{
while($row = mysqli_fetch_array($result))
				{				?>		
						  <tr>
							<td><?php echo htmlentities($cnt);?></td>
							<td><?php echo $row["sp_Name"];?></td>
							<td><?php echo $row["sp_Adress"];?></td>
							<td><?php echo $row["sp_Contacts"];?></td>
							
							<td>
							<form method="GET">
							<a href="editcar-washpoint.php?wpid=<?php echo $row["sp_Id"];?>">Edit</a> | <a href="managecar-washingpoints.php?rid=<?php echo $id=$row["sp_Id"];?>" style="color:red;" onClick="return confirm('Do you really want to delete');">Delete</a></td>
							</form>
						  </tr>
						 <?php $cnt=$cnt+1;} }?>
						</tbody>
					  </table>
					</div>
				  </table>

				
			</div>

		

						<!--/sidebar-menu-->
				<?php include("sidebarmenu.php");?>
							  
							

</body>
</html>
<?php } ?>