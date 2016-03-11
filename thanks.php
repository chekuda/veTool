<?php
if(!session_id())
{
    session_start();
}
   
if(isset($_POST['name'])&&isset($_POST['company'])&&isset($_POST['email'])&&isset($_POST['comment'])){

    if($_POST['name']!=""&&$_POST['company']!=""&&$_POST['email']!=""&&$_POST['comment']!=""){
        $subject = 'veBuilder client suggestion';
        $from_email = $_POST['email'];
        $from_name = $_POST['name'];
        $to="jose.exposito@veinteractive.com";
        
        
        $headers  = 'MIME-Version: 1.0' . "\r\n";
        $headers .= 'Content-type: text/html; charset=iso-8859-1' . "\r\n";
        
        $message = '
        <html>
        <head>
          <title>veBuilder</title>
        </head>
        <body>
          <p>Name: '.$_POST["name"].'</p>
          <p>Email: '.$_POST["email"].'</p>
          <p>Company: '.$_POST["company"].'</p>
          <p>Comment: '.$_POST["comment"].'</p>
        </body>
        </html>
        ';
        
        mail($to,$subject,$message,$headers);
    }
    else
    {
     header("Location: http://vebuilder.com/newbuilder/index");
        die();
    }
}
else if(isset($_SESSION['submit']))
{
    session_destroy();
}

else{
   header("Location: http://vebuilder.com/newbuilder/index");
    session_destroy();
    die();
}


?>
<!--@@Thank you page-->
<!DOCTYPE html>
<html lang="en">
<?php include_once('head.php'); ?>
<body>
    <img src="//cdshk.veinteractive.com/DataReceiverService.asmx/Pixel?journeycode=3CA74CEA-6B03-4D23-875F-E83D9A022EC2" width="1" height="1"/>
    <div id="thanksPage">
        <div class="container-fluid">
            
            <div id="content">
                <div id="thankyou"><?php echo $lang["COMPLETE_PAGE"];?></div>
                <div class="thanksImage">
                    <img src="images/thanks.png">
                </div>
                
            </div>
            
        </div>
    </div>
   <?php include_once('footer.php'); ?>
    


    </body>
</html>

