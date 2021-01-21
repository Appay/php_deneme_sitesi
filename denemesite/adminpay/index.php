<?php 

ob_start();
session_start();

include 'header.php';  
include 'sidebar.php';  

if(!isset($_SESSION['admin_kadi'])){
    header('Location:login.php');
}


?>

<!--index göbek -->
<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">APPAYGUN ADMIN PANELİ</h1>
                        <h1 class="page-subhead-line">Site admin paneline hoşgeldiniz! Ayarlarınızı yan taraftaki sekmelerden yapabilirsiniz. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                
            </div>
            <!-- /. PAGE INNER  -->
        </div>








<?php include 'footer.php';  ?>