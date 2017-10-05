<!DOCTYPE html>
<html>
<head>
  <title>StudentReg</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

 
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <link rel="stylesheet" type="text/css" href="css/sample.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
   <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"/>
   <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
   <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.css" rel="stylesheet">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/sweetalert/1.1.3/sweetalert.min.js"></script>
<style>
    #fullDiv
    {
        background-color: #eee;
        margin-top: 0%;
    }
    em{
    color: red !important;
    font-weight: normal !important;
   }
  h1 
  {
   color: #ffffff; font-family: 'Signika',sans-serif; font-size: 35px; font-weight: 400; align:center;line-height: 30px; margin: 0 0 24px; text-align: center; text-transform: uppercase; 
   
  }
  h2 
  {
   color: #333; font-family: 'Signika',sans-serif; font-size: 30px; font-weight: 800; line-height: 30px; margin: 0 0 24px; text-align: center; 
  }
  
  p,h4
  {
   color: #fff; font-family: 'Signika',sans-serif; font-size: 18px; font-weight: 500; line-height: 30px; margin: 0 0 24px; 
  }
  li
  {
     text-align:justify;
     line-height: 30px;
     font-size: 20px;
     color:white;
  }
@media only screen and (min-width: 200px) 
{
  h1 
  {
   color: #ffffff; font-family: 'Signika',sans-serif; font-size: 22px; font-weight: 400; line-height: 30px; margin: 0 0 24px; text-align: center; text-transform: uppercase; 
  }
}

/* SMARTPHONES LANDSCAPE */
@media only screen and (min-width: 480px) 
{

}

/* TABLETS PORTRAIT */
@media only screen and (min-width: 768px) 
{

}


/* TABLET LANDSCAPE / DESKTOP */
@media only screen and (min-width: 1024px) 
{
     
} 
</style>

</head>
<body style="background-color:#126bbf;padding-top:0px;">

  <div id="err" class="alert alert-danger alert-dismissable" style="float:left;position:fixed; z-index:1;">
    <strong></strong> <label for="allert"></label>
  </div>
  <a href="https://www.psglogin.in"><i style="font-size:60px;margin-left:5%;margin-top:1%;color:white;" class="fa fa-home"></i></a>
  <div class="container">
   <div class="row col-md-6" style="margin-left:6px;">
      <p style="text-align:justify;color:white;"> 
      <h1 style="color:white;margin-right:10%;">WELCOME TO LOGIN 2017 REGISTRATION</h1>
      <h1 style="color:white;margin-right:12%;">INSTRUCTIONS</h1>
<ul>
 <li style="list-style:disc;"><h4>Eligibility : MCA,(M.SC,M.E,M.TECH) - Computer Streams</h4></li>
 <li style="list-style:disc;"><h4>Registration is must for both online & onsite events.</h4></li>
 <li style="list-style:disc;"><h4>Individual registration is mandatory.</h4></li>
 <li style="list-style:disc;"><h4>Registration fees : Rs.100/- (per head).</h4></li> 
 <li style="list-style:disc;"><h4>Accommodation Free*</h4></li> 
 <li style="list-style:disc;"> <h4>Maximum of 10 participants are allowed from each college.</h4></li>
 <li style="list-style:disc;"><h4>After the registration you will be provided with a individual Login code which will be sent to your mail only with which you will be allowed to participate in the events(both online & onsite).</h4></li>
 <li style="list-style:disc;"> <h4>In case of any counterfeit activites, the college will be disqualified as of the decision made by the organising committee.</h4></li>
  <li style="list-style:disc;"><h4>For registration related queries &nbsp;&nbsp;&nbsp;:&nbsp;&nbsp;7904495877 </h4></li>
