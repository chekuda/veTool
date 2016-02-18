<?php 
if(!session_id())
{
    session_start();
}
?>
<!--@@VECHAT VIEW-->
<!DOCTYPE html>
<html lang="es">
    <?php include_once('head.php'); ?>
<body>
    <div id="veChatView">
        <div class="container-fluid">
            
           <?php include_once('navigation.php') ?>
           <?php include_once('sector.php') ?>
                
                <!--@@Get path of images and the sector for the carousel by the value $chat_images-->
                <?php 
                foreach($chat_images as $keys=>$values)
                {
                    ?>
                    
                    <div class="carousel chat <?php echo $keys;?> gallery chocolat-parent" data-chocolat-title="first">
                        <?php
                        foreach($values as $value)
                            {
                                ?>
                                <div class="gallery-cell">
                                    <img class="chocolat-image" href="<?php echo $value; ?>" src="images/transparent.png">
                                    <button type="button" class="btn btn-default selection" name ="<?php echo $value; ?>" aria-label="Center Align">
                                       <span class="glyphicon glyphicon-ok" aria-hidden="true"></span>
                                    </button>
                                </div>

                                <?php
                            }
                        ?>
                    </div>
                    
                    <?php 
                       
                }
                ?>
                
                <div class="bottomButtons">
                    <a href="vecontact" id="next"><?php echo $lang["NEXT_BUTTON"];?></a>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    <?php include_once('footer.php') ?> 
    </body>
</html>
