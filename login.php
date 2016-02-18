<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Login VePlatform</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>
		
<body>
<div class="container">
	<section id="content">
		<img src="images/veLogo.jpg" alt="logo" id="logo" style="width:60%; length:60%;"/></br></br>
		<form id="login1" name="login1" autocomplete="off" action="checkLogin.php" method="post" enctype="multipart/form-data" >
			<h1>Login</h1>
			<div>
				<input type="text" placeholder="Login" required="" name="login" id="login" />
			</div>
			<div>
				<input type="password" placeholder="Password" required="" id="key" name="key" />
			</div>
			<div>
				<input type="submit" value="OK" id="submit1" />
			</div>
				</form><!-- form -->
	</section><!-- content -->
</div><!-- container -->
</body>
</html>
