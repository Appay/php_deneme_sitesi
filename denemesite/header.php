
<?php 
include 'adminpay/netting/baglan.php';

$appaygun = "SELECT * FROM ayarlar";
$ayarsor=mysqli_query($baglan,$appaygun);
$ayarcek=mysqli_fetch_array($ayarsor);

?>



<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
<title><?php echo $ayarcek['ayar_title']; ?></title>


<meta name="description" content="<?php echo $ayarcek['ayar_description']; ?>">
<meta name="keywords" content="<?php echo $ayarcek['ayar_keywords']; ?>">
<link rel="stylesheet" href="css/reset.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/styles.css" type="text/css" media="screen">
<link rel="stylesheet" href="css/layout.css" type="text/css" media="screen">
<script src="js/jquery-1.6.3.min.js"></script>
<script src="js/cufon-yui.js"></script>
<script src="js/cufon-replace.js"></script>
<script src="js/FF-cash.js"></script>
<script src="js/script.js"></script>
<script src="js/jquery.equalheights.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/tms-0.3.js"></script>
<script src="js/tms_presets.js"></script>
<script src="js/easyTooltip.js"></script>


</head>
<body id="page1">
<div class="extra">
  <div class="main">

    
    <!--==============================header=================================-->
    <header>
      <div class="indent">
        <div class="row-top">
          <div class="wrapper">
           <img style="margin-top:15px; margin-bottom:15px; margin-left:30px;" src="<?php echo $ayarcek['ayar_logo'];?>" alt="">
            
            <strong class="support">109 876 54 32</strong></div>

        </div>
        <nav>
          <ul class="menu"><li>

            <a class="active" href="index.php">Home</a></li>

            <?php 

            $appaygun = "select * from menuler";
            $menusor=mysqli_query($baglan,$appaygun);

            $menusay=mysqli_num_rows($menusor);
            $say=0;

            while($menucek=mysqli_fetch_assoc($menusor)){ $say++;
             ?>

            
            <li class="<?php if ($menusay==$say){
              echo "last"; } 
              ?>"><a href="<?php echo $menucek['menu_link'];?>" target="_blank"><?php echo $menucek['menu_ad']; ?></a></li>

             <?php  } 
             ?>             
          </ul>
        </nav>    
      </div>
    </header>