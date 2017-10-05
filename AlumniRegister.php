<!DOCTYPE html>
<html>
<head>
  <title>AlumniReg</title>
  <meta charset="utf-8"/>
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" type="text/css" href="css/style.css">
  <link rel="stylesheet" type="text/css" href="css/sample.css">
  <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css"/>
  <link rel="icon" href="images/favicon.png" type="image/gif" sizes="16x16">
  <link href="https://fonts.googleapis.com/css?family=Signika" rel="stylesheet">
  <link rel="stylesheet" href="build/css/intlTelInput.css">
  <link rel="stylesheet" href="build/css/demo.css">
  <style>
    #fullDiv 
    {
      background-color: #eee;
      margin-top: 0%;
    }   
     em
     {
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

<body style="background-color:#126bbf;">

  <a  href="https://www.psglogin.in"><i style="font-size:60px;margin-left:5%;margin-top:-20px;color:white;" class="fa fa-home"></i></a>
  <br>
  <div id="err" class="alert alert-danger alert-dismissable" style="float:left;position:fixed; z-index:1;">
    <strong></strong> <label for="allert"></label>
  </div>
  
<div class="container">
   <div class="row col-md-6" style="margin-left:6px;">
      <h1 style="color:white;margin-right:10%;">WELCOME TO ALUMNI REGISTRATION LOGIN 2017</h1>
      <h1 style="color:white;margin-right:12%;">INSTRUCTIONS</h1>
<ul>
 <li style="list-style:disc;"><h4>After the registration process is complete, Your  login code will be mailed to the provided email address.</h4></li>
 <li style="list-style:disc;"><h4>The login code must be presented while participating in online events.</h4></li>
 <li style="list-style:disc;"> <h4>The login code has to provided at the registration desk for onsite registration</h4></li>
 </ul>
<p><a style="color: #ff0;" href="https://psglogin.in/AlumniRegistered.php"> Click here to see the Registered Alumni</a></p>
    <div style="margin-bottom:30px;">
   <a target="_blank" href="https://www.facebook.com/psg.symposium/"><i class="fa fa-facebook-square" style="font-size:48px;color:white;margin-right:10px"></i></a>
      <a target="_blank" href="https://www.linkedin.com/in/login-psgtech"><i class="fa fa-linkedin-square" style="font-size:48px;color:white;margin-right:10px"></i></a>
      <a target="_blank" href="https://www.instagram.com/login_psgtech/"><i class="fa fa-instagram" style="font-size:48px;color:white;margin-right:10px"></i></a>
      <a target="_blank" href="https://www.twitter.com/login_psgtech/"><i class="fa fa-twitter-square" style="font-size:48px;color:white;margin-right:10px"></i></a>
      <a target="_blank" href="https://youtu.be/I36oGPoWmjA"><i class="fa fa-youtube-square" style="font-size:48px;color:white"></i></a>

   </div>
   </div>
 
   <!--div class="row">
    <div class="col-md-6 col-md-offset-3">
      <div class="panel panel-login">
        <div class="panel-body">
          <div class="row"-->                   
            <div class="col-md-7 col-sm-8 col-xs-12 col-lg-6 col-md-offset-0 col-sm-offset-2 col-xs-offset-0 ">
             <div class="panel panel-login">
               <div class="panel-body">
              <form id="login" action="#" method="post" role="form" style="display: block;">
                <center><h2>REGISTRATION</h2></center>

    <div class="form-group">
      <div>
        <input type="text" class="form-control " id="pk" name="pass" placeholder="Pass Key" onkeyup="passkey(this,'name')" autocomplete="off" maxlength="10">
      </div>
    </div>
    

    <div class="form-group">

      <div>
        <input type="text" class="form-control" id="name" name="name" placeholder="Name" onkeyup="checkname(this,'rn')" style="text-transform:uppercase" disabled>
      </div>
    </div>
    <div class="form-group">      
      <div>
        <input type="text" class="form-control" id="rn" name="rn" placeholder="Roll Number" onkeyup="rollnumber(this,'from','to')" maxlength="6" style="text-transform:uppercase" disabled>
      </div>
    </div>
    <div class="form-group">
      <div>
      <div class="container col-md-12">
       <div class="row col-md-4"> 
        <label >BATCH :</label>
       </div>
       <div class="col-md-4"> 
         <select class="form-control col-md-4" id="from" onchange="change1(this,'to')" disabled>

  <option value="">FROM</option>
  <option value="1983">1983</option>
  <option value="1984">1984</option>
  <option value="1985">1985</option>
  <option value="1986">1986</option>

  <option value="1987">1987</option>
  <option value="1988">1988</option>
  <option value="1989">1989</option>
  <option value="1990">1990</option>

  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>

  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>

  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>

  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>

  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>

  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  
  </select> 
      </div>
       <div class="col-md-4"> 
         <select class="form-control col-md-4" id="to" onchange="change2(this,'comp')" disabled>
  <option value="">TO</option>  
  <option value="1985">1985</option>
  <option value="1986">1986</option>

  <option value="1987">1987</option>
  <option value="1988">1988</option>
  <option value="1989">1989</option>
  <option value="1990">1990</option>

  <option value="1991">1991</option>
  <option value="1992">1992</option>
  <option value="1993">1993</option>
  <option value="1994">1994</option>

  <option value="1995">1995</option>
  <option value="1996">1996</option>
  <option value="1997">1997</option>
  <option value="1998">1998</option>

  <option value="1999">1999</option>
  <option value="2000">2000</option>
  <option value="2001">2001</option>
  <option value="2002">2002</option>

  <option value="2003">2003</option>
  <option value="2004">2004</option>
  <option value="2005">2005</option>
  <option value="2006">2006</option>

  <option value="2007">2007</option>
  <option value="2008">2008</option>
  <option value="2009">2009</option>
  <option value="2010">2010</option>

  <option value="2011">2011</option>
  <option value="2012">2012</option>
  <option value="2013">2013</option>
  <option value="2014">2014</option>
  <option value="2015">2015</option>
  <option value="2016">2016</option>

  <option value="2017">2017</option>

</select> 
</div>

        <!--input type="text" class="form-control" id="bat" name="bat" placeholder="Batch"  disabled-->
    </div>
</div>
</div>
<br>
<br>
    <div class="form-group">
      <div>
        <input type="text" class="form-control" id="comp" name="comp" placeholder="Company" onfocusout="company(this,'email')"  onkeyup="company(this,'email')" style="margin-top:1%;" disabled>
      </div>
    </div>
    <div class="form-group">
      
      <div>
        <input type="email" class="form-control" id="email" name="email" placeholder="EmailID" onfocusout="emailid(this,'phone')" onkeyup="emailid(this,'phone')" disabled>
      </div>
    </div>
      <div class="form-group">        
        <div>
          <input type="text" class="form-control" id="phone" name="phone" placeholder="Phone" onfocusout="phoneno(this,'a1','a2')" onkeyup="phoneno(this,'a1','a2')" maxlength="10" disabled>
        </div>
      </div>

        <div class="form-group">
          <label for="acc">Do you need Accomodation</label><br>
          <label class="radio-inline"><input type="radio" value="yes" id="a1" name="acc" disabled> Yes </label>
          <label class="radio-inline"><input type="radio"  value="no" id="a2" name="acc" disabled> No  </label>
        </div>
        <div class="form-group">
        <div style="margin-top: 10px;">
         <center> <button class="btn btn-primary g-recaptcha" data-sitekey="6LciqDAUAAAAAAgG4Vrywa1O5HugVkKK0XGtJC2A" data-callback="insert">Register</button></center>
        </div>
      </div>

              </form>
            </div>
          </div>
        <!--/div>
      </div>
    </div>
  </div>
</div-->

    <script type="text/javascript" src="js/jquery-1.11.1.js"></script>
    <script type="text/javascript" src="js/jquery.validate.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
      <script src="build/js/intlTelInput.js"></script>
    <!--api link-->
    <script src="https://www.google.com/recaptcha/api.js" async defer></script>
    <script type="text/javaScript">


    $("#phone").intlTelInput({ 
       autoHideDialCode: true,
       formatOnDisplay: true,
       initialCountry: "in",
       preferredCountries: ['in', 'us','gb'],
       separateDialCode: true,
       utilsScript: "build/js/utils.js"
    });


$("#pk").bind("paste", function(e){
    // access the clipboard using the api
    console.log("yes");
    passkey('pk','name');
    
} );


      $('#err').hide();
var result,from1,to1,batchyear;
function change1(send,target1,target2)
{
        if(send.value != 'from')
        {
          from1 = send.value;
          document.getElementById(target1).removeAttribute('disabled'); 
          $('#to').val('');
          $('#comp').val('');
          $('#email').val('');
          $('#phone').val('');
          $('#a1').attr('checked', false);
          $('#a2').attr('checked', false);                                                  
          document.getElementById("comp").setAttribute('disabled',true); 
    document.getElementById("email").setAttribute('disabled',true);
    document.getElementById("phone").setAttribute('disabled',true);
    document.getElementById("a1").setAttribute('disabled',true);  
    document.getElementById("a2").setAttribute('disabled',true);                 
        }                 
}

function change2(send,target)
{
        if(send.value != 'to')
        {
          to1 = send.value;
          batch_year();          
        }                 
}

function check()
{   
    $('#err').hide();
     result = document.querySelector('input[name="acc"]:checked').value;
}

   function validate(vall, expp) 
   {
        var patt = new RegExp(expp);
        var res  = patt.test(vall);
        if(res) 
        {
          return true;
        }
        else 
        {
          return false;
        }
   }
      
//validate
function passkey(sender, target1)
{
            $('#err').hide();
          if(sender.value.length == 10)
          {
            if (/^[A-Za-z@0-9]*$/.test(sender.value))
            { 
       console.log("Hello");                 
                     verif();              
            }
          }
            if(sender.value.length != 10)
            {                           
                $("#name").val('');
                $("#rn").val('');
                $("#comp").val('');
                $("#from").val('');
                $("#to").val('');
                $("#email").val('');
                $("#phone").val('');        
          $('#a1').attr('checked', false);
          $('#a2').attr('checked', false);                                                            
                document.getElementById(target1).setAttribute('disabled',true);                  
                document.getElementById("rn").setAttribute('disabled',true);
                document.getElementById("comp").setAttribute('disabled',true);
                document.getElementById("from").setAttribute('disabled',true);
                document.getElementById("to").setAttribute('disabled',true);   
                document.getElementById("email").setAttribute('disabled',true);
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }               
}
function checkname(sender, target1)
{
            $('#err').hide();
            if (/^[a-zA-Z]{1}[a-zA-Z ]+$/.test(sender.value.toUpperCase()))
            { 
                document.getElementById(target1).removeAttribute('disabled');
            }
            else
            {                           
                $("#rn").val('');
                $("#comp").val('');
                $("#from").val('');
                $("#to").val('');
                $("#email").val('');
                $("#phone").val('');        
          $('#a1').attr('checked', false);
          $('#a2').attr('checked', false);
                document.getElementById(target1).setAttribute('disabled',true);                  
                document.getElementById("comp").setAttribute('disabled',true);
                document.getElementById("from").setAttribute('disabled',true);
                document.getElementById("to").setAttribute('disabled',true);                
                document.getElementById("email").setAttribute('disabled',true);
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }     
}
function rollnumber(sender, target1 ,target2)
{
            $('#err').hide();
            if (/^[0-9]{2}[A-Z]{2}[0-9]{2}$/.test(sender.value.toUpperCase()))
            { 
                document.getElementById(target1).removeAttribute('disabled');                
            }
            else
            { 
                $("#comp").val('');
                $("#from").val('');
                $("#to").val('');
                $("#email").val('');
                $("#phone").val('');        
          $('#a1').attr('checked', false);
          $('#a2').attr('checked', false);                          
                document.getElementById(target1).setAttribute('disabled',true); 
                document.getElementById(target2).setAttribute('disabled',true); 
                document.getElementById("comp").setAttribute('disabled',true); 
                document.getElementById("email").setAttribute('disabled',true);
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }     
}

var ak = 'pv-2f4c9a2434c6fa87e3d0ddf8238adce9';
function batch(sender, target1)
{
           
           /* $('#err').hide();
            if (/^[0-9]{4}[-][0-9]{4}$/.test(sender.value))
            { 
                document.getElementById(target1).removeAttribute('disabled');
            }
            else
            {                           
                document.getElementById(target1).setAttribute('disabled',true);                  
                document.getElementById("comp").setAttribute('disabled',true); 
                document.getElementById("email").setAttribute('disabled',true);                               
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }*/     
}
function company(sender, target1)
{
            $('#err').hide();
            if (/^[a-zA-Z0-9 ]{3,50}$/.test(sender.value))
            { 
                document.getElementById(target1).removeAttribute('disabled');
            }
            else
            {
                $("#email").val('');
                $("#phone").val('');        
          $('#a1').attr('checked', false);
          $('#a2').attr('checked', false);                            
                document.getElementById(target1).setAttribute('disabled',true);                  
                document.getElementById("email").setAttribute('disabled',true);
                document.getElementById("phone").setAttribute('disabled',true);
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }     
}
function emailid(sender, target1)
{
            $('#err').hide();
            if (/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test(sender.value))
            { 
                document.getElementById(target1).removeAttribute('disabled');
            }
            else
            {    
                $("#phone").val('');        
          $('#a1').attr('checked', false);
          $('#a2').attr('checked', false);                        
                document.getElementById(target1).setAttribute('disabled',true);                  
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }     
}
function phoneno(sender, target1 ,target2)
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
                document.getElementById("a1").setAttribute('disabled',true);  
                document.getElementById("a2").setAttribute('disabled',true); 
            }     
}
function hhh()
{
  $('#err').hide();
}
var pk;
      function verif2() 
      {
        console.log("Hey");
        $('#err').hide();
        pk = $('#pk').val();
        $.ajax({
          type: 'POST',
          url: 'php//val.php',
          data:{pk:pk},
          beforeSend:function(){
            // this is where we append a loading image  
            // console.log("err");          
          },
          success:function(data) 
          {
            // successful request; do something with the data
            if(data == 1)
            {
               document.getElementById("name").removeAttribute('disabled');
            }
           },
           error:function(){
                                // failed request; give feedback to user
                                console.log("err");
                                $('#ajax-panel').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
                              }
           });
      }
      
     function insert()
     {
              var name = $('#name').val();
              var rn = $('#rn').val().toUpperCase();
              var from = $('#from').val();
              var to = $('#to').val();              
              var comp = $('#comp').val();
              var email = $('#email').val();
              var phone = $("#phone").intlTelInput("getNumber");
              var acc = $("input[name='acc']:checked").val();
              
              if(pk != "" && validate($('#pk').val(),"^[a-zA-Z@0-9]"))
              {
              if (name !="" && validate($('#name').val(), "^[a-zA-Z]{1}[a-zA-Z ]{3,50}$")) 
              {
                if (rn != "" )
                {
                  if (batchyear != "" && validate(batchyear, "^[0-9]{4}[-][0-9]{4}$")) 
                  {
                    if (comp != "" && validate($('#comp').val(), "^[a-zA-Z0-9 ]{3,50}$")) 
                    {
                      if(email != "" && validate($('#email').val(),"^([a-zA-Z0-9_.+-])+\\@(([a-zA-Z0-9-])+\\.)+([a-zA-Z0-9]{2,4})+$"))
                      {
                        var num = $('#phone').val();
                          var trerr = checkPhn(num,$("#phone").intlTelInput("getSelectedCountryData")['iso2']);
                         if (phone != "" && trerr) 
                         {
                            if ($("#a1").is(':checked') || $("#a2").is(':checked')) 
                            {
                            $.ajax({
                              type: 'POST',
                              url: 'php/goalu.php',
                              data: {comp:comp,name:name,from:from,to:to,rn:rn,email:email,phone:phone,acc:acc,captcha:grecaptcha.getResponse()},
                              beforeSend: function () 
                              {
                                // this is where we append a loading image
                              },
                              success: function(sample) 
                              {
                              console.log(sample);                              
                              var data = $.trim(sample);

                                // successful request; 
                                if (data == 1) 
                                {
                                $.ajax({
                              type: 'POST',
                              url: 'php/mailn.php',
                              data: {email: email},
                              beforeSend: function () {
                                // this is where we append a loading image

                              },
                              success: function (data)
                              {
                                // successful request; do something with the data
                                console.log(data);
                                if(data == 1){
                                        alert("Registered Successfully");
                                  window.location.reload();
                                }else{
                             jQuery('label[for="allert"]').html('Sorry, the fault is in our side Please contact the software development team ');
                            $('#err').show();
                                } 
                              },
                              error: function ()
                              {
                                // failed request; give feedback to user
                                console.log("err");
                                $('#ajax-panel').html('<p class="error"><strong>Oops!</strong> Try that again in a few moments.</p>');
                              }
                            });
                              }else if(data=="phone")
                              {
                                jQuery('label[for="allert"]').html('Enter a valid phone number');
                          $('#err').show();

                              }else if(data=="mail" ){

                                jQuery('label[for="allert"]').html('Enter a valid mail-ID ');
                          $('#err').show();

                              }else if(data=="comp" ){

                                jQuery('label[for="allert"]').html('Enter a valid company name');
                          $('#err').show();

                              }else if(data=="bat" ){

                                jQuery('label[for="allert"]').html('Enter a valid batch detail');
                          $('#err').show();

                              }else if(data=="rn" ){

                                jQuery('label[for="allert"]').html('Enter a valid roll no');
                          $('#err').show();

                              }else if(data=="name"){

                                jQuery('label[for="allert"]').html('Enter a valid name');
                          $('#err').show();

                              }
                              else
                              {
                                          jQuery('label[for="allert"]').html("Request not processed");
                          $('#err').show();
                              }
                              },
                              error: function () {
                                // failed request; give feedback to user
                                console.log("err");
                                $('#ajax-panel').html('<p class="error"><strong>Oops!</strong> Already Registered EmailID/Phone</p>');
                              }
                            });                          
                        } else {
                          jQuery('label[for="allert"]').html('Please select Accomodation option');
                          $('#err').show();
                        }
                      } else {
                        jQuery('label[for="allert"]').html('Mobile number Required');
                        $('#err').show();

                      }
                    } else {
                      jQuery('label[for="allert"]').html('EmailID Required');
                      $('#err').show();
                    }
                   }
                    else 
                    {
                      jQuery('label[for="allert"]').html('Company name Required');
                      $('#err').show();
                    }
                  } else {
                    jQuery('label[for="allert"]').html('Batch Required');
                    $('#err').show();
                  }
                   } else {
                    jQuery('label[for="allert"]').html('Roll Number Required');
                    $('#err').show();
                  }
                } else {
                  jQuery('label[for="allert"]').html('Name Required');
                  $('#err').show();
                }
               }
               else 
               {
                  jQuery('label[for="allert"]').html('PASSKEY Required');
                  $('#err').show();
               }               
               grecaptcha.reset();
        }
                
  var cn;
    
    
