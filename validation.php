<?php  
session_start();
	if ($_SERVER["REQUEST_METHOD"] == "POST")
	{
	  
	  // VALID AND SECURE DATA
	 include_once('upload.php');
	 
	 
	 //mail function
         
         //email subject and template for sales/tech team
           // include_once('emailSales.php');
            
              //email subject and template for client
                //include_once('emailClient.php');
		
		
		
		
		$subjectSales = 'You have a new client';
                $subjectClient = 'Thank you for choosing us';
		
		$messageSales = "
		<html><head>
        <title></title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <style type='text/css'>
            @media only screen and (max-device-width: 750px) {
            body   {  -webkit-text-size-adjust: none; }
            [class='VeHide']{ display: none !important;}
            [class='VeBody']{ width: 320px !important;}
            [class='VeMerge']{width: 100% !important;float: left !important;text-align: center !important;}
            [class='VeCTA']{ margin: auto !important;}
            [class='VeImages']{width:320px !important; height: auto !important;}
            [class='VeTop']{font-size: 20px !important; line-height: 20px !important;}
            [class='VePreviewText']{font-size: 9px !important; line-height: 10px !important; text-align: center !important;}
            }
        </style>
    </head>
    <body style='padding: 0px; margin: 0px;'>
        <table style='background-color: #f3f3f3;' cellpadding='0' cellspacing='0' border='0' width='100%'>
            
                <tbody><tr>
                    <td>
                    <table class='VeBody' style='border-collapse: collapse; background-color: #ffffff;' cellpadding='0' cellspacing='0' align='center' border='0' width='600'>
                        
                            <tbody><tr>
                                <td class='VeTop' style='font-size: 44px; line-height: 44px; background-color: #f3f3f3;'>
                                &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td class='VePreviewText' style='background-color: #f3f3f3; font-family: helvetica,sans-serif; font-size: 12px; color: #8b8b8b; line-height: 24px; text-align: left;'>
                              You have a new client
                                </td>
                            </tr>
                            <tr>
                                <td style='font-size: 15px; line-height: 15px; background-color: #f3f3f3;'>
                                &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <table class='VeBody' style='border-collapse: collapse; background-color: #ffffff; border: 1px solid #dcdcdc;' cellpadding='0' cellspacing='0' align='center' border='0' width='600'>
                                    
                                        <tbody><tr>
                                            <td>
                                            <table style='border-collapse: collapse; width: 100%;' cellpadding='0' cellspacing='0' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td style='width: 402px;' align='center'>
                                                   
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_01.gif' height='101' width='402'>
                                                      
                                                        </td>
                                                          <td style='width: 30px;' align='center'>
                                                       &nbsp;
                                                        </td>
                                                        <td style='width: 168px;' class='VeHide' align='center'>
                                                        <a title='' href='http://vebuilder.com/dashboard.php'>
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_04.gif' height='40' width='168'>
                                                        </a>
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <table style='border-collapse: collapse; width: 100%;' cellpadding='0' cellspacing='0' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td class='VeHide'>
                                                
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_06.gif' height='280' width='100'>
                                                  
                                                        </td>
                                                        <td align='center'>
                                                
                                                        <img class='VeImages' style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_07.gif' height='280' width='400'>
                                                       
                                                        </td>
                                                        <td class='VeHide'>
                                                      
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_08.gif' height='280' width='100'>
                                                
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <table style='width: 100%; border-collapse: collapse; font-family: helvetica,sans-serif; font-size: 14px; color: #555555; line-height: 22px; text-align: left; letter-spacing: 0.7px;' cellpadding='0' cellspacing='0' align='center' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td style='width: 5%;'>
                                                        &nbsp;
                                                        </td>
                                                        <td>
                                                        <br>
                                                       <p>Hi $sales,</p>
		A new client has used the vebuilder :)<br><br>
		<b>Company:</b> $company <br>
		<b>Website:</b> <a href='$websiteUrl'>$websiteUrl</a> <br>
		<b>Email:</b> <a href='mailto:$contactEmail'>$contactEmail</a><br>
		
		 <img src='http://vebuilder.com/newbuilder/$chatTemplate' heigh='150' width='200'> <img src='http://vebuilder.com/newbuilder/$contactTemplate' heigh='300' width='200'>
		
		
		
		<br><br>
		
		For more details, please login <a href='http://vebuilder.com/dashboard.php'>here</a>.
		<br><br>
		Plase provide the following link to tech/AM for the set up process:<br>
		<a href='http://vebuilder.com/details.php?info=$code'>http://vebuilder.com/newbuilder/details.php?info=$code</a><br><br>
		Thanks<br>
		Mr VeBuilder<br>
                                                        </td>
                                                        <td style='width: 5%;'>
                                                        &nbsp;
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='VeCTA'>
                                            <table style='border-collapse: collapse;' cellpadding='0' cellspacing='0' align='center' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td class='VeHide' style='width: 400px;'>
                                                        &nbsp;
                                                        </td>
                                                        <td style='width: 170px;'>
                                                 &nbsp;
                                                        </td>
                                                        <td class='VeHide' style='width: 30px;'>
                                                        &nbsp;
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='font-size: 30px; line-height: 30px;'>
                                            &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <table style='border-collapse: collapse; width: 100%;' cellpadding='0' cellspacing='0' align='center' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td class='VeHide'>
                                                   
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_14.gif' height='119' width='101'>
                                                    
                                                        </td>
                                                        <td align='center'>
                                                     
                                                        <img class='VeImages' style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_15.gif' height='119' width='397'>
                                                     
                                                        </td>
                                                        <td class='VeHide'>
                                                     
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_16.gif' height='119' width='102'>
                                                     
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='font-size: 28px; line-height: 28px;'>
                                            &nbsp;
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style='font-size: 10px; line-height: 10px;'>
                                            &nbsp;
                                            </td>
                                        </tr>
                                    
                                </tbody></table>
                                </td>
                            </tr>
               
                            </tr>
                        
                    </tbody></table>
                    </td>
                </tr>
            
        </tbody></table>
    
