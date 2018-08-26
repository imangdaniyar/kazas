<?php include 'header2.php';
  $videos = R::findAll('theory');?>


<div class="container nm">
  <div class="courses">
    <?php 
      foreach ($videos as $video) {
          echo('<a href="/v-l.php?id='.$video->id.'" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">'.$video->title.'
        </span>
      </div>
    </a>');
      }
     ?>
    <a href="/v-l.php" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Общие положения
        </span>
      </div>
    </a>
    <a href="/v-l.php" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Общие обязанности водителей
        </span>
      </div>
    </a>
    <a href="/v-l.php" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Обязанности пешеходов
        </span>
      </div>
    </a>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>



