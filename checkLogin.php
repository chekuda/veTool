<?php
		
		if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

		//If fields are complete		
		if (isset($_POST['login']) && $_POST['key']){

		$_SESSION['login']=$_POST['login'];
		$_SESSION['key']=$_POST['key'];

			//status is accepted --> open Employee Form						
			 if  (($_SESSION['login'] == "VeMaster") && ($_SESSION['key'] == "jojo3333!") ||
			      ($_SESSION['login'] == "Jerry") && ($_SESSION['key'] == "xoxo212121!") ||
			      ($_SESSION['login'] == "Lydia") && ($_SESSION['key'] == "titi989898!") ||
			      ($_SESSION['login'] == "June") && ($_SESSION['key'] == "juju090909!") 
			       ) { 
		
			include_once('dashboard.php');
echo '<script type="text/javascript">';
echo "window.location.href = 'http://vebuilder.com/newbuilder/dashboard.php';";
echo '</script>';

		}
			//password doesnt match with ID						
			else {		
						echo '<script type="text/javascript">';
						echo 'error()';
						echo '</script> ';
						include_once('login.php');
						}				
		}	
		else {	 include_once('login.php');}
		 ?>

<!DOCTYPE html>
<!--[if lt IE 7 ]> <html lang="en" class="ie6 ielt8"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="ie7 ielt8"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="ie8"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--> <html lang="en"> <!--<![endif]-->
<head>
<meta charset="utf-8">
<title>Login VePlatform</title>

	<script type="text/javascript">
	function error() {
	alert("Password does not match with login");
	}			
	</script>
	
	</head>

	</html>	 
		