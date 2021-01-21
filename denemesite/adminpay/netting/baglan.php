

<?php

try
{
 $pdo = new PDO('mysql:host=localhost; dbname=appaygun; charset=utf8','root','20101983'); 
}

catch(PDOException $e)
{
 echo 'Hata: '.$e->getMessage();
}

?>

<!--
<?php
//veritabani ulasim bilgileri.

$username="root";
$password="20101983";
$sunucu="localhost";
$database="appaygun";


$baglan = mysqli_connect($sunucu,$username,$password,$database);
mysqli_query("SET NAMES UTF8");


if(!$baglan){
    echo "Baglanti hatasi: ".mysqli_error()();
    exit();
}
$db=mysqli_select_db($baglan,$database);
if(!$db){
    echo "Veritabani hatasi: ".mysqli_error()."<br>";
    echo "Veritabani baglantisi bilgilerini baglan.php dosyasindan duzenleyebilirsiniz";
    exit();
}
?>
-->
