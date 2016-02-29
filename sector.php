<!--@@SECTOR MENU PART-->
            <div id="content">
                
                <div class="bannerImage">
                  
                  <!--@@Video exolanation for vePrompt and veContact depending of the URL requested-->
                    <?php if($_SERVER['REQUEST_URI'] == '/veTool/veprompt')
                    {

                        print '<img class="mainBanner" src="images/banners/vePromptBanner.gif" alt="veContact demostration">';
                  
                    }
                    if($_SERVER['REQUEST_URI'] == '/veTool/vecontact')
                    {
                        print '<img class="mainBanner" src="images/banners/veContactBanner.gif" alt="veContact demostration">';
                    }?> 
                     
                    <img class="banner" src="images/bannerImage.png">
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

