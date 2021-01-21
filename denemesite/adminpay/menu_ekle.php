<?php include 'header.php';  ?>

<?php include 'sidebar.php';  ?>

<!--index göbek -->
<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">MENÜ EKLEME</h1>


                        <h1 class="page-subhead-line">Sitenize menü ekliyorsunuz </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                

                <!--site ayarları-->
                <form action="netting/islem.php" method="POST" >
                     <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    
                    <input class="btn btn-success" type="submit" name="menukaydet" value="Menü Kaydet">                
                </div>
            </div>

            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Menü Adı</label>
                    <input class="form-control" type="text" name="menu_ad" placeholder="menü adını girin">                
                </div>
            </div>
            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Menü Linki</label>
                    <input class="form-control" type="text" name="menu_link" value="http://">                
                </div>
            </div>
            
        <!--/site ayarları-->


                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>








<?php include 'footer.php';  ?>