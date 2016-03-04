<!--@@SECTOR MENU PART-->
            <div id="content">
                
                <div class="bannerImage">
                  
                  <!--@@Video exolanation for vePrompt and veContact depending of the URL requested-->
                    <?php if($_SERVER['REQUEST_URI'] == '/veTool/veprompt')
                    {

                        echo $lang["PROMPT_BANNER"];
                  
                    }
                    if($_SERVER['REQUEST_URI'] == '/veTool/vecontact')
                    {
                       echo $lang["CONTACT_BANNER"];
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
                                /*Make sure to add new sectors into the language files if needed*/
                                if(isset($lang[''.$key.'']))
                                {
                                    ?>
                                    <button type="button" class="menuCategory btn" id="<?php echo $key;?>"><a href="#carouselView"><?php echo $lang[''.$key.''];?></a></button>
                                    <?php
                                }
                            }
                        ?>
                       
                    </div>
                </div>
                
                <div class="space"></div>

