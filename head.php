<?php 
if(!session_id())
{
    session_start();
}
if(!isset($_SESSION["language"]))
{
    $_SESSION["language"] = "EN";
}
if(file_exists ("languages/".$_SESSION["language"].".php"))
    include_once("languages/".$_SESSION["language"].".php");
  else
    include_once("languages/EN.php");
?>
<!--@@HEAD FILE FOR ALL THE VIEWS-->
<head>
    <title>veTool</title>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width" initial-scale="1"> 
     <link rel="icon" type="image/png" sizes="20x20" href="images/logo_ve.png">
    <!-- Latest compiled and minified CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">

    <link rel="stylesheet" type="text/css" href="css.css">
    <!--Chocolate for images-->
    <link rel="stylesheet" href="chocolat.css" type="text/css" media="screen" charset="utf-8">
    <!--animations-->
    <link rel="stylesheet" type="text/css" href="css/animation.css">

    <!-- Important Owl stylesheet -->
    <link rel="stylesheet" href="js/owl-carousel/owl.carousel.css">
     
    <!-- Default Theme -->
    <link rel="stylesheet" href="js/owl-carousel/owl.theme.css">

       <script src="https://code.jquery.com/jquery-1.11.2.min.js"></script>
</head>

<!--@@Array of vePrompt/veContact images path-->

<?php
    function dirToArray($dir) { 
   
   $result = array(); 

   $cdir = scandir($dir); 
   foreach ($cdir as $key => $value) 
   { 
      if (!in_array($value,array(".",".."))) 
      { 
         if (is_dir($dir . DIRECTORY_SEPARATOR . $value)) 
         { 
            $result[$value] = dirToArray($dir . DIRECTORY_SEPARATOR . $value); 
         } 
         else 
         { 
            $result[] = str_replace('\\', '/', $dir . DIRECTORY_SEPARATOR . $value); 
         } 
      } 
   } 
   
   return $result; 
} 

if(isset($_SESSION["language"]))
{
  $chat_images = dirToArray('images/carousel/chats/'.$_SESSION["language"].'');
  $contact_images = dirToArray('images/carousel/contact/'.$_SESSION["language"].'');
}
else{
  $chat_images = dirToArray('images/carousel/chats/EN/');
  $contact_images = dirToArray('images/carousel/contact/EN/');

}

?>