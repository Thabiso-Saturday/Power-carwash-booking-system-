<!DOCTYPE html>
<head>
<meta charset="utf-8">
<title>Admin Login</title>
    <link rel="stylesheet" type="text/css" href="css/stylelogin.css" media="screen" />
</head>
<body>
<div class="container">
	<section id="content">
		<form action="login.php" method="post">
			<h1>Admin Login</h1>
<span style="color: red;font-size: 18px;">
	<?php
if (isset($loginchk)) {
	echo $loginchk;
}

	?>

</span>

			<div>
				<input type="text" placeholder="Username"  name="adminUser"/>
			</div>
			<div>
				<input type="password" placeholder="Password"  name="adminPassword"/>
			</div>
			<div>
				<input type="submit" value="Log in" />
			</div>
		</form><!-- form -->
		<div class="button">
			<a href="#">Yours Clothing | Online shopping</a>
		</div><!-- button -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>