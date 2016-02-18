<?
include_once('secureLogin.php');
	secureLogin();

// ---------------------- CHANGE STATUS TO SENT -----------------------------------------

if (isset($_POST['idUpdate'])) { 
$idUpdate = $_POST['idUpdate'];

         
	//DATABASE INFO
	$PARAM_hote='localhost'; 
	$PARAM_nom_bd='vebuilde_2'; 
	$PARAM_utilisateur='vebuilde_2'; 
	$PARAM_mot_passe='nihaoma2014';
    
    $table="veCampaignBuilder"; // Table name 1


            try {
                  $pdo = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd;charset=UTF8", $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sqlUpdateStatus = "UPDATE veCampaignBuilder SET status = 'JS Sent'
                              WHERE id = :idUpdate";
             
                                  
         $stmt2 = $pdo->prepare($sqlUpdateStatus);
         $stmt2->execute(array(
                    ':idUpdate' => $idUpdate
                    ));
                    
                    }  
    catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage(); 
                        }
}

// ---------------------- CHANGE STATUS TO ARCHIVED -----------------------------------------

if (isset($_POST['idDelete'])) { 
$idDelete = $_POST['idDelete'];

  //DATABASE INFO
$PARAM_hote='localhost'; 
	$PARAM_nom_bd='vebuilde_2'; 
	$PARAM_utilisateur='vebuilde_2'; 
	$PARAM_mot_passe='nihaoma2014';
    
    $table="veCampaignBuilder"; // Table name 1

    
            try {
                  $pdo = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd;charset=UTF8", $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


    $sqlDeleteStatus = "UPDATE veCampaignBuilder SET status = 'Archived'
                              WHERE id = :idDelete";
             
                                  
         $stmt2 = $pdo->prepare($sqlDeleteStatus);
         $stmt2->execute(array(
                    ':idDelete' => $idDelete
                    ));
                    
                    }  
    catch(PDOException $e) {
                echo 'Error: ' . $e->getMessage(); 
                        }
}


// -----------------------------------------------------------------------------------------------------------------------

	 
 function valide(){ ?> 
	
<!DOCTYPE html>
 
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]><html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    <title>Ve Interactive Asia - Dashboard</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/normalize.min.css">
    <link rel="stylesheet" href="css/font-awesome.min.css">
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/templatemo_misc.css">
    <link rel="stylesheet" href="css/templatemo_style.css">
    <link rel="shortcut icon" href="images/favi/favicon.ico">
      
     

      
  
<script src="http://code.jquery.com/jquery-1.11.2.min.js"></script>


<!-- DataTables CSS -->
<link rel="stylesheet" type="text/css" href="//cdn.datatables.net/1.10.2/css/jquery.dataTables.css">
<!-- jQuery -->
<script type="text/javascript" charset="utf8" src="//code.jquery.com/jquery-1.10.2.min.js"></script> 
<!-- DataTables -->
<script type="text/javascript" charset="utf8" src="//cdn.datatables.net/1.10.2/js/jquery.dataTables.js"></script>



  <!--   <script type="text/javascript">        /* update applicant status on click to Sent */  
            function statusSent(idUpdate) {
              if (confirm("Did you sent the JS and pixel to client?")) {
                $.ajax
                    ({
                            type: "POST",
                            url: "dashboard.php",
                            data: {"idUpdate" : idUpdate}, 
                    });

setTimeout(function () {
       location.reload(); //will redirect to your blog page (an ex: blog.html)
    }, 1200); 


                        
                }
                return false;
            }
	    
	    	     function statusOnSite(idOnSite) {     /* update applicant status on click to Archived */  
              if (confirm("Is the JS and pixel on site and ready for configuration?")) {
                $.ajax
                    ({
                            type: "POST",
                            url: "dashboard.php",
                            data: {"idOnSite" : idOnSite}, 
                    });
                 setTimeout(function () {
       location.reload(); //will redirect to your blog page (an ex: blog.html)
    }, 1200); //will call the function after 2 secs.       
                }
                return false;
            }
	    


              function statusDelete(idDelete) {     /* update applicant status on click to Archived */  
              if (confirm("Do you want to delete this field ?")) {
                $.ajax
                    ({
                            type: "POST",
                            url: "dashboard.php",
                            data: {"idDelete" : idDelete}, 
                    });
                 setTimeout(function () {
       location.reload(); //will redirect to your blog page (an ex: blog.html)
    }, 1200); //will call the function after 2 secs.       
                }
                return false;
            }
	    

            </script> -->
