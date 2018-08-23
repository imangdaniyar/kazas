<?php include 'header2.php' ?>
<?php if($_GET['id']){
  $id = $_GET['id'];
  $insts = R::findOne('insts', 'id = ?',[$id]);
  $user = R::findOne('users', 'id = ?', (array($insts->uid)));
  $images = R::findAll('images', 'purpose = "i" AND pid = ?',[$id]);
}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';;
} ?>

<div class="container">
  <div class="d-profile">
  	<div class="d-left">
  		<div class="d-ph">
  			<div class="d-ph-name">
  				<?php echo $user->name.' '.$user->sname ?>
  			</div>	
  			<div class="d-ph-up">
  				<div class="swiper-container" style="height: 100%">
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
        <?php if($images){
          foreach ($images as $image) {
            echo ('<div class="swiper-slide"><img class="slide-image" style="opacity:1;" src="images/'.$image->name.'" alt=""></div>');
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
  			</div>  
  			<div class="d-ph-fb">
  				<div class="d-feedback">
		          <span style="font-size: 1.5vw;">Отзывы</span>
		          <ul class="d-services">
		          <li class="d-comment">
		              <span>Сагинов Жандос 20-05-2018 17.15.15</span>
		              <div class="com-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Veniam quia officia aliquid blanditiis dolore, minima qui, facilis excepturi dicta perspiciatis facere tenetur ad magni alias, quisquam, nam accusamus iste aspernatur.</div>
		          </li>
		        </ul>
		        </div>
  			</div>			
  			
  		</div>
  		
  	</div>
  	<div class="d-right">
  		<div class="d-title">
  			<span>Инструктор по вождению <?php echo $user->sname.' '.$user->name ?></span>
  		</div>
  		<div class="d-card">
  			<div class="d-personal">
  				<div class="d-info" id="d-name">
  				<i class="fa fa-user"></i> Имя
	  			</div>

	  			<div class="d-info"><?php echo $user->name?></div>
	  			
	  			<div class="d-info" id="d-sname">
	  				<i class="fa fa-users"></i> Фамилия
	  			</div>
	  			
	  			<div class="d-info"><?php echo $user->sname?></div>

	  			<div class="d-info" id="d-car">
	  				<i class="fa fa-car"></i> Машина
	  			</div>
	  			
	  			<div class="d-info">
	  				<?php if ($insts->car == 1){ 
	  					echo 'Есть'; }
	  				else {
	  					echo 'Нет';}
					?>
					</div>	  				 
	  			
	  			<div class="d-info" id="d-exp">
	  				<i class="fa fa-address-card"></i> Стаж вождения
	  			</div>
	  			
	  			<div class="d-info">
	  				<?php echo $insts->exp ?>
	  				<?php if(($insts->exp > 1 && $insts < 5) || ($insts->exp > 21 && $insts->exp < 25) ) {
	  					echo 'года';
	  				} elseif ($insts->exp == 1 || $insts->exp == 21) {
	  					echo 'год';
	  				} else {
	  					echo 'лет';
	  				} ?>
	  				</div>

	  			<div class="d-info" id="d-exp">
	  				<i class="fa fa-map-marker-alt"></i> Город
	  			</div>
	  			
	  			<div class="d-info"><?php echo $insts->city ?></div>
	  			
	  			<div class="d-info" id="d-info">
	  				<i class="fa fa-envelope"></i> E-mail
	  			</div>	
	  			
	  			<div class="d-info">
	  				<?php echo $user->email?>
	  			</div>
	  			<div class="d-info" id="d-info">
	  				<i class="fa fa-envelope"></i> Телефон
	  			</div>	
	  			
	  			<div class="d-info">
	  				<?php echo $user->phone?>
	  			</div>
	  			<div class="d-info" id="d-info">
	  				<i class="fa fa-envelope"></i> Язык
	  			</div>	
	  			
	  			<div class="d-info">
	  				<?php if($insts->lang == k) {
	  					echo 'Казахский';
	  				} elseif ($insts->lang == r) {
	  					echo 'Русский';
	  				} else {
	  					echo 'Оба';
	  				} ?>
	  			</div>
  			</div>
  			<div class="personal-podrobno">
  				<div class="podrobno">
  					<i class="fa fa-envelope"></i> Подробно
  				</div>
  				<div class="podrobno-info">
					<pre class="p-i" >
<?php echo $insts->info?>
					</pre>
				</div>
  			</div>
  			
  			
  			
  		</div>
  	</div>
  	
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>
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


