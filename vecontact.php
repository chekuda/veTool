<?php 
if(!session_id())
{
    session_start();
}

//VECONTACT VIEW


include_once('validation.php');?>
<!DOCTYPE html>
<html lang="en">
  <?php include_once('head.php'); ?>
<body>
    <div id="veContactView">
        <div class="container-fluid">
           <?php include_once('navigation.php'); ?>
           <?php include_once('sector.php'); ?>
                <!--@@Get path of images and the sector for the carousel by the value $contact_images-->
                <?php 
                foreach($contact_images as $keys=>$values)
                {
                    ?>
                    <div class="carousel contact <?php echo $keys;?> gallery chocolat-parent" data-chocolat-title="first">
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
               
                

                <!-- Modal for submit details -->
                <div id="myModal" class="modal fade" role="dialog">
                  <div class="modal-dialog">

                    <!-- Modal content-->
                    <div class="modal-content">
                      <div class="modal-header">
                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                        <h4 class="modal-title" id="step3"><?php echo $lang["MENU_SET_UP"];?></h4>
                      </div>
                      <div class="modal-body">

                        <form action="<?php echo $_SERVER["PHP_SELF"];?>" autocomplete="off" method="post" enctype="multipart/form-data">
                            
                            <div class="form-group">
                               <input type="text" class="form-control" name="companyName" id="companyName" placeholder="* <?php echo $lang["FORM_COMPANY_NAME"];?>" required></input>
                            </div>
                            <div class="form-group">
                              <input type="text" class="form-control" name="URL" id="URL" placeholder="* <?php echo $lang["FORM_HOME_PAGE_URL"];?>" required></input>
                            </div>
                            <div class="form-group">
                                <input type="email" class="form-control" name="email" id="email" placeholder="* <?php echo $lang["FORM_EMAIL"];?>" required></input>
                            </div>
                            <div class="form-group">
                              <input type="email" class="form-control" name="veContactEmail" id="veContactEmail" placeholder="* <?php echo $lang["FORM_SENDER_EMAIL"];?>" required></input>
                            </div>
                                                       
                            <h4 class="modal-internTitles" id="optionalInformation"><?php echo $lang["FORM_OPTIONAL_INFORMATION"];?></h4>
                             <div class="form-group">
                                <input type="text" class="form-control" name="qqNumber" id="qqNumber" placeholder="<?php echo $lang["FORM_QQ_NUMBER"];?>"></input>
                            </div>
                              <div class="form-group">
                                <label class="sales" id="sales"><?php echo $lang["FORM_ECOMMERCE_PLATFORM"];?></label>
                                 <select name="affiliate" id="affiliate" class="form-control">
                                    <option value=""></option>
                                  <option value="GoogleTagManager">GoogleTagManager</option>
                                  <option value="Magento">Magento</option>
                                  <option value="Venda">Venda</option>
                                  <option value="OS Commerce">OS Commerce</option>
                                  <option value="Volusion">Volusion</option>
                                  <option value="Maginus">Maginus</option>
                                  <option value="Shopify">Shopify</option>
                                  <option value="OpenCart">OpenCart</option>
                                  <option value="UberCart">UberCart</option>
                                  <option value="BigCommerce">BigCommerce</option>
                                  <option value="Demandware">Demandware</option>
                                  <option value="XCart">XCart</option>
                                  <option value="Prestashop">Prestashop</option>
                                  <option value="Oxid">Oxid</option>
                                  <option value="Zencart">Zencart</option>
                                  <option value="Tray">Tray</option>
                                  <option value="Bitrix">Bitrix</option>
                                  <option value="SeoShop">SeoShop</option>
                                  <option value="Woocommerce">Woocommerce</option>
                                  <option value="Drupal">Drupal</option>
                                  <option value="VisualSoft">VisualSoft</option>
                                  <option value="Shopware">Shopware</option>
                                  <option value="Fastbooking">Fastbooking</option>
                                  <option value="Episerver">Episerver</option>
                                  <option value="Shopex">Shopex</option>
                                  <option value="Ensighten">Ensighten</option>
                                  <option value="CsCart">CsCart</option>
                                  <option value="Umi">Umi</option>
                                  <option value="Cube">Cube</option>
                                  <option value="Opentag">Opentag</option>
                                  <option value="other">other</option>

                                </select>
                            </div>
                            <div class="form-group">
                                <label class="sales" id="salesPerson"><?php echo $lang["FORM_SALE_PERSON"];?></label>
                              <select id="sales" name="sales" class="form-control">
                                     <option value=""></option>
                                    <option value="James Wong">James Wong</option>
                                  <option value="June Qian">June Qian</option>
                                  <option value="Jerry Jia">Jerry Jia</option>
                                  <option value="Lizzy Chen">Lizzy Chen</option>
                                  <option value="Lowry Hu">Lowry Hu</option>
                                  <option value="Lydia Lu">Lydia Lu</option>
                                  <option value="KK Sharma">KK Sharma</option>
                                  <option value="Muhamad Isuandi">Muhamad Isuandi</option>
                                </select>
                            </div>
                            <!--@@Where the templates selected will be displayed-->
                              <div class="modal-footer">
                            <div class="sumarytemplate">
                                <div id="sumaryChat">
                                  <div id="sumaryclose" class="chatClose"></div>
                                    <img heigh="150" width="200">
                                        <input type="hidden" id="chatTemplate" name="chatTemplate" value="">
                                </div>

                            </div>
                            <div class="sumarytemplate">
                                <div id="sumaryContact">
                                  <div id="sumaryclose" class="contactClose"></div>
                                    <img heigh="300" width="200">
                                        <input type="hidden" id="contactTemplate" name="contactTemplate" value="">
                                </div>
                            </div>
                      </div>
                            <div class="checkbox termsC">
                              <label> <span style="color:red;">*</span><input type="checkbox" id="terms" name="terms" value="" required><?php echo $lang["FORM_TEMRS_CONDITION"];?></input></label>
                            </div>
                            <div class="information">
                              <?php echo $lang["FORM_TEMRS_SENTENCE1"];?>
                            </div>
                            <div id="buttonSend">
                                <button type="submit" class="btn btn-default"><?php echo $lang["FORM_SUBMIT"];?></button>
                                <!--<div class="icon icon-btn bounce"></div>-->
                            </div>
                        </form>
                      </div>
                      
                    </div>

                  </div>
                </div>

                <div class="bottomButtons">
                    <a data-target="#myModal" id="next"><?php echo $lang["NEXT_BUTTON"];?></a>
                    
                </div>
                
            </div>
            
        </div>
        
    </div>
    <?php include_once('footer.php') ?> 

    </body>
</html>
