<?php

  //generate a unique code
   function GeraHash($qtd){ 
		//Under the string $Caracteres you write all the characters you want to be used to randomly generate the code. 
		$Caracteres = 'ABCDEFGHIJKLMOPQRSTUVXWYZ0123456789'; 
		$QuantidadeCaracteres = strlen($Caracteres); 
		$QuantidadeCaracteres--; 

		$Hash=NULL; 
			for($x=1;$x<=$qtd;$x++){ 
				$Posicao = rand(0,$QuantidadeCaracteres); 
				$Hash .= substr($Caracteres,$Posicao,1); 
			} 
		return $Hash; 
		}
                
         
	//DATABASE INFO
	$PARAM_hote='localhost'; 
	$PARAM_nom_bd='vebuilde_2'; 
	$PARAM_utilisateur='vebuilde_2'; 
	$PARAM_mot_passe='nihaoma2014';
	
	$table="veCampaignBuilder"; // Table name 1
	
	$sqlInsert = "INSERT INTO veCampaignBuilder (date, code, company, websiteUrl, contactEmail, ecommercePlatform, chatTemplate, contactTemplate, qqNumber, veContactEmail, sales, status)
                    VALUES(:date, :code, :company, :websiteUrl, :contactEmail, :ecommercePlatform, :chatTemplate, :contactTemplate, :qqNumber, :veContactEmail, :sales, :status)";
        
		
		/// UPLOAD INFO TO DATABASE ----------------------------------------------------
		    $code = GeraHash(12);
                $websiteUrl = $_POST['URL'];
                $contactEmail = $_POST['email'];
                $qqNumber = $_POST['qqNumber'];
                $company = $_POST['companyName'];
                $veContactEmail = $_POST['veContactEmail'];
                $sales = $_POST['sales'];
                $ecommercePlatform = $_POST['affiliate'];
                $chatTemplate = $_POST['chatTemplate'];
                $contactTemplate = $_POST['contactTemplate'];
                $terms = $_POST['terms'];
                
		if ($sales == ""){
			$sales = "None";
		}
        
		$date = date('Y/m/d');
                $status = 'Pending';
	
		try {
				  $pdo = new PDO("mysql:host=$PARAM_hote;dbname=$PARAM_nom_bd;charset=UTF8", $PARAM_utilisateur, $PARAM_mot_passe, array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8"));
				  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);                            
				 
				  $stmt = $pdo->prepare($sqlInsert);
				  $stmt->execute(array(
					':date' => $date,
					':code' => $code,
                                        ':company' => $company,
					':websiteUrl' => $websiteUrl,
					':contactEmail' => $contactEmail,
					':ecommercePlatform' => $ecommercePlatform,
                                        ':contactTemplate' => $contactTemplate,
                                        ':chatTemplate' => $chatTemplate,
                                        ':qqNumber' => $qqNumber,
                                        ':veContactEmail' => $veContactEmail,
                                        ':sales' => $sales,
                                        ':status' => $status
                                        
				  ));
			}

		 catch(PDOException $e) {
				echo 'Error: ' . $e->getMessage(); 
			}
			
		
	
?>