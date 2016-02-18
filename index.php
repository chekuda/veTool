<?php
if(!session_id())
{
    session_start();
}
?>
<!--@@INDEX VIEW-->
<!DOCTYPE html>
<html lang="es">
<?php include_once('head.php'); ?>
<body>
    <div id="veindexView">
        <div class="container-fluid">
            <?php include_once('navigation.php') ?>
            
            <div id="content">
                
                
                <div class="indexblocks">
                    <img class="desktopBannerImage" src="images/desktopBanner.gif">
                    <img class="mobileBannerImage" src="images/mobileBanner.gif">
                </div>
                
                <div class="bottomButtons">
                    <a role="button" class="menuBottom btn" href="veprompt" id="start"><?php echo $lang["INDEX_START"];?></a>
                </div>
                
            </div>
            
        </div>
        
    </div>
    <?php include_once("footer.php"); ?>


    </body>
</html>
