<?php 

//sunucu bilgileri gir
$username="root";
$password="123";
$sunucu="localhost";
$database="soslu";


$baglan=mysql_connect($sunucu,$username,$password);
mysql_query("SET NAMES UTF8");


if(!$baglan)
{
	echo "Baglantı hatası:".mysql_errno(); 
	exit();
}
$db=mysql_select_db($database);
if(!$db) { echo "Veritabanı hatası:".mysql_error(); echo "<br>";

echo "Veritabanı bağlantı bilgilerini /netting/bağlan.php dosyasından düzenleyebilirsiniz.";
exit(); }


?>