</body></html>";

$emailSent = str_replace(' ', '.', $sales);

$messageClient = "
		<html><head>
        <title></title>
        <meta http-equiv='Content-Type' content='text/html; charset=utf-8'>
        <style type='text/css'>
            @media only screen and (max-device-width: 750px) {
            body   {  -webkit-text-size-adjust: none; }
            [class='VeHide']{ display: none !important;}
            [class='VeBody']{ width: 320px !important;}
            [class='VeMerge']{width: 100% !important;float: left !important;text-align: center !important;}
            [class='VeCTA']{ margin: auto !important;}
            [class='VeImages']{width:320px !important; height: auto !important;}
            [class='VeTop']{font-size: 20px !important; line-height: 20px !important;}
            [class='VePreviewText']{font-size: 9px !important; line-height: 10px !important; text-align: center !important;}
            }
        </style>
    </head>
    <body style='padding: 0px; margin: 0px;'>
        <table style='background-color: #f3f3f3;' cellpadding='0' cellspacing='0' border='0' width='100%'>
            
                <tbody><tr>
                    <td>
                    <table class='VeBody' style='border-collapse: collapse; background-color: #ffffff;' cellpadding='0' cellspacing='0' align='center' border='0' width='600'>
                        
                            <tbody><tr>
                                <td class='VeTop' style='font-size: 44px; line-height: 44px; background-color: #f3f3f3;'>
                                &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td class='VePreviewText' style='background-color: #f3f3f3; font-family: helvetica,sans-serif; font-size: 12px; color: #8b8b8b; line-height: 24px; text-align: left;'>
                            Thanks For Visiting
                                </td>
                            </tr>
                            <tr>
                                <td style='font-size: 15px; line-height: 15px; background-color: #f3f3f3;'>
                                &nbsp;
                                </td>
                            </tr>
                            <tr>
                                <td>
                                <table class='VeBody' style='border-collapse: collapse; background-color: #ffffff; border: 1px solid #dcdcdc;' cellpadding='0' cellspacing='0' align='center' border='0' width='600'>
                                    
                                        <tbody><tr>
                                            <td>
                                            <table style='border-collapse: collapse; width: 100%;' cellpadding='0' cellspacing='0' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td style='width: 402px;' align='center'>
                                                   
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-sales_01.gif' height='101' width='402'>
                                                      
                                                        </td>
                                                          <td style='width: 30px;' align='center'>
                                                       &nbsp;
                                                        </td>
                                                        <td style='width: 168px;' class='VeHide' align='center'>
                                                   
                                                   </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <table style='border-collapse: collapse; width: 100%;' cellpadding='0' cellspacing='0' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td class='VeHide'>
                                                
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-customer_06.gif' height='280' width='100'>
                                                  
                                                        </td>
                                                        <td align='center'>
                                                
                                                        <img class='VeImages' style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-customer_07.gif' height='280' width='400'>
                                                       
                                                        </td>
                                                        <td class='VeHide'>
                                                      
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-customer_08.gif' height='280' width='100'>
                                                
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <table style='width: 100%; border-collapse: collapse; font-family: helvetica,sans-serif; font-size: 14px; color: #555555; line-height: 22px; text-align: left; letter-spacing: 0.7px;' cellpadding='0' cellspacing='0' align='center' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td style='width: 5%;'>
                                                        &nbsp;
                                                        </td>
                                                        <td>
                                                        <br>
                                                       <p>Dear Customer,  <br>  <br>

