<?php include 'header2.php'; ?>
	
	
  <div  class="container" style="margin-top: 0vw; width: 100%;">
    <div class="as-name">
      Автошкола 
      <br>
      <span style="font-size: 5vw;">
        Самат
      </span>
    </div>
    <div class="swiper-container">
    <!-- Additional required wrapper -->
      <div class="swiper-wrapper">
        <!-- Slides -->
          <div class="swiper-slide">
            <img class="slide-image" src="slider/slide1.jpg" alt="">
        

          </div>
          <div class="swiper-slide"><img class="slide-image" src="slider/slide2.jpg" alt=""></div>

          <div class="swiper-slide"><img class="slide-image" src="slider/slide3.jpg" alt=""></div>
        
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
            Автошкола "Орал"(прежнее название - автошкола "Союза Водителей") существует с 1974 года.За время работы мы уверенно лидируем среди автошкол города Уральска. Сплоченный коллектив преподавателей и инструкторов под руководством директора Загранюк А.В. всегда заботится о том,чтобы наши выпускники пополняли ряды думающих и вежливых водителей,знающих ПДД и уверенно управляющих своим автомобилем.
          </div>
          <div>
            Адрес: пр. Богенбай Батыра 73/1,офис 310,г. Астана
          </div>
          <div>
            Контакты:  +77172-49-30-97,+7701-707-52-74
          </div>
          <div>
            Сайт: zarulemkz.kz;
          </div>
          
        </div>

        <div class="as-services">
          <span style="font-size: 1.5vw;">Услуги</span>
          <ul class="services">
          <li class="service">Категория A 15000 тг</li>
          <li class="service">Категория B, C 45000 тг</li>
          <li class="service">Категория B 25000 тг</li>
          <li class="service">Категория D 15000 тг</li>
          <li class="service">Категория E 10000 тг</li>
          <li class="service">Категория C 25000 тг</li>
        </ul>
        </div>
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
</script></script>

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