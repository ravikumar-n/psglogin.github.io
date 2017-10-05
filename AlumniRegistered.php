<!DOCTYPE html>
<html>
<head>
  <title>AlumniReg</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/sample.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
  <style>

  h4
  {
   color: #fff; font-family: 'Signika',sans-serif; font-size: 18px; font-weight: 500; line-height: 30px; margin: 0 0 24px; 
  }

  </style>


</head>

<body style="background-color:#126bbf;">

<div class="container">            
            <div class="col-md-6 col-sm-8 col-xs-12 col-lg-5 col-md-offset-3 col-sm-offset-2 col-xs-12 col-lg-offset-3 ">

 <?php           
$con=mysqli_connect("localhost","devMX","L0g1nTio2","LOGIN-2017");
// Check connection
if (mysqli_connect_errno())
{
echo "Failed to connect to MySQL: " . mysqli_connect_error();
}


$re = mysqli_query($con,"select count(rn) from aluminreg2");
$rowcount = mysqli_fetch_assoc($re);
$cnt = $rowcount['count(rn)'] - 1;
echo "<center><h2 style='color:#fff;'> ".$cnt." ALUMNI REGISTERED</h2></center>";
?>
             <div class="panel panel-login">
               <div class="panel-body">

        <div class="table-responsive">

                
              <table id="mytable" class="table table-bordred table-striped">
                  <thead>
                    <th>Roll No.</th>
                    <th>Name</th>
                  </thead>
                      <tbody>

<?php
$result = mysqli_query($con,"SELECT name,rn FROM aluminreg2 ORDER BY rn");



while($row = mysqli_fetch_array($result))
{
echo "<tr>";
if(strcmp($row['rn'],'12MX76') != 0){
echo "<td>" . $row['rn'] . "</td>";
echo "<td>" . strtoupper($row['name']) . "</td>";
echo "</tr>";
}
}

mysqli_close($con);
?>

</tbody>

</div>
</div>
</div>
</table>
</div>

            <center><button onclick="goBack();" class="btn btn-primary" >Back</button></center>

            </div>
          </div>
          </div>
          </div>

    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
    	function goBack() {
    		window.location.href = "https://psglogin.in/AlumniRegister.php";
    	}
    </script>
</body>
</html>