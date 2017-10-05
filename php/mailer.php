<?php
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$servername = "localhost";
$username = "devMX";
$password = "L0g1nTio2";
$dbname = "LOGIN-2017";

$con = mysqli_connect($servername, $username, $password, $dbname);

$pk   = $_POST['pk'];
$email = $_POST['email'];
$query="SELECT `COL 1` from `table 4` LIMIT 1";
$var = mysqli_fetch_assoc(mysqli_query($con,$query));
$mailcode =  $var['COL 1'];
$postQuery = "UPDATE  `registered` SET  `mailcode` =  '$mailcode' WHERE  `pk` = '$pk' AND  `email` =  '$email'";
if(mysqli_query($con,$postQuery) == 1)
{
$delQuery = "DELETE FROM `table 4` WHERE `COL 1`= '$mailcode' ";
mysqli_query($con,$delQuery);
$subject = "LOGIN 2017 Registration - Reg";
$message = '
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml" xmlns:v="urn:schemas-microsoft-com:vml" xmlns:o="urn:schemas-microsoft-com:office:office">
<head>  
    <meta name="viewport" content="width=device-width">
    <title></title> 
    <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">               
    <style>
        html,
        body {
            margin: 0 auto !important;
            padding: 0 !important;
            height: 100% !important;
            width: 100% !important;
        }

        
        * {
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        
        div[style*="margin: 16px 0"] {
            margin:0 !important;
        }

        
        table,
        td {
            mso-table-lspace: 0pt !important;
            mso-table-rspace: 0pt !important;
        }

        
        table {
            border-spacing: 0 !important;
            border-collapse: collapse !important;
            table-layout: fixed !important;
            margin: 0 auto !important;
        }
        table table table {
            table-layout: auto;
        }

        
        img {
            -ms-interpolation-mode:bicubic;
        }

        
        *[x-apple-data-detectors],	
        .x-gmail-data-detectors, 	
        .x-gmail-data-detectors *,
        .aBn {
            border-bottom: 0 !important;
            cursor: default !important;
            color: inherit !important;
            text-decoration: none !important;
            font-size: inherit !important;
            font-family: inherit !important;
            font-weight: inherit !important;
            line-height: inherit !important;
        }

        
        .a6S {
	        display: none !important;
	        opacity: 0.01 !important;
        }
        
        img.g-img + div {
	        display:none !important;
	   	}

        
        .button-link {
            text-decoration: none !important;
        }

        @media only screen and (min-device-width: 375px) and (max-device-width: 413px) { /* iPhone 6 and 6+ */
            .email-container {
                min-width: 375px !important;
            }
        }

    </style>
    
    <style>


        .button-td,
        .button-a {
            transition: all 100ms ease-in;
        }
        .button-td:hover,
        .button-a:hover {
            background: #555555 !important;
            border-color: #555555 !important;
        }


        @media screen and (max-width: 600px) {


			.email-container p {
				font-size: 17px !important;
				line-height: 22px !important;
			}

		}

	</style>


</head>
<body width="100%" bgcolor="#fff" style="margin: 0; mso-line-height-rule: exactly;">
	<center style="width: 100%; background: #fff; text-align: left;">


		<div style="display:none;font-size:1px;line-height:1px;max-height:0px;max-width:0px;opacity:0;overflow:hidden;mso-hide:all;font-family: sans-serif;">
		</div>
		<div style="background-color:#fff;max-width: 600px; margin: auto;" class="email-container">
			<table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
				<tr>
					<td style="padding: 20px 0; text-align: center;font-size: 14px;">
						<h1 > Thank you for registering with LOGIN 2017 </h1>
					</td>
				</tr>
			</table>
			<table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" width="100%" style="max-width: 600px;">
				
				<tr>
					<td style="background-color:#102737" align="center">
						<img style="background-color:#102737" src="https://d15k2d11r6t6rl.cloudfront.net/public/users/Integrators/BeeProAgency/76001_51296/unnamed.png" width="600" height="" alt="alt_text" border="0" align="center" style="width: 100%; max-width: 600px; height: auto; background: #dddddd; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555; margin: auto;" class="g-img">
					</td>
				</tr>
				<tr>
					<td bgcolor="#ffffff">
						<table role="presentation" cellspacing="0" cellpadding="0" border="0" width="100%">
							<tr>
								<td style="padding: 40px; font-family:  sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
									<h1 style="margin: 0 0 10px 0; font-family:  sans-serif; font-size: 20px; line-height: 27px; color: #333333; font-weight: 400px;">You will be now able to participate in the events of LOGIN 2017. Use this 
							login code individually only with which you will be allowed to attend the events through out. 
							Carry the code with you for Onsite events too.</h1>									
								</td>
							</tr>
							<tr>
								<td style="padding: 0 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
					
									<table role="presentation" cellspacing="0" cellpadding="0" border="0" align="center" style="margin: auto;">
										<tr>
										   <td style="font-size: 25px;"> <strong>LOGIN CODE :</strong></td>
											<td style="border-radius: 3px; background: #222; text-align: left;" class="">
												<h1 style="font-size: 18px;color:white;">'.$mailcode.'</h1>	
											</td>
										</tr>
									</table>
					
								</td>
							</tr>
							<tr>
								<td style="padding: 40px; font-family: sans-serif; font-size: 15px; line-height: 20px; color: #555555;">
									<h2 style="margin: 0 0 10px 0; font-family: sans-serif; font-size: 18px; line-height: 21px; color: #333333; font-weight: bold;">Important Note</h2>
									<p style="text-align: justify;font-weight: bold;">
		              Please carry the belongings with you:<br>
   		    		  1) Bonafide Certificate.<br>
	    			  2) College Identity Card.<br></p>
								</td>
							</tr>
						</table>
					</td>
				</tr>
			</table>			
    </center>
</body>
</html>
';


$Header = "MIME-Version: 1.0" . "\r\n";
$Header .= "Content-type:text/html;charset=UTF-8" . "\r\n";
$Header .= 'From: Login-2017<info@psglogin.in>' . "\r\n";


// Set content-type header for sending HTML email
ini_set('SMTP', "relay-hosting.secureserver.net");
ini_set('smtp_port', "25");
echo mail($email, $subject,$message, $Header);
}
else
{
	echo 100;
}
?>