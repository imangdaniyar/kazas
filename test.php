<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) :?>
<?php if($_GET['id']){
  $id = $_GET['id'];
  $nid = (int)$id + 1;
  $test = R::findAll('test', 'tid = ?', (array($id)));
}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';
} ?>

<div class="container nm">
  <div class="test">
      <?php foreach ($test as $t) {
        $images = R::findAll('timg','testid = ?',[$t->id]);
        
        echo ('<ul class="test-list">
      <li class="question">'.$t->question.'</li>
      <li class="t-pics">
      ');
      if($images): foreach ($images as $image) {
        echo ('<div class="t-pic"><img src="testimages/'.$image->name.'" alt=""></div>');
      }; endif;
      echo('</li>
      <li class="answer"><input type="radio" name="ans" id="ans1"><label for="ans1">'.$t->ans1.'</label></li>
      <li class="answer"><input type="radio" name="ans" id="ans2"><label for="ans2">'.$t->ans2.'</label></li>
      <li class="answer"><input type="radio" name="ans" id="ans3"><label for="ans3">'.$t->ans3.'</label></li> 
    </ul>');
       }?>
      
    <a href="/v-l.php?id=<?php echo $id ?>"><div class="in-submit t-submit" style="width: 20%; color:white"><span>Назад</span></div>
    </div>  </a>

    
    

  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>
<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; ?>
<?php endif; ?>
