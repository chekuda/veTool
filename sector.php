<!--@@SECTOR MENU PART-->
            <div id="content">
                
                <div class="bannerImage">
                  
                  <!--@@Video exolanation for vePrompt and veContact depending of the URL requested-->
                    <?php if($_SERVER['REQUEST_URI'] == '/veTool/veprompt')
                    {

                        print '<iframe frameborder="0" class="teaser-video" src="//www.dailymotion.com/embed/video/x3nmapv?autoplay=1&mute=1&controls=false&related=0"  allowfullscreen></iframe>';
                  
                    }
                    if($_SERVER['REQUEST_URI'] == '/veTool/vecontact')
                    {
                        print '<iframe frameborder="0" class="teaser-video" src="//www.dailymotion.com/embed/video/x3nm6s3?autoplay=1&mute=1&controls=false&related=0&automute=1" allowscriptaccess="always" allowfullscreen></iframe>';
                    }?> 
                     
                    <img class="baner" src="images/bannerImage.png">
                </div>
               

               <!--@@Sectors buttons displayed by the name of sector folders-->
                <div class="space"></div>
                <div class="categoryGroup">
                        <div class="subCategoryGroup">
                        <div class="bannerSelection"><span class="pulse animated infinite"><?php echo $lang["ANIMATION"];?></span></div>
                        <?php
                            foreach ($chat_images as $key => $value) 
                            {
                            ?>
                            <button type="button" class="menuCategory btn" id="<?php echo $key;?>"><a href="#carouselView"><?php echo $key;?></a></button>
                            <?php

                            }
                        ?>
                       
                    </div>
                </div>
                
                <div class="space"></div>

