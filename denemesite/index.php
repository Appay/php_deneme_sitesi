<?php 
include 'header.php';
include 'slider.php';

        $appaygun = "select * from sayfalar order by sayfa_id desc";
        $sayfasor=mysqli_query($baglan,$appaygun);
        while($sayfacek=mysqli_fetch_assoc($sayfasor)){ ?>

    <aside>
      <div class="wrapper">
    
      </div>
    </aside>
    <!--==============================content================================-->
     

        <div style="padding-left:13px;"class="column-3">
          <div class="box">
            <div class="aligncenter">
              <h4><?php echo $sayfacek['sayfa_ad'];?></h4>
            </div>
            <div class="box-bg maxheight">
              <div class="padding">
                <p><?php echo substr($sayfacek['sayfa_icerik'],0,300)?></p>
              </div>
              <div class="aligncenter"> <a class="button" href="sayfa_detay.php?sayfa_id=<?php echo $sayfacek['sayfa_id'];?>">Devamını Oku</a> </div>
            </div>
          </div>
        </div>

        <?php } ?>


    <section id="content">
      <div class="wrapper">
        <article class="col-1">
          <div class="indent-left">
            <h2>Merhaba!</h2>
            <h6 class="prev-indent-bot">2 paragraf, 223 sözcük, 1503 karakter Lorem Ipsum üretilmiştir</h6>
            <p class="prev-indent-bot"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Duis posuere neque eu auctor sodales. Aliquam erat volutpat. In quam nisl, scelerisque eu mauris vel, auctor euismod mauris. Morbi fringilla erat purus, non faucibus velit consequat id. Sed varius a lacus eget efficitur. Fusce ex dui, lobortis id finibus a, ullamcorper et nulla. Vestibulum in turpis ex. Sed pellentesque nunc quis dui tincidunt, sit amet aliquam augue auctor. Vestibulum suscipit sapien non urna consequat, ac lacinia risus sollicitudin. Aliquam tempor nibh fringilla libero tristique sodales. Suspendisse a magna consequat, posuere erat non, imperdiet mi. Nunc at vestibulum velit. Integer ut lobortis tellus. Aliquam posuere felis vitae augue molestie luctus. Fusce eros ipsum, elementum non efficitur in, facilisis vel orci.

Ut in ornare risus. Fusce suscipit tristique nulla. Morbi id ligula mollis, ultricies quam vitae, pulvinar est. Quisque vitae placerat dolor. Duis eu nibh eu tellus pharetra egestas id bibendum urna. Pellentesque ac gravida mi. Aliquam vulputate consequat ipsum, sed faucibus lorem dignissim sit amet. Quisque at mauris et lorem vehicula mollis. Nam accumsan egestas sagittis. Aliquam accumsan semper erat, sit amet luctus justo ultricies eget. Aenean sit amet augue at leo iaculis luctus ut id ante. Pellentesque risus elit, luctus sit amet erat nec, vulputate placerat odio. Nunc sapien leo, condimentum sed accumsan at, condimentum in ipsum. Pellentesque sed imperdiet odio, nec scelerisque tellus.</p>
          </div>
        </article>
      </div>
      <div class="block"></div>
    </section>
  </div>
</div>


<?php include 'footer.php'; ?>
