<?php include 'header.php'; 
 
        $sayfa_id=$_GET['sayfa_id'];
        $appaygun = "select * from sayfalar where sayfa_id='$sayfa_id'";
        $sayfasor=mysqli_query($baglan,$appaygun);
        $sayfacek=mysqli_fetch_assoc($sayfasor);
?>


  
<aside>
      <div class="wrapper">
        <div style="padding-left:13px;"class="column-3">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $sayfacek['sayfa_ad'];?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <p><?php echo $sayfacek['sayfa_icerik'];?></p>
              </div>           
            </div>
          </div>
        </div>
        
</aside>

<section id="content">
  <div class="wrapper"> 
</div>
<hr>

  <div class="block"> </div>
  </section>
</div>
</div>


<?php include 'footer.php'; ?>

