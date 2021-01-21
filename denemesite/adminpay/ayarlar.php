<?php include 'header.php';  ?>

<?php include 'sidebar.php';  ?>

<!--index göbek -->
<!-- /. NAV SIDE  -->
        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">Site genel ayarları</h1>


                        <h1 class="page-subhead-line">Sitenizin genel ayarlarını bu sayfadan düzenleyebilirsiniz </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                

                <!--site ayarları-->
                <form action="netting/islem.php" method="POST" >

            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Site Başlığı</label>
                    <input class="form-control" type="text" name="ayar_title" value="<?php echo $ayarcek['ayar_title']; ;?>">                
                </div>
            </div>
            <div class="col-md-12">
                 <div align="center" class="form-group col-md-5">
                    <label>Site Açıklaması</label>
                    <input class="form-control" type="text" name="ayar_description" value="<?php echo $ayarcek['ayar_description']; ;?>">                
                </div>
            </div>
            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Site Anahtar Kelimeleri</label>
                    <input class="form-control" type="text" name="ayar_keywords" value="<?php echo $ayarcek['ayar_keywords']; ;?>">                
                </div>
            </div>

            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Site Footer</label>
                    <input class="form-control" type="text" name="ayar_footer" value="<?php echo $ayarcek['ayar_footer']; ;?>">                
                </div>
            </div>

             <div class="col-md-12">
                <div align="center" class="form-group col-md-3">
                    <label>Mail</label>
                    <input class="form-control" type="text" name="ayar_mail" value="<?php echo $ayarcek['ayar_mail']; ;?>">                
                </div>
            </div>

            <div class="col-md-12">
                <div align="center" class="form-group col-md-2">
                    
                    <input class="btn btn-success" type="submit" name="ayarkaydet" value="Ayarları Kaydet">                
                </div>
            </div>
        <!--/site ayarları-->


            </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>








<?php include 'footer.php';  ?>