</ul>
	
    <div style="margin-bottom:30px;">
   <a target="_blank" href="https://www.facebook.com/psg.symposium/"><i class="fa fa-facebook-square" style="font-size:48px;color:white;margin-right:10px"></i></a>
      <a target="_blank" href="https://www.linkedin.com/in/login-psgtech"><i class="fa fa-linkedin-square" style="font-size:48px;color:white;margin-right:10px"></i></a>
      <a target="_blank" href="https://www.instagram.com/login_psgtech/"><i class="fa fa-instagram" style="font-size:48px;color:white;margin-right:10px"></i></a>
      <a target="_blank" href="https://www.twitter.com/login_psgtech/"><i class="fa fa-twitter-square" style="font-size:48px;color:white;margin-right:10px"></i></a>
      <a target="_blank" href="https://youtu.be/I36oGPoWmjA"><i class="fa fa-youtube-square" style="font-size:48px;color:white"></i></a>

   </div>
   </div>       
   <!--div class="row col-md-12">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row"-->            
            <div class="col-md-6">                   
            <div class="panel panel-login">
           <div class="panel-body">
              <form id="login" action="" method="post" role="form" style="display: block;" class="form-horizontal">
                <center><h2>REGISTRATION</h2></center>
    <div class="form-group">
      <div>
        <input type="text" class="form-control" id="pk" name="pk" onKeyUp="pkKeyPress()" placeholder="Pass Key" maxlength="8" autocomplete="off" required="">          
      </div>
    </div>
    <script>
        function pkKeyPress()
            {   
                $('#err').hide();           
                var pk = document.getElementById("pk");
                var s = pk.value;
                var n = s.length;name
                if(n == 8)          
                {
                     verif();
                }
                else
                {     
                $('#uname').val('');
                $('#genr').attr('checked', false);
                $('#gen').attr('checked', false);
                $('#rn').val('');
                $('#email').val('');        
                $('#phone').val('');   
                $('#a1').attr('checked', false);
                $('#a2').attr('checked', false);        
                $('#clg').html("College name");             
                document.getElementById("uname").setAttribute('disabled',true);
                document.getElementById("genr").setAttribute('disabled',true);  
                document.getElementById("gen").setAttribute('disabled',true);                 
                document.getElementById("rn").setAttribute('disabled',true);
                document.getElementById("email").setAttribute('disabled',true);
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
               }
            }            
    </script> 
    <div id='clg' class="form-group" style="color:green;">
      <div>
      <label for="cn">College Name</label>
        <input type="text" class="form-control" style="color:red;" id="cn" name="cn" disabled>
      </div>
    </div>

     <div class="form-group">
      <div>
          <input type="text" class="form-control" id="uname" name="uname" placeholder="participant name"  onkeyup="SetTB0Status(this,'genr','gen')" autocomplete="off" style="text-transform:uppercase" required="" disabled maxlength="30">
      </div>
    </div>
    <div class="form-group">
    
<label class="radio-inline"><input type="radio" value="male"  id="genr" name="genr"  disabled onchange=check()>Male</label>
<label class="radio-inline"><input type="radio"  value="female"  id="gen" name="genr"  disabled onchange=check()>Female</label>
  
    </div>

     <div class="form-group">
      <div>
        <input type="text" class="form-control" id="rn" name="rn" placeholder="Roll Number" onkeyup="SetTBStatus(this,'email')"  autocomplete="off" required="" disabled>
      </div>
    </div>
    <div class="form-group">
      <div>
        <input type="email" class="form-control" id="email" name="email" placeholder="EmailID" onkeyup="SetTB1status(this,'phone')" autocomplete="off" required=""  disabled>
      </div>
      </div>     
    <div class="form-group">
      <div>
        <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone Number" onkeyup="SetTB2status(this,'a1','a2')" autocomplete="off" maxlength="10" required="" disabled >
      </div> 
    </div>  
      <div class="form-group">
      <label for="acc">Do you need Accommodation?</label>
    <br>
