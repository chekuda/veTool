<?PHP
//Used for reload the code in the server when the client change the language
session_start();

$_SESSION['language'] = $_POST['lanSelected'];

echo '<script>window.location="'. $_SERVER['HTTP_REFERER'] .'"</script>';
?>