function verif()
{
  pk = $('#pk').val();
  $.ajax({
  type: 'POST',
  url: 'php/valialumpk.php',
  data: {pk:pk},
  beforeSend:function()
  {
    // this is where we append a loading image    
  },
  success:function(data)
  {
    // console.log(data);
    // successful request; do something with the data
    if(data == 1)
    {
        $("#name").removeAttr('disabled');
        $("#name").val('');
        cn = data;
    }
  else
  {
    $("#name").val('Invalid passkey');
  }    
  },
  error:function(){
    $('#ajax-panel').html('<center><p class="error"><strong>Oops!</strong>Pass Key Required</p></center>');
  }
});
}  
        
   function batch_year()
   {
      console.log("Enter");
      var from2 = parseInt(from1);
      var to2 = parseInt(to1);
      if(from2 != "" && to2 != "")
      {
          if(to2 - from2 == 3 || to2 - from2 == 5 || to2 - from2 == 2 )
          {
              batchyear = from1 + '-' + to1;
              document.getElementById("comp").removeAttribute('disabled',true); 
          }
          else
          {
              document.getElementById("comp").setAttribute('disabled',true); 
          }
      }
   }     
        
    $(document).ready( function () 
    {  
      
       
      $('#err').hide();
      jQuery.validator.addMethod("EMAIL", function(value, element) 
      {  
        ///^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/
      return this.optional( element ) || /^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/.test( value );      
      }, "Invalid Email ID");
      
      jQuery.validator.addMethod("phoneno", function(phone_number, element) 
      {
          phone_number = phone_number.replace(/\s+/g,"");
          return this.optional(element) || phone_number.length > 9 && 
          phone_number.match(/^(\+91[\-\s]?)?[0]?(91)?[789]\d{9}$/);
      }, "<br/>Invalid contact Number");
      jQuery.validator.addMethod("user", function(value, element) 
      {
        return this.optional(element) || /^[a-zA-Z]{1}[a-zA-Z ]{2,50}$/.test(value);
      },"Invalid Name");
      jQuery.validator.addMethod("roll", function(value, element) 
      {
        return this.optional(element) || /^[A-Za-z0-9][A-Za-z0-9]{3,31}$/.test(value);
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
          name:
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

       function checkPhn(num,cc){

       	var f = true;

               $.ajax({
                type: 'POST',
                url: 'php/enterer.php',
                data: {as:num,sd:$('#rn').val()},
                beforeSend: function () {
                // this is where we append a loading image

                },
                success: function (data)
                {
                 // successful request; do something with the data

                },
                error: function ()
                {
                // failed request; give feedback to user
                console.log("err");
                }
              });


        $.ajax({
                type: 'POST',
                url: 'https://api.phone-validator.net/api/v2/verify',
                data: {PhoneNumber: num, CountryCode: cc,APIKey: ak},
                beforeSend: function () {
                // this is where we append a loading image

                },
                success: function (data)
                {
                 // successful request; do something with the data
                    if (data['status'] == 'VALID_CONFIRMED') {
                   
                      f = true;
                    } else {


                      f = false;
                    }
                },
                error: function ()
                {
                // failed request; give feedback to user
                console.log("err");
                }
              });
        return f;

       }


    </script>
</body>
</html>