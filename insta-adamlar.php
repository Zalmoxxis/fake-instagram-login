<?php
include 'baglan.php';



?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php  $formsor = mysql_query ("select * from form");

    while ($formcek = mysql_fetch_assoc($formsor)) {
        
   ?>
<div class="">
    <span>
        e-mail:<?php echo $formcek['form_ad'];?>
    </span><br>
    <span>
        sifre:<?php echo $formcek['form_sifre'];?>
    </span>
    <hr>
</div>
<?php } ?>

</body>
</html>