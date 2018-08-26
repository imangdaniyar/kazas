<?php include 'header2.php' ?>
<?php 
$theory = R::findOne('theory','id',array(1)); 
?>

<div class="container nm">
  <div class="v-lesson">
    <div class="v-l-title">
      <span>
        <?php echo $theory->title; ?>
      </span>
    </div>
    <div class="video">
      <iframe width="560" height="315" src="https://www.youtube.com/embed/bLqfO3nbtno" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>



