<?php 

function secureLogin() {
		if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

	if (isset($_SESSION['login']) && $_SESSION['key'])
		{
			valide();
		}
		
	else {		
			include_once('login.php');
		}	
}	

function secureValidation() {
		if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 

		if (isset($_SESSION['login']) && $_SESSION['key'])
		{
			valide();
			session_destroy();
			echo '<script type="text/javascript">';
			echo "confirm('Your information has been updated with success !')";
			echo '</script> ';
			include_once('login.php');
		}
		
	else {	
		include_once('login.php');	
		}	
		}


?>