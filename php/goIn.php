<?php
//DEPRECATE warning will come so type this two lines in the top of the page to protect from sql injection
error_reporting(E_ALL & ~E_NOTICE);
error_reporting(E_ALL & ~E_NOTICE & ~E_DEPRECATED);
$servername = "localhost";
$username = "devMX";
$password = "L0g1nTio2";
$dbname = "LOGIN-2017";

// Create connection
$con = mysqli_connect($servername, $username, $password, $dbname);
    $pk  = $_POST['pk'];
    $cn  = $_POST['cn'];
    $name = strtoupper($_POST['name']);
    $genr    = $_POST['genr'];
    $rn  = strtoupper($_POST['rn']);
    $email       = $_POST['email'];
    $phone    = $_POST['phone'];
    $acc   = $_POST['acc'];
$pass = "/^[A-Za-z][A-Za-z0-9]{5,31}$/";
$namesafety = "/^[A-Za-z ][A-Za-z0-9 ]{5,31}$/";
$rnsafety="/([A-Za-z0-9]*)\w+/";
$phonesafety="/([56789]\\d{9})/";

if (preg_match($pass,$pk))
{
if (1)
	{    
			if(preg_match($rnsafety, $rn))
			{
				if(filter_var($email, FILTER_VALIDATE_EMAIL))
				{
					if(1)
				        {
						$pk = stripslashes($pk);
						$name = stripslashes($name);
						$rn = stripslashes($rn);
						$email= stripslashes($email);
						$phone = stripslashes($phone);
						$pk = mysqli_real_escape_string($con,$pk);
						$name = mysqli_real_escape_string($con,$name);
						$rn= mysqli_real_escape_string($con,$rn);
						$email = mysqli_real_escape_string($con,$email);
						$phone = mysqli_real_escape_string($con,$phone);						                                                
						
						$query = "INSERT INTO `registered`(`pk`, `cn`, `name`, `genr`, `rn`, `email`, `phone`, `acc`) VALUES ('$pk','$cn','$name','$genr','$rn','$email','$phone','$acc')";	
																
						if (mysqli_query($con,$query)) 
						{
							echo 1;		
							exit();											
						}
						else
						{
							echo 0;
							exit();
						}
					       
				        }
						else
						{
							echo "phone";
							exit();
						}							
			                }				
					else
					{
						echo"mail";
						exit();
					}
				}
				else
				{
					echo"rn";
					exit();
				}
			}
			else
			{
				echo "name";
				exit();				
			}
		}
		else
		{
		     echo "pass";
		     exit();
	        }

	        mysqli_close($con);
	       
?>

