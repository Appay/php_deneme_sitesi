<?php 

include 'header.php';  
include 'sidebar.php';  

$menu_id=$_GET['menu_id'];
$appaygun = "select * from menuler where menu_id='$menu_id' ";
$menusor=mysqli_query($baglan,$appaygun);
$menucek=mysqli_fetch_assoc($menusor);


?>

<!--index göbek -->
<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MENÜ DÜZENLEME</h1>


                        <h1 class="page-subhead-line">Menü Düzenliyorsunuz </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                

                <!--site ayarları-->
                <form action="netting/islem.php" method="POST" >
                     <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    
                    <input class="btn btn-success" type="submit" name="menuduzenle" value="Menü Düzenle">                
                </div>
            </div>




            <input type="hidden" name="menu_id" value="<?php echo $menucek['menu_id'];?>">




            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Menü Adı</label>
                    <input class="form-control" type="text" name="menu_ad" value="<?php echo $menucek['menu_ad']; ?>" >                
                </div>
            </div>
            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Menü Linki</label>
                    <input class="form-control" type="text" name="menu_link" value="<?php echo $menucek['menu_link'];?>" >                
                </div>
            </div>
            
        <!--/site ayarları-->


                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>








<?php include 'footer.php';  ?>