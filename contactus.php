<?php
if(!session_id())
{
    session_start();
}
?>
<!--@@CONTACT US VIEW-->
<!DOCTYPE html>
<html lang="es">
<?php include_once('head.php'); ?>
<body class="contactUsView">
    <div id="contactUsView">
        <div class="container-fluid">
             <?php include_once('navigation.php') ?>
            <div id="content">
                <blockquote>
                    <?php echo $lang["CONTACTUS_BLOCKQUOTE"];?>
                </blockquote>
                <form action="thanks.php" role="form" method="post" enctype="multipart/form-data">
                    <div class="form-group">
                        <label><?php echo $lang["CONTACTUS_NAME"];?></label>
                        <input type="text" class="form-control" name="name" id="name" placeholder="<?php echo $lang["CONTACTUS_INSERT_NAME"];?>"></input>
                    </div>
                     <div class="form-group">
                        <label><?php echo $lang["CONTACTUS_COMPANY"];?></label>
                        <input type="text" class="form-control" name="company" id="company" placeholder="<?php echo $lang["FORM_COMPANY_NAME"];?>"></input>
                    </div>
                    <div class="form-group">
                        <label><?php echo $lang["CONTACTUS_EMAIL"];?></label>
                        <input type="email" class="form-control" name="email" id="email" placeholder="<?php echo $lang["FORM_EMAIL"];?>"></input>
                    </div>
                    <div class="form-group">
                        <label><?php echo $lang["CONTACTUS_TEXT"];?></label>
                        <textarea class="form-control" name="comment" rows="7"></textarea>
                    </div>
                    <div id="buttonSend">
                        <button type="submit" class="btn btn-default"><?php echo $lang["CONTACTUS_SEND"];?></button>
                    </div>
                </form>
                
                
            </div>
            
        </div>
        
    </div>
    <?php include_once('footer.php') ?> 

    </body>
</html>
