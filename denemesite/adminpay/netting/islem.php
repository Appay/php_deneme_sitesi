<?php 

ob_start();
session_start();

include 'baglan.php';

if(isset($_POST["ayarkaydet"]))

 {

$id=0;
$ayarkaydet = "UPDATE ayarlar SET ayar_title='".mysqli_real_escape_string($baglan, $_POST['ayar_title'])."',
             ayar_description='".mysqli_real_escape_string($baglan,$_POST['ayar_description'])."',            
             ayar_mail='".mysqli_real_escape_string($baglan, $_POST['ayar_mail'])."',       
             ayar_keywords='".mysqli_real_escape_string($baglan, $_POST['ayar_keywords'])."',
             ayar_footer='".mysqli_real_escape_string($baglan, $_POST['ayar_footer']) ."'  WHERE ayar_id='$id'";

if($baglan->query($ayarkaydet) === true){ 

 header("Location:../ayarlar.php?durum=ok");
}
else
{
 header("Location:../ayarlar.php?durum=no"); 
}
}



if(isset($_POST['loggin'])) 
{
 $admin_kadi=$_POST['admin_kadi'];
 $admin_sifre=$_POST['admin_sifre'];

 if ($admin_kadi && $admin_sifre)
 {
  $sorgula=$pdo->prepare("SELECT * FROM admin WHERE admin_kadi='$admin_kadi' AND admin_sifre=
   '$admin_sifre'");
  
  $sorgula->execute();

  if ($sorgula->fetchColumn() > 0) 
  {
   $_SESSION['admin_kadi']=$admin_kadi;
   header('Location: ../index.php');
  }

  else
  {
   header('Location: ../login.php?login=no');
  }

 }
}

if(isset($_POST['menukaydet'])) {

 $id=0;

    $menukaydet=mysqli_query($baglan,"insert into menuler(menu_ad,menu_link) VALUES ('".$_POST['menu_ad']."','".$_POST['menu_link']."')");

if(mysqli_affected_rows($baglan))

{
 header("Location:../menu_ekle.php?durum=ok");

}
else {

 header("Location:../menu_ekle.php?durum=no");

}
}




if(isset($_POST["menuduzenle"])) {

$menu_id=$_POST['menu_id'];

$menuduzenle = "UPDATE menuler SET menu_ad='".mysqli_real_escape_string($baglan, $_POST['menu_ad'])."',
      menu_link='".mysqli_real_escape_string($baglan,$_POST['menu_link'])."' WHERE menu_id='$menu_id'";

if($baglan->query($menuduzenle) == true){ 

 header("Location:../menu_duzenle.php?durum=ok&menu_id=$menu_id");
}
else
{
 header("Location:../menu_duzenle.php?durum=no&menu_id=$menu_id"); 
}
}



if(isset($_POST["sayfaduzenle"])) {

$sayfa_id=$_POST['sayfa_id'];

$sayfaduzenle = "UPDATE sayfalar SET sayfa_ad='".mysqli_real_escape_string($baglan, $_POST['sayfa_ad'])."',sayfa_icerik='".mysqli_real_escape_string($baglan, $_POST['sayfa_icerik'])."',sayfa_sira='".mysqli_real_escape_string($baglan,$_POST['sayfa_sira'])."',sayfa_anasayfa='".mysqli_real_escape_string($baglan,$_POST['sayfa_anasayfa'])."' WHERE sayfa_id='$sayfa_id'";

if($baglan->query($sayfaduzenle) == true){ 

 header("Location:../sayfa_duzenle.php?durum=ok&sayfa_id=$sayfa_id");
}
else
{
 header("Location:../sayfa_duzenle.php?durum=no&sayfa_id=$sayfa_id"); 
}
}





if($_GET['menusil'] == "ok"){
 $menusil=mysqli_query($baglan, "delete from menuler where menu_id= '".$_GET['menu_id']."'");

 if($menusil)
  {
   header('Location:../menuler.php?durum=ok');
  }else
  {
   header('Location:../menuler.php?durum=no');
  }
}


if(isset($_POST['sayfakaydet'])) {

  $zaman=date('Y-m-d');


    $sayfaekle=mysqli_query($baglan,"insert into sayfalar(sayfa_ad,sayfa_icerik,sayfa_sira,sayfa_anasayfa,sayfa_tarih) VALUES ('".$_POST['sayfa_ad']."','".$_POST['sayfa_icerik']."','".$_POST['sayfa_sira']."','".$_POST['sayfa_anasayfa']."','".$zaman."')");

if(mysqli_affected_rows($baglan))

{
 header("Location:../sayfalar.php?durum=ok");

}
else {

 header("Location:../sayfalar.php?durum=no");

}
}


if($_GET['sayfasil'] == "ok"){
$sayfasil=mysqli_query($baglan, "delete from sayfalar where sayfa_id= '".$_GET['sayfa_id']."'");
if($sayfasil)
{
  header('Location:../sayfalar.php?durum=ok');
}else
{
  header('Location:../sayfalar.php?durum=no');
}
}




 /*slider ekleme kodları bozuk yapamadım

if(isset($_POST['sliderekle'])) {

 $uploads_dir = '../uploads';

 @$tmp_name = $_FILES['slidegorsel']["tmp_name"];

 @$name = $_FILES['slidegorsel']["name"];

 $benzersizsayi1=rand(20000,32000);

 $benzersizsayi2=rand(20000,32000);

 $benzersizsayi3=rand(20000,32000);

 $benzersizsayi4=rand(20000,32000);

 $benzersizad=$benzersizsayi1.$benzersizsayi2.$benzersizsayi3.$benzersizsayi4;

 $refimgyol=substr($uploads_dir, 3)."/".$benzersizad.$name;

 @move_uploaded_file($tmp_name, "uploads_dir/$benzersizad$name");

  $sliderekle=mysqli_query("insert into slider (slider_resimyol,slider_url,slider_sira,slider_ad) 
   VALUES ('".$refimgyol."','".$_POST['slider_url']."','".$_POST['slider_sira']."','".$_POST['slider_ad']."')");




 if(mysqli_affected_rows()) {

  header('Location:../slider_ekle.php?durum=ok');


 } else {

  header('Location:../slider_ekle.php?durum=no');
 }
}

*/






?>