Thank you for your recent visit to the site. This email is confirmation of your request to use VeApps, via our VeBuilder site.
</p>
		A preview of the campaign designs can be found below:<br><br>
		
		 <img src='http://vebuilder.com/newbuilder/$chatTemplate' heigh='150' width='200'> <img src='http://vebuilder.com/newbuilder/$contactTemplate' heigh='300' width='200'>
		
		
	
		<br><br>
		If you have further questions regarding the setup of your campaign it is recommended to get in touch with your Digital Consultant $sales via <a href='mailto:$emailSent.veinteractive.com'>email</a>.<br><br>
		We look forward to getting your campaign live shortly.<br><br>

Kind regards,<br><br>

VeBuilder Tech Support

                                                        </td>
                                                        <td style='width: 5%;'>
                                                        &nbsp;
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class='VeCTA'>
                                            <table style='border-collapse: collapse;' cellpadding='0' cellspacing='0' align='center' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td class='VeHide' style='width: 400px;'>
                                                        &nbsp;
                                                        </td>
                                                        <td style='width: 170px;'>
                                                 &nbsp;
                                                        </td>
                                                        <td class='VeHide' style='width: 30px;'>
                                                        &nbsp;
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='font-size: 30px; line-height: 30px;'>
                                            &nbsp;
                                            </td>
                                        </tr>
                                        <tr>
                                            <td>
                                            <table style='border-collapse: collapse; width: 100%;' cellpadding='0' cellspacing='0' align='center' border='0'>
                                                
                                                    <tbody><tr>
                                                        <td class='VeHide'>
                                                   
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-customer_14.gif' height='119' width='101'>
                                                    
                                                        </td>
                                                        <td align='center'>
                                                     
                                                        <img class='VeImages' style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-customer_15.gif' height='119' width='397'>
                                                     
                                                        </td>
                                                        <td class='VeHide'>
                                                     
                                                        <img style='display: block; border-width: 0px;' alt='' src='http://vebuilder.com/newbuilder/images/email/email_for-the-customer_16.gif' height='119' width='102'>
                                                     
                                                        </td>
                                                    </tr>
                                                
                                            </tbody></table>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style='font-size: 28px; line-height: 28px;'>
                                            &nbsp;
                                            </td>
                                        </tr>
                                    
                                        <tr>
                                            <td style='font-size: 10px; line-height: 10px;'>
                                            &nbsp;
                                            </td>
                                        </tr>
                                    
                                </tbody></table>
                                </td>
                            </tr>
               
                            </tr>
                        
                    </tbody></table>
                    </td>
                </tr>
            
        </tbody></table>
    
</body></html>";
		
		
		
        
				
		
		// Always set content-type when sending HTML email
		$headers = "MIME-Version: 1.0" . "\r\n";
		$headers .= "Content-type:text/html;charset=UTF-8" . "\r\n";
		
		// More headers
		$headers .= 'From: <admin@vebuilder.com>' . "\r\n";
		
		if ($sales =="None"){
		$to = 'matthieu.deliry@veinteractive.com';
		}
		else{
		$to = 'matthieu.deliry@veinteractive.com';
		//$emailSent = str_replace(' ', '.', $sales);
		//$to = $emailSent.'@veinteractive.com';		
		}
		
		mail($to,$subjectSales,$messageSales,$headers);
		
                mail($to,$subjectClient,$messageClient,$headers);

		
		$_SESSION["submit"] = "done";
		
		
			  
	 header("Location: http://vebuilder.com/newbuilder/thanks.php");
	}	 

?>