<?php 

include 'header.php';  

include 'sidebar.php'; 

$sayfa_id=$_GET['sayfa_id'];
$appaygun = "select * from sayfalar where sayfa_id='$sayfa_id'";
$sayfasor=mysqli_query($baglan,$appaygun);
$sayfacek=mysqli_fetch_assoc($sayfasor);

 ?>

<!--index göbek -->


<head> <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> </head>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SAYFA DÜZENLEME</h1>


                        <h1 class="page-subhead-line">Sayfa Düzenleme paneline hoşgeldiniz! Bu kısımda sayfalarınızı düzenleyebilirsiniz. </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                


                <!--site ayarları-->
                <form action="netting/islem.php" method="POST" >
                     <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    
                    <input style="width:100%" class="btn btn-success" type="submit" name="sayfaduzenle" value="Sayfa Düzenle">                
                </div>
            </div>
            <input class="form-control" type="hidden" name="sayfa_id" value="<?php echo $sayfacek['sayfa_id'];?>">

            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Sayfa Adı</label>
                    <input class="form-control" type="text" name="sayfa_ad" value="<?php echo $sayfacek['sayfa_ad'];?>">                
                </div>
            </div>
            <div class="col-md-12">
                <div align="center" class="form-group col-md-12">
                    <label>Sayfa İçerik</label>
                    <textarea name="sayfa_icerik" class="ckeditor"><?php echo $sayfacek['sayfa_icerik'];?></textarea>               
                </div>
            </div>

            




            


        
        <!--/site ayarları-->


                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>








<?php include 'footer.php';  ?>