</head>
<body>
    <!--[if lt IE 7]>
    <p class="chromeframe">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> or <a href="http://www.google.com/chromeframe/?redirect=true">activate Google Chrome Frame</a> to improve your experience.</p>
    <![endif]-->


<script type="text/javascript">   // Insert the DataTable

$(document).ready( function () {
    $('#table_id').DataTable();
} );
</script>

    <div id="front">
        <div class="site-header">
            <div class="container">
                <div class="row">
                 
                        <div id="templatemo_logo" style='width:600px;'>
                            	<a href="dashboard.php"><img src="images/veLogo.jpg" alt="Ve" style="width:30%; length:15%;"></a>
                     <span style="color: #000; font-size: 1.5em;">   <?php echo '   Welcome '.$_SESSION['login'].' !';?>  </span> </div> <!-- /.logo -->

                
                </div> <!-- /.row -->
               
            </div> <!-- /.container -->
        </div> <!-- /.site-header -->
    </div> <!-- /#front -->

     <div class="row">
                <div class="col-md-12 text-center">
                    <h1 class="section-title">Admin Dashboard</h1> 
                </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->

 <div class="container">

     <table id="table_id" class="display">
    <thead>
        <tr>
            <th>id</th>
            <th>Date</th>
	    <th>Sales</th>
            <th>Company</th>
            <th>Website</th>
            <th>Status</th>
        </tr>
    </thead>
    <tfoot>
        <tr>
            <th>id</th>
            <th>Date</th>
	    <th>Sales</th>
	      <th>Company</th>
           <th>Website</th>
            <th>Status</th>
        </tr>
    </tfoot>
