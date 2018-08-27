<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) :?>
<?php if($_GET['id']){
  $id = $_GET['id'];
  $nid = (int)$id + 1;
  $test = R::findOne('test', 'tid = ?', (array($id)));
}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';
} ?>

<div class="container nm">
  <div class="test">
    
      <ul class="test-list">
      <li class="question"><?php echo $test->question; ?></li>
      <li class="t-pics">
      <div class="t-pic"><img src="" alt=""></div>
      <div class="t-pic"><img src="" alt=""></div>
      <div class="t-pic"><img src="" alt=""></div>
      <div class="t-pic"><img src="" alt=""></div>
      </li>
      <li class="answer"><input type="radio" name="ans" id="ans1"><label for="ans1"> <?php echo $test->ans1; ?></label></li>
      <li class="answer"><input type="radio" name="ans" id="ans2"><label for="ans2"> <?php echo $test->ans2; ?></label></li>
      <li class="answer"><input type="radio" name="ans" id="ans3"><label for="ans3"> <?php echo $test->ans3; ?></label></li> 
    </ul>
    <a href="/test.php?id=<?php echo $nid ?>"><div class="in-submit t-submit" style="width: 20%;"><span>Следующий вопрос</span></div>
    </div>  </a>

    
    

  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>
<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; ?>
<?php endif; ?>