<label class="radio-inline"><input type="radio" value="yes" id="a1" name="acc"  disabled>Yes</label>
<label class="radio-inline"><input type="radio"  value="no" id="a2" name="acc"  disabled>No</label>
    </div>

    <div class="panel-heading">
      <div class="row" style="margin-top: 5px; margin-left: 30%;">      
      <div class="col-xs-6 tabs">
                   <center><button id="mybtn" class="btn btn-primary g-recaptcha" data-sitekey="6Lc9cC0UAAAAANEADZ4MA9Iuysr5Zslkzk_nJZQx" data-callback="insert">Register</button></center>
       </div>
      </div>
      </div>

              </form>
            </div>
            </div>
            </div>
          <!--/div>
        </div>
      </div>
    </div>
  </div>
</div-->

<script type="text/javascript" src="js/jquery-1.11.1.js"></script>
<script type="text/javascript" src="js/jquery.validate.js"></script>
<!--script type="text/javascript" src="js/bootstrap.min.js"></script>
<!--api link-->
<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script type="text/javascript">

function check()
{   
    $('#err').hide();
    var result = document.querySelector('input[name="genr"]:checked').value;
    if(result=="Yes")
    {
        document.getElementById("rn").setAttribute('disabled', true);
    }
    else
    {
                $('#rn').val('');
                $('#email').val('');        
                $('#phone').val('');   
                $('#a1').attr('checked', false);
                $('#a2').attr('checked', false);         
        document.getElementById("rn").removeAttribute('disabled');        
    }
}
function SetTB0Status(sender, target1 , target2)
{
            $('#err').hide();
            if (/^[A-Za-z ][A-Za-z ]{2,31}$/.test(sender.value))
            {
                document.getElementById(target1).removeAttribute('disabled');
            	document.getElementById(target2).removeAttribute('disabled');	
            }
            else
            {
                $('#genr').attr('checked', false);
                $('#gen').attr('checked', false);
                $('#rn').val('');
                $('#email').val('');        
                $('#phone').val('');   
               $('#a1').attr('checked', false);
                $('#a2').attr('checked', false);                            
                document.getElementById(target1).setAttribute('disabled',true);  
                document.getElementById(target2).setAttribute('disabled',true);                 
                document.getElementById("rn").setAttribute('disabled',true);
                document.getElementById("email").setAttribute('disabled',true);
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }     
}
function SetTBStatus(sender, target)
{
           $('#err').hide();
            if (/^[A-Za-z0-9][A-Za-z0-9]{3,31}$/.test(sender.value))
            {
            	document.getElementById(target).removeAttribute('disabled');
            }
            else
            {
                $('#email').val('');        
                $('#phone').val('');   
                $('#a1').attr('checked', false);
                $('#a2').attr('checked', false);
                document.getElementById(target).setAttribute('disabled',true);
                document.getElementById("email").setAttribute('disabled',true);
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }     
}
function SetTB1status(sender, target)
{
            $('#err').hide();
            if (/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(sender.value))
            {
            	document.getElementById(target).removeAttribute('disabled');
            }
            else
            {
                $('#phone').val('');   
                $('#a1').attr('checked', false);
                $('#a2').attr('checked', false); 
                document.getElementById(target).setAttribute('disabled',true);
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true);
            }     
}
function SetTB2status(sender, target1 , target2)
{
            $('#err').hide();
            if (/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/.test(sender.value))
            {
            	document.getElementById(target1).removeAttribute('disabled');
            	document.getElementById(target2).removeAttribute('disabled');
            }
            else
            {
                $('#a1').attr('checked', false);
                $('#a2').attr('checked', false); 
                document.getElementById(target1).setAttribute('disabled',true);
                document.getElementById(target2).setAttribute('disabled',true);                
            }     
}
var value=0;
   $(document).ready( function () 
    {  
      $('#genr').attr('checked', false);
      $('#gen').attr('checked', false);
      $('#a1').attr('checked', false);
      $('#a2').attr('checked', false);  
      $('#err').hide();
      jQuery.validator.addMethod("EMAIL", function(value, element) 
      {  
        ///^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      return this.optional( element ) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value );      
      }, "Invalid Email ID");
      
      jQuery.validator.addMethod("phoneno", function(phone_number, element) {
          phone_number = phone_number.replace(/\s+/g,"");
          return this.optional(element) || phone_number.length > 9 && 
          phone_number.match(/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/);
      }, "<br/>Invalid contact Number");
      jQuery.validator.addMethod("user", function(value, element) 
      {
        return this.optional(element) || /^[A-Za-z ][A-Za-z ]{2,31}$/.test(value);
      },"Please enter the valid name");
      jQuery.validator.addMethod("roll", function(value, element) 
      {
        return this.optional(element) || /^[A-Za-z0-9][A-Za-z0-9]{2,31}$/.test(value);
      },"Roll number shouldn't contain any Special characters");
      jQuery.validator.addMethod("upper", function(value, element) 
      {
        return this.optional(element) || /^[A-Z0-9]*$/.test(value);
      },"Please enter the UPPERCASE");
      
      jQuery.validator.addMethod("gender", function(value, element) 
      {
        if ($('input[name=chest]:checked').val() ) 
        {         
            return false;
        }
        else
        {
          return true;
        }
      },"</br>please select the gender");
      
      jQuery.validator.addMethod("acc", function(value, element) 
      {
        if ($('input[name=chest]:checked').val() ) 
        {         
            return false;
        }
        else
        {
          return true;
        }
      },"</br>please select the Accomadation");
 
      value = $("#login").validate( 
      {
        errorElement: 'span',
        errorClass: 'help-inline',
        rules: 
        {
          pk:
          {
            required :true,
            minlength:8,
            upper:true
          },
          uname:
          {
            required:true,            
            user:true,                              
          },
          rn:
          {
            required:true,            
            roll:true,
          },
          email:"required EMAIL",
          phone:
          {
            required:true,
            minlength:10,
            phoneno:true
          },
          genr:
          {
            required:true,
            gender:true
          },
          acc:
          {
            required:true,
            acc:true
          }
        },        
        messages: 
        {
          uname: 
          {
            required: "Required Field", 
            user:"Name shouldn't contain any Special characters & Numbers",
          },
          roll: 
          {
            required: "Required Field", 
            roll:"Roll number shouldn't contain any Special characters",
          },
          pk:
          {
            required :"Required Field",
            minlength:"value length should be 8",
            upper:"Field must contain Uppercase & Numerals only"            
          },
          email:
          {
            required:"Required Field",
            EMAIL:"Invalid Email ID"
          },
          phone: 
          {
            required: "Required Field",
            minlength:"Invalid contact number",
            phone:"Invalid contact number"        
          },
          genr:
          {
            required:"please select your genter",
            acc:"please choose gender"
          },
          acc:
          {
            required:"please select your Accomation",
            acc:"please choose Yes or No"
          },          
        },        
        errorElement: "em"              
      } );
    } );

   function validate(vall, expp) 
   {
        var patt = new RegExp(expp);
        var res = patt.test(vall);
        if (res) {
          return true;
        } else {
          return false;
        }
      }


