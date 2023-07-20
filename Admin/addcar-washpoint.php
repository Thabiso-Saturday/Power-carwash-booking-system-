<?php
session_start();

include("connection.php");
if(strlen($_SESSION['user_id'])==0)
	{	
header('location:..\logout.php');
}
else{
if(isset($_POST['submit']))
{
$wpname=$_POST['washingpointname'];
$wpaddress=$_POST['address'];	
$wpcnumber=$_POST['contactno'];

$sql="INSERT INTO wspot(sp_Name,sp_Adress,sp_Contacts) VALUES('$wpname','$wpaddress','$wpcnumber')";
$result = mysqli_query($con, $sql);

if($result)
{
 echo "<script>alert('Car wash spot added successfully');</script>";
 echo "<script>window.location.href ='addcar-washpoint.php'</script>";
}
else 
{
 echo "<script>alert('Something went wrong. Please try again.');</script>";
}

}

	?>
<!DOCTYPE HTML>
<html>
<head>
<title>Add Washing Spot</title>


<link href="css/bootstrap.min.css" rel='stylesheet' type='text/css' />
<link href="css/style.css" rel='stylesheet' type='text/css' />
<link rel="stylesheet" href="css/morris.css" type="text/css"/>
<link href="css/font-awesome.css" rel="stylesheet"> 
<script src="js/jquery-2.1.4.min.js"></script>
<link href='//fonts.googleapis.com/css?family=Roboto:700,500,300,100italic,100,400' rel='stylesheet' type='text/css'/>
<link href='//fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
<link rel="stylesheet" href="css/icon-font.min.css" type='text/css' />
  <style>
		.errorWrap {
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #dd3d36;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
.succWrap{
    padding: 10px;
    margin: 0 0 20px 0;
    background: #fff;
    border-left: 4px solid #5cb85c;
    -webkit-box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
    box-shadow: 0 1px 1px 0 rgba(0,0,0,.1);
}
		</style>

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
                <li class="breadcrumb-item"><a href="adminHome.php">Home</a><i class="fa fa-angle-right"></i>Add Washing Spot </li>
            </ol>
		<!--grid-->
 	<div class="grid-form">
 
<!---->
  <div class="grid-form1">
  	       <h3>Add Washing Spot</h3>

  	         <div class="tab-content">
						<div class="tab-pane active" id="horizontal-form">
							<form class="form-horizontal" name="washingpoint" method="post" enctype="multipart/form-data">
								<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Car Wash Point Name</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="washingpointname" id="washingpointname" placeholder="Washing Point Name" required>
									</div>
								</div>
<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Adress</label>
									<div class="col-sm-8">
										<textarea class="form-control" name="address" id="address" placeholder="Address" required rows="4"></textarea>
									</div>
								</div>

<div class="form-group">
									<label for="focusedinput" class="col-sm-2 control-label">Contact Number</label>
									<div class="col-sm-8">
										<input type="text" class="form-control" name="contactno" id="contactno" placeholder="Contact Number" required>
									</div>
								</div>



	


														
	

								<div class="row">
			<div class="col-sm-8 col-sm-offset-2">
				<button type="submit" name="submit" class="btn-primary btn">Add</button>

				<button type="reset" class="btn-inverse btn">Reset</button>
			</div>
		</div>
						
					
						
						
						
					</div>
					
					</form>

     
      
                         
      
    
    </form>
  </div>
 	</div>
		<!--/sidebar-menu-->
				<?php include("sidebarmenu.php");?>			

</body>
</html>
<?php } ?>