<?php include 'header2.php';
  $videos = R::findAll('theory');?>


<div class="container nm">
  <div class="courses">
    <a href="/files/pdd.pdf" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Правила Дорожного Движения Республики Казахстан
        </span>
        <div class="lesson-image"><img class="lesson-pic" src="lesson.png" alt="тесты и видео по пдд"></div>
        <span class="free">Бесплатно</span>
      </div>
    </a>
    <?php 
      foreach ($videos as $video) {
        if ((int)$video->free == 1) {
          echo('<a href="/v-l.php?id='.$video->id.'" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">'.$video->title.'
        </span>
        <div class="lesson-image"><img class="lesson-pic" src="lesson.png" alt="тесты и видео по пдд"></div>
        <span class="free">Бесплатно</span>
      </div>
    </a>');
        } else{
          echo('<a href="/v-l.php?id='.$video->id.'" style="text-decoration: none; color: white">
      <div class="course" style="opacity: 0.9;">
        <span class="c-title">'.$video->title.'
        </span>
        <div class="lesson-image"><img class="lesson-pic" src="lesson.png" alt="тесты и видео по пдд"></div>
        <span class="paid">Платно</span>
      </div>
    </a>');
        }
      }
     ?>
    
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>