<tbody>
    
  <?php
 
  /* $sqlReplace = "UPDATE veCampaignBuilder SET sales = :sales
    WHERE sales = '无'";
    
    $sqlReplaceAffiliateYes = "UPDATE veCampaignBuilder SET affiliate = :affiliate
    WHERE affiliate = '是'";
    
    $sqlReplaceAffiliateNo = "UPDATE veCampaignBuilder SET affiliate = :affiliate
    WHERE affiliate = '否'";
    
     try {
		$PARAM_hote='localhost'; 
	$PARAM_nom_bd='vebuilde_2'; 
	$PARAM_utilisateur='vebuilde_2'; 
	$PARAM_mot_passe='nihaoma2014';
		  
		  
                  $pdo = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd;charset=UTF8", $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          
                $stmt = $pdo->prepare($sqlReplace);
				  $stmt->execute(array(
				    ':sales' => 'None'));
			}

		 catch(PDOException $e) {
				echo 'Error: ' . $e->getMessage(); 
			}
			
			
	     try {
	$PARAM_hote='localhost'; 
	$PARAM_nom_bd='vebuilde_2'; 
	$PARAM_utilisateur='vebuilde_2'; 
	$PARAM_mot_passe='nihaoma2014';
		  
                  $pdo = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd;charset=UTF8", $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          
                $stmt = $pdo->prepare($sqlReplaceAffiliateYes);
				  $stmt->execute(array(
				    ':affiliate' => 'Yes'));
			}

		 catch(PDOException $e) {
				echo 'Error: ' . $e->getMessage(); 
			}
			
			
			
			     try {
		$PARAM_hote='localhost'; 
	$PARAM_nom_bd='vebuilde_2'; 
	$PARAM_utilisateur='vebuilde_2'; 
	$PARAM_mot_passe='nihaoma2014';
		  
		  
                  $pdo = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd;charset=UTF8", $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          
                $stmt = $pdo->prepare($sqlReplaceAffiliateNo);
				  $stmt->execute(array(
				    ':affiliate' => 'No'));
			}

		 catch(PDOException $e) {
				echo 'Error: ' . $e->getMessage(); 
			} 
*/
	if  ($_SESSION['login'] == "VeMaster"){	

    $sqlSelect = "SELECT id, code, date, company, websiteUrl, websiteCompleteUrl, contactEmail, qqNumber, status, veContactEmail, ecommercePlatform, sales, contactTemplate, chatTemplate FROM veCampaignBuilder where status <> 'Archived' ";
	}
	if  ($_SESSION['login'] == "Jerry"){	

    $sqlSelect = "SELECT id, code, date, company, websiteUrl, websiteCompleteUrl, contactEmail, qqNumber, status, veContactEmail, ecommercePlatform, sales, contactTemplate, chatTemplate FROM veCampaignBuilder where status <> 'Archived' AND sales = 'Jerry Jia'";
	}
		if  ($_SESSION['login'] == "Lydia"){	

 $sqlSelect = "SELECT id, code, date, company, websiteUrl, websiteCompleteUrl, contactEmail, qqNumber, status, veContactEmail, ecommercePlatform, sales, contactTemplate, chatTemplate FROM veCampaignBuilder where status <> 'Archived' AND sales = 'Lydia Lu' ";
	}
	if  ($_SESSION['login'] == "June"){	

    $sqlSelect = "SELECT id, code, date, company, websiteUrl, websiteCompleteUrl, contactEmail, qqNumber, status, veContactEmail, ecommercePlatform, sales, contactTemplate, chatTemplate FROM veCampaignBuilder where status <> 'Archived' AND sales = 'June Qian'";
	}
            try {
$PARAM_hote='localhost'; 
	$PARAM_nom_bd='vebuilde_2'; 
	$PARAM_utilisateur='vebuilde_2'; 
	$PARAM_mot_passe='nihaoma2014';
		  
		  
                  $pdo = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd;charset=UTF8", $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
                  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                          
                  $stmt = $pdo->prepare($sqlSelect);
                 $stmt->execute();
                 while ($result = $stmt->fetch(PDO::FETCH_ASSOC))
            {
	
                $id = $result['id'];
		$code = $result['code'];
                $status = $result['status'];

            echo '<tr>';
	    echo '<td><a style="font-weight:bold;color:#1EAEDB;" href="#" onclick="infoClient(\''.$code.'\');return false;">'.$result['id'].'</a></td>';
            echo '<td>'.$result['date'].'</td>'; 
            echo '<td>'.$result['sales'].'</td>'; 
            echo '<td>'.$result['company'].'</td>';
	    echo '<td><a style="color:#1EAEDB;" href=http://'.$result['websiteUrl'].'>'.$result['websiteUrl'].'</a></td>';  
            echo '<td>'.$result['status'].'</td>'; 
	  
              echo '</tr>';                                                
        } 
     }                                  
        catch(PDOException $e) {
                        echo 'Error: ' . $e->getMessage(); 
                }
              
?> 
    </tbody>
</table>
</div>
 
 
     <div class="row">
                <div class="col-md-12 text-center">
                <a title="bye bye <?php echo $_SESSION['login']; ?>" href="logout.php"><img src="images/logout.jpg" alt="logout"></a>
                </div> <!-- /.col-md-12 -->
    </div> <!-- /.row -->


<script type="text/javascript">	/* get the candidate info, add an interview or change application status */
			function infoClient(info) {
				window.open("details.php?info="+ info);
			}
			</script>
 
 

 


    <div class="site-footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6 col-sm-6">
                    <span>Copyright &copy; <a href="mailto:info.hk@veinteractive.com">Ve Interactive Asia Limited</a></span>
                </div> <!-- /.col-md-6 -->
                <div class="col-md-6 col-sm-6">
                    <ul class="social">
             
                    </ul>
                </div> <!-- /.col-md-6 -->
            </div> <!-- /.row -->
        </div> <!-- /.container -->
    </div> <!-- /.site-footer -->
      
</body>
</html>

<?php
}
?>