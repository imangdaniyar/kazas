<?php include 'header2.php';
if($_GET){
  $id = $_GET['id'];
  $as = R::findOne('autos', 'id = ?', [$id]);
  $images = R::findAll('images', 'purpose = "a" AND pid = ?',[$id]);
}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';
}
 ?>
	
	
  <div  class="container" style="margin-top: 0vw; width: 100%;">
    <div class="as-name">
      Автошкола 
      <br>
      <span style="font-size: 5vw;">
        <?php echo $as->name ?>
      </span>
    </div>
    <div class="swiper-container">
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php if($images){
          foreach ($images as $image) {
            echo ('<div class="swiper-slide"><img class="slide-image" src="images/'.$image->name.'.jpg" alt=""></div>');
          }
        }else{
          echo('<div class="swiper-slide"><img class="slide-image" src="images/noimage.jpg" alt=""></div>');
        } ?>
          
        
      </div>
    <!-- If we need pagination -->
      <div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
      <div class="swiper-button-prev"></div>
      <div class="swiper-button-next"></div>
    </div>
      <div class="profile">
        <div class="as-info">
          <span style="font-size: 1.5vw;">Об Автошколе</span>
          <div> 
            <?php echo $as->info ?>
          </div>
          <div>
            Город:  <?php echo $as->city ?>
          </div>
          <div>
            Адрес: <?php echo $as->adress ?>
          </div>
          <div>
            Контакты:  <?php echo $as->contacts ?>
          </div>
          <div>
            Сайт: <a href="https://<?php echo $as->site ?>"><?php echo $as->site ?></a>
          </div>
          
        </div>

        <div class="as-services">
          <span style="font-size: 1.5vw;">Отзывы</span>
          <ul class="services">
          <li class="comment">
              <span>Сагинов Жандос 20-05-2018 17.15.15</span>
              <div class="com-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quia officia aliquid blanditiis dolore, minima qui, facilis excepturi dicta perspiciatis facere tenetur ad magni alias, quisquam, nam accusamus iste aspernatur.
              Omnis adipisci quos laudantium nemo nisi, inventore officiis sit aut autem qui non repellendus repellat aliquid quidem neque, optio ducimus dolore aspernatur sed architecto, similique libero illum ad fugit. Quae.></div>
          </li>

          
        </ul>
        </div>
      </div>
  </div>
  .make-com
	 <?php include 'footer.php'; ?>
</body>
  <script src="js/swiper.js"></script>
  

<script>
    $(document).ready(function () {
    	var mySwiper = new Swiper ('.swiper-container', {
    // Optional parameters
    direction: 'horizontal',
    speed: 1000,
    loop: true,
    autoplay: {
    delay: 40000,
  	},

    // If we need pagination
    pagination: {
      el: '.swiper-pagination',
    },

    // Navigation arrows
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    }

    // And if we need scrollbar
    
  });
    });
  </script>
  

</html>