var cn,ch=0;

function verif()
{   
var pk = $('#pk').val();
  $.ajax({
  type: 'POST',
  url: 'php/getClg.php',
  data: {pk:pk},
  beforeSend:function()
  {
    // this is where we append a loading image    
  },
  success:function(data)
  {
    console.log(data);
    // successful request; do something with the data
	if(data != "" && data != "15" && data != "10")
	{        
	console.log("YES");
	$("#uname").removeAttr('disabled');
	$('#clg').html(data);
	cn = data;
	}
	else
	{
	    console.log(data);
		if(data == "15")
		{
			//$('#cn').val("Participants limit exceeded!"); 
			$('#clg').html("Participants limit exceeded!");
		}
		else if(data == "10")
		{		       
			$('#clg').html("Invalid passkey!");	
			$('#cn').val("Invalid passkey!");	
					
		}
		else
		{ 
		 	//$('#cn').val("Invalid passkey!");
		}
	}    
  },
  error:function()
  {
    $('#ajax-panel').html('<center><p class="error"><strong>Oops!</strong>Pass Key Required</p></center>');
  }
});
}

function insert()
{
console.log("Saa");
$('#err').hide();

var pk = $('#pk').val();
var name = $('#uname').val();
var genr = $("input[name='genr']:checked").val();
var rn = $('#rn').val();
var email = $('#email').val();
var phone = $('#phone').val();
var acc = $("input[name='acc']:checked").val();
              if (pk != "" && validate($('#pk').val(), "^[A-Z0-9]*$"))
              {
                
                if (name != "" && validate($('#name').val(), "^[a-zA-Z0-9_ ]*$")) 
                {
                 if ($("#genr").is(':checked') || $("#gen").is(':checked')) 
                  {
                    if (rn != "" && validate($('#rn').val(), "^[a-zA-Z0-9_]*$") ) {
                      if(email != "" && validate($('#email').val(),"^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$")){
                      
                      if (phone!= "" &&  validate($('#phone').val(), "\\+?\\d[\\d -]{8,12}\\d")  ) {
                                         if ($("#a1").is(':checked') || $("#a2").is(':checked')) 
                                         {
                              $.ajax({
                              type: 'POST',
                              url: 'php/goIn.php',
                              data: {pk:pk,cn:cn,name:name,genr:genr,rn:rn,email:email,phone:phone,acc:acc},
                              beforeSend:function(){
                                // this is where we append a loading image                                
                              },
                              success:function(data){
                                // successful request; do something with the data
                                console.log(data + "ss");
                                if(data == 1){
                                  console.log("inserted and enterred in mail");
                                  $.ajax({
                              type: 'POST',
                              url: 'php/mailer.php',
                              data: {pk:pk,email:email},
                              beforeSend:function(){
                                // this is where we append a loading image                                
                              },
                              success:function(data){
                                // successful request; do something with the data
                                console.log(data);
                                if(data == 1){
                                     swal("Registered Successfully");
                                     //window.location.reload();
                                }else{
                             jQuery('label[for="allert"]').html('Already Registered RollNo/Email/MobileNo');
                            $('#err').show();
                             ch = 1;
                                } 
                              },
                              error:function(){
                                // failed request; give feedback to user
                                console.log("err");
                                $('#ajax-panel').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
                              }
                              });
                                }else{
                                  console.log(data);
                                  console.log("elsed");
                                  jQuery('label[for="allert"]').html('Already Registered RollNo/Email/MobileNo');
                                  $('#err').show();
                                }
                              },
                              error:function(){
                                // failed request; give feedback to user
                                console.log("err");
                                $('#ajax-panel').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
                              }
                              });                      
                        } else{
                          jQuery('label[for="allert"]').html('Please choose the Accommodation');
                          $('#err').show();
                          ch = 1;
                        }
                      } 
                      else {
                        jQuery('label[for="allert"]').html('Mobile number Required');
                        $('#err').show();
                         ch = 1;
                      }
                     }else {
                        jQuery('label[for="allert"]').html('EmailID Required');
                        $('#err').show();
                         ch = 1;
                      }
                    } 
                        else {
                      jQuery('label[for="allert"]').html('RollNumber Required');
                      $('#err').show();
                      ch = 1;
                    }
                  } else {
                    jQuery('label[for="allert"]').html('Please choose the Gender');
                    $('#err').show();
                    ch = 1;
                  }
                   } 
                   else 
                   {                   
                    jQuery('label[for="allert"]').html('Name Required');
                    $('#err').show();
                    ch = 1;
                  }
                  }
                  else
                  {
                    jQuery('label[for="allert"]').html('Pass Key Required');
                    $('#err').show();                     
                  }                                                       
                   grecaptcha.reset();        
}
</script>
</body>
</html>