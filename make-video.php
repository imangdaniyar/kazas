<?php include 'header2.php';
  $videos = R::findAll('theory');?>


<div class="container nm">
  <div class="courses">
    <?php 
      foreach ($videos as $video) {
          echo('<a href="/videodb.php?id='.$video->id.'" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">'.$video->title.'
        </span>
      </div>
    </a>');
      }
     ?>
    
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>



