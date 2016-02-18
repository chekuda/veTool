<?php
 //include_once('secureLogin.php');
 
	//secureLogin();
        
        
       //  function valide(){ ?>



<html lang="en">
<head>

  <!-- Basic Page Needs
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta charset="utf-8">
<title>Client Data</title>
  <meta name="description" content="">


  <!-- Mobile Specific Metas
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <!-- FONT
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link href="//fonts.googleapis.com/css?family=Raleway:400,300,600" rel="stylesheet" type="text/css">

  <!-- CSS
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="stylesheet" href="css/normalize.css">
  <link rel="stylesheet" href="css/skeleton.css">

  <!-- Favicon
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <link rel="icon" type="image/png" href="images/favicon.png">

</head>
<body>

  <!-- Primary Page Layout
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
                                     
                                       <?php
        
	$code = $_GET['info'];
          
         $sqlSelectClient = "SELECT id,code, date, company, websiteUrl, websiteCompleteUrl, sourceCode, contactEmail, sales, qqNumber, status, veContactEmail, ecommercePlatform,contactTemplate, chatTemplate FROM veCampaignBuilder where code = :code";

            try {
		//DATABASE INFO
		$PARAM_hote='localhost'; 
	$PARAM_nom_bd='vebuilde_2'; 
	$PARAM_utilisateur='vebuilde_2'; 
	$PARAM_mot_passe='nihaoma2014';
	
	$table="veCampaignBuilder"; // Table name 1
		  
		  
                  $pdo = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd;charset=UTF8", $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          
                  $stmt = $pdo->prepare($sqlSelectClient);
                  $stmt->execute(array(
					  ':code' => $code
					  ));
                 while ($result = $stmt->fetch(PDO::FETCH_ASSOC))
            {
                ?>
  
  
    <div class="container">
    <div class="row">
      <div class="nine columns" style="margin-top: 5%">
        <h5><?php echo $result['company'];?></h5>
        <p><?php echo '<a target="_blank" href=http://'.$result['websiteUrl'].'>'.$result['websiteUrl'].'</a>'.'<br>'; ?></p>
        <p>by <?php echo $result['sales'].' on '.$result['date'];?></p>
         <p>Contact Email: <b><?php echo $result['contactEmail'];?></b></p>
          <?php
      if ($result['qqNumber'] !== ""){ ?>
         <p>QQ Number: <b><?php echo $result['qqNumber'];?></b></p>
          <?php }
      if ($result['ecommercePlatform'] !== ""){ ?>
           <p>Ecommerce Platform: <b><?php echo $result['ecommercePlatform'];?></b></p>
            <?php }
      if ($result['veContactEmail'] !== ""){ ?>
           <p>Sender email for veContact: <b><?php echo $result['veContactEmail'];?></b></p>
            <?php }
                if ($result['websiteCompleteUrl'] !== ""){ ?>
           <p>Complete Page URL: <b><?php echo $result['websiteCompleteUrl'];?></b></p>
            <?php }
                if ($result['sourceCode'] !== ""){ ?>
           <p<b><a href="http://vebuilder.com/newbuilder/<?php echo $result['sourceCode'];?>">Download source code</a></b></p>
           
           
           
           <?php } ?>
    </div>
        <div class="two columns" style="margin-top: 5%">
           <p style="text-align:center;color:red;font-size:1.3em;"><br><b><?php echo $result['status'];?></b></p>
    </div>
       </div>
    
     <div class="row">
     <?php
      if ($result['chatTemplate'] !== ""){ ?>
      <div class="six columns" style="margin-top: 1%">
            <h4>vePrompt</h4><br>
      <a target="_blank" href="http://vebuilder.com/newbuilder/<?php echo $result['chatTemplate'];?>"><img src="http://vebuilder.com/newbuilder/<?php echo $result['chatTemplate'];?>" alt="vePrompt" height="135" width="200"></a>
      </div>
   <?php }
       if ($result['contactTemplate'] !== ""){ ?>
      <div class="six columns" style="margin-top: 1%">
        <h4>veContact</h4><br>
        <a target="_blank" href="http://vebuilder.com/newbuilder/<?php echo $result['contactTemplate'];?>"><img src="http://vebuilder.com/newbuilder/<?php echo $result['contactTemplate'];?>"  alt="veContatct" height="300" width="190"></a>
      </div>
      <?php } ?>
       </div>
    
  
    <!-- Upload
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
  <?php }?>
    <div class="row">
      <div class="eleven columns" style="margin-top: 5%">
        <h4>Complete page url and Source Code</h4>
        <p style="color:red;">Please fill in the below fields and upload the complete page html.<br><br>
       <span style="font-size:0.8em;">If there are multiple complete pages, uplaod a zip file with all the url/source codes.</span> </p>
      </div>
       </div>
     <form action="test5.php" method="post" enctype="multipart/form-data">
  <div class="row">
    <div class="eleven columns">
        <label for="jsOnSite">Are JS & pixel correclty implemented</label>
      <select class="u-full-width" id="jsOnSite">
        <option value="YES">Yes</option>
        <option value="NO">No</option>
      </select>
      <label for="completeURL">Complete Page URL</label>
      <input class="u-full-width" type="text" placeholder="http://mywebsite.com/complete.php" id="completeURL" name="completeURL" required>
        <br>
    <input type="file" name="fileToUpload" id="fileToUpload" required>
          <input type="hidden" name="mycode" id="mycode" value="<?php echo $code;?>">
    </div>

  </div>

  <input class="button-primary" type="submit" name="submit" value="Submit">
</form>
      
       <?php                                              
         
     }                                  
        catch(PDOException $e) {
                        echo 'Error: ' . $e->getMessage(); 
                }
              
?> 
      

    </div>
  </div>

<!-- End Document
  –––––––––––––––––––––––––––––––––––––––––––––––––– -->
</body>
</html>

 


<?php
//}
?>