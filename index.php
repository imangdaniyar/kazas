<?php include 'header.php'; ?>
<?php 
	$autos  = R::findAll( 'autos' );
 ?>
	<div class="swiper-container">
    <!-- Additional required wrapper -->
    	<div class="swiper-wrapper">
        <!-- Slides -->
        	<div class="swiper-slide">
        		<img class="slide-image" src="slider/slide1.jpg" alt=""><div class="slider-label"><span class="label">Подготовка к экзаменам онлайн</span><span class="sublabel">Мы приготовили для вас специальные видеоуроки и тестовые задания, которые помогут Вам успешно сдать ,как теоритическую, так и практическую часть экзамена на получение прав разных классификаций</span><div onclick="alert('123');" class="slider-button"><span>Продолжить</span></div></div>
				

        	</div>
        	<div class="swiper-slide"><img class="slide-image" src="slider/slide2.jpg" alt=""><div class="slider-label"><span class="label">Зарекомендуй себя как профессионального инструктора</span><span class="sublabel">Зарегестрийруйтесь и зарекомендуйте себя как профессионала своего дела, расскажите о себе и докажите, что именно Вы можете научить любого желающего вне зависимости от его опыта</span><div onclick="alert('123');" class="slider-button"><span>Подробнее</span></div></div></div>

        	<div class="swiper-slide"><img class="slide-image" src="slider/slide3.jpg" alt=""><div class="slider-label"><span class="label">Зарегистрируйте свою автошколу</span><span class="sublabel">Это отличный способ привлечения новых студентов, квалифицированных преподавателей и опытных водителей.</span><div onclick="alert('123');" class="slider-button"><span>Добавить автошколу</span></div></div></div>
        
   		</div>
    <!-- If we need pagination -->
    	<div class="swiper-pagination"></div>

    <!-- If we need navigation buttons -->
    	<div class="swiper-button-prev"></div>
    	<div class="swiper-button-next"></div>
    </div>
	<div class="search-nav">
		<span class="city-c">Выберете город</span>
		<div class="filter">
			<select name="city" value="Выберете город" id="filter">
				<option selected="true" value="all">Все</option>
				<option  value="Астана">Астана</option>
				<option value="Алматы">Алматы</option>
				<option value="Уральск">Уральск</option>
				<option value="Шымкент">Шымкент</option>
				<option value="Актау">Актау</option>
				<option value="Атырау">Атырау</option>
				<option value="no">Нет в списке</option>
			</select>
		</div>
		<div  onclick="as_filter($('#filter').val())" id="as" class=" search-button"><div style="position: relative; width: 100%; height: 100%;"><span class="search-label"><i class="fa fa-search"></i> Поиск</span> </div>
	</div>
	</div>
  <div  class="container">
    <div class="grid-container">
	<?php 
		foreach ($autos as $auto) {
      $image = R::findOne('images','purpose="a" AND pid=?', [$auto->id]);
      if($image){
         $img = '<img class="card-img" src="slider/'.$image->name.'" alt="">';
       }else{
        $img = '<img class="card-img" src="images/noimage.jpg" alt="">';
       }
     
			echo('<a href="as.php?id='.$auto->id.'"><div class="card">
        '.$img.'
        <span class="card-title">'.$auto->name.'</span>
        <hr style="border: 0.05vw solid gray; width:80%;">
        <span class="card-content">
          город: '.$auto->city.'
        </span>
      </div></a>');
		}
	 ?>

    </div>
  </div>
	 <?php include 'footer.php'; ?>
</body>
  <script src="js/swiper.js"></script>
  	<script>$(document).ready(function(){
$("#menu").on("click","a", function (event) {
//отменяем стандартную обработку нажатия по ссылке
event.preventDefault();

//забираем идентификатор бока с атрибута href
var id = $(this).attr('href'),

//узнаем высоту от начала страницы до блока на который ссылается якорь
top = $(id).offset().top;
bottom = $('#menu').height()+5;
//анимируем переход на расстояние - top за 1500 мс
$('body,html').animate({scrollTop: top-bottom}, 800);
});
});
</script>
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
  <script>
  
  $(window).on("scroll", function() {
    if ($(window).scrollTop() > 50) { $('.header').addClass('fixed');   }
          else { $('.header').removeClass('fixed');  }
    });     </script>

</html>