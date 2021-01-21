<?php include 'header.php';  ?>

<?php include 'sidebar.php';  ?>

<!--index göbek -->


<head> <script src="https://cdn.ckeditor.com/4.13.1/standard/ckeditor.js"></script> </head>

        <div id="page-wrapper">
            <div id="page-inner">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="page-head-line">SAYFA EKLEME</h1>


                        <h1 class="page-subhead-line">Sitenize sayfa ekliyorsunuz </h1>

                    </div>
                </div>
                <!-- /. ROW  -->
                


                <!--site ayarları-->
                <form action="netting/islem.php" method="POST" >
                     <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    
                    <input class="btn btn-success" type="submit" name="sayfakaydet" value="Sayfa Kaydet">                
                </div>
            </div>


            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Sayfa Adı</label>
                    <input class="form-control" type="text" name="sayfa_ad" placeholder="sayfa adını girin">                
                </div>
            </div>
            <div class="col-md-12">
                <div align="center" class="form-group col-md-12">
                    <label>Sayfa İçerik</label>
                    <textarea name="sayfa_icerik" class="ckeditor"></textarea>               
                </div>
            </div>

            <div class="col-md-12">
                <div align="center" class="form-group col-md-5">
                    <label>Sayfa Sıra</label>
                    <input class="form-control" type="text" name="sayfa_sira" placeholder="sayfa sırasını girin">                
                </div>
            </div>




            <div class="col-md-12">
            <div class="form-group col-md-6">
            <div class="form-group">
                    <label>Anasayfada Göster</label>
                    <select name="sayfa_anasayfa" class="form-control">
                    <option value=" " >HAYIR</option>
                    <option value=" " >EVET</option>                     
                    </select>
            </div>
            </div>
            </div>


        
        <!--/site ayarları-->


                </form>
            </div>
            <!-- /. PAGE INNER  -->
        </div>








<?php include 'footer.php';  ?>