<?php include 'header2.php';
if($_GET){
  $id = $_GET['id'];
  $uid = $_COOKIE['id'];
  $as = R::findOne('autos', 'id = ?', [$id]);
  $images = R::findAll('images', 'purpose = "a" AND pid = ?',[$id]);
  $comments = R::findAll('comments', 'purpose = "a" AND pid = ?',[$id]);

}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';
}
 ?>
	
	
  <div  class="container nm" style="margin-top: 0vw; width: 100%;">
    <input type="text" class="hidden" id="as-id" value="<?php echo($id); ?>">
    <div class="as-name">
      Автошкола 
      <br>
      <span style="font-size: 5vw;">
        <?php echo $as->name ?>
      </span>
    </div>
    <div class="swiper-container" style="margin-top: 0vw;" id="scas">
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper" >
        <!-- Slides -->
        <?php if($images){
          foreach ($images as $image) {
            echo ('<div class="swiper-slide"><img class="slide-image sias" src="images/'.$image->name.'" alt=""></div>');
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
          <span id="asss" style="font-size: 1.5vw;">Отзывы</span>
          <ul class="services" id="a-comments">
          <?php foreach ($comments as $com) {
            $user = R::findOne('users','id = ?',[$com->uid]);
            if ($user->id == $uid) {
              $app = '<span onclick="delete_acom('.$com->id.')" class="delete-com"><i class="fas fa-trash-alt"></i>Удалить</span>';   
            }else{
              $app = '';
            }
            echo('<li class="comment" id="a-'.$com->id.'">
              <span>'.$user->sname.' '.$user->name.' '.$com->date.$app.'</span>
              <div class="com-text">'.$com->text.'</div>
          </li>');
          } ?>
          

          
        </ul>
        </div>
      </div>
  </div>
  <?php if(isset($_SESSION['logged'])): 
    $user = R::findOne('users','id = ?',[$_COOKIE['id']]);
    ?>
  <div class="make-com">
    <img src="images/feedback.png" alt="" class="com-image">
    <span class="com-label">Мой отзыв</span>
    <div id="a-text" class="feedback" contenteditable="true">Уважаемые, <?php echo $as->name ?></div>
    <span class="com-label minis l1">Отправитель: <?php echo $user->sname.' '.$user->name ?></span>
    <span class="com-label minis l2">Получатель: <?php echo $as->name ?></span>
    <div onclick="send_as($('#id').val(),$('#as-id').val())" class="send-feed"><span style="position: relative;width: 100%;height: 100%;"><i class="fas fa-location-arrow lol"><span>Отправить</span></i> </span></div>
  </div>
<?php endif ?>
	 <?php include 'footer.php'; ?>
</body>
  <script src="js/swiper.js"></script>
  <script src="js/js.js"></script>
  

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