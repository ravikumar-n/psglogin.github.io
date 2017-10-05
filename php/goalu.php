 <?php
// error_reporting(E_ALL & ~E_NOTICE);
// error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
 //6Lc9cC0UAAAAAF3YEvhDWSK8NlRdA_Dfh4r1klyA
$servername = "localhost";
$username = "devMX";
$password = "L0g1nTio2";
$dbname = "LOGIN-2017";
require_once('recaptchalib.php');

$csss = $_POST['captcha'];



$verify=file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=6LciqDAUAAAAAN8BZaumqRrc02osZ8WMJp51imsK&response=$csss");



$captcha_success=json_decode($verify);
if ($captcha_success->success==false) 
{
    echo "captcha invalid"; 
}
else
{
// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);

    $pk    = $_POST['pk'];
    $rn    = $_POST['rn'];
    $name  = strtoupper($_POST['name']);
    $from  = $_POST['from'];
    $to    = $_POST['to'];
    $comp  = $_POST['comp'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $acc   = $_POST['acc'];
   
//$pass = "/^[A-Za-z0-9]{7}$/";
$namesafety = "/^[a-zA-Z]{1}[a-zA-Z ]+$/";
$rnsafety="/([A-Za-z0-9]*)\w+/";
$phonesafety="/([56789]\\d{9})/";

if(preg_match($namesafety,$name))
	{    
			if(preg_match($rnsafety, $rn))
			{
				if(filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					if(preg_match($phonesafety, $phone))
						{

						$name = stripslashes($name);
						$rn = stripslashes($rn);
						$email= stripslashes($email);
						$phone = stripslashes($phone);
						$comp  = stripslashes($comp);
						$acc  = stripslashes($acc);
						$name = mysqli_real_escape_string($con,$name);
						$rn= mysqli_real_escape_string($con,$rn);
						$email = mysqli_real_escape_string($con,$email);
						$phone = mysqli_real_escape_string($con,$phone);
						$comp = mysqli_real_escape_string($con,$comp);
						$acc = mysqli_real_escape_string($con,$acc);									

			                        $query="INSERT INTO `aluminreg2`(`name`,`alumnus`, `rn`, `yearfrom`,`yearto`,`comp`, `email`, `phone`, `acc`) VALUES ('$name',1,'$rn', '$from','$to','$comp','$email','$phone','$acc')";
			                        echo mysqli_query($con,$query);
			                        exit();                    
                         }
                         else
                        {
                             echo "phone";
                             exit();
                         }
                     }
                     else
                     {
                         echo "mail";
                         exit();
                     }
                 }
                 else
                 {
                     echo "rn";
                     exit();
                 }
         }
         else
         {
             echo "name";
             exit();
        }
}
mysqli_close($con);
?>