<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) :?>
<?php if($_GET['id']){
  $id = $_GET['id'];
  $topic = R::findOne('theory', 'id=?',[$id]);
  $nid = (int)$id + 1;
  $test = R::findAll('test', 'tid = ?', (array($id)));
  $num = R::count('test', 'tid = ?', (array($id)));
}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';
} ?>

<div id="nm" class="container nm">
  <div class="test">
    <span class="t-title">Тест на тему: <?php echo $topic->title; ?></span>
      <?php foreach ($test as $t) {
        $r = rand(1,3);
        if($r == 1){
          $a1 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-1" value="c1"><label for="ans1">'.$t->ans1.'</label></li>';
          $a2 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-2" value="c2"><label for="ans2">'.$t->ans2.'</label></li>';
          $a3 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-3" value="c3"><label for="ans3">'.$t->ans3.'</label></li>';
        }elseif($r == 2){
          $a2 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-1" value="c1"><label for="ans1">'.$t->ans1.'</label></li>';
          $a3 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-2" value="c2"><label for="ans2">'.$t->ans2.'</label></li>';
          $a1 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-3" value="c3"><label for="ans3">'.$t->ans3.'</label></li>';
        }else{
          $a3 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-1" value="c1"><label for="ans1">'.$t->ans1.'</label></li>';
          $a1 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-2" value="c2"><label for="ans2">'.$t->ans2.'</label></li>';
          $a2 = '<li class="answer"><input type="radio" name="ans-'.$t->id.'" id="'.$t->id.'-3" value="c3"><label for="ans3">'.$t->ans3.'</label></li>';
        }
        $images = R::findAll('timg','testid = ?',[$t->id]);
        
        echo ('<form id="f-'.$t->id.'" onchange="check_test('.$t->id.');" onsubmit="return false;"><ul class="test-list">
      <li class="question">'.$t->question.'</li>
      <li class="t-pics">
      ');
      if($images): foreach ($images as $image) {
        echo ('<div class="t-pic"><img class="t-img" src="testimages/'.$image->name.'" alt=""></div>');
      }; endif;
      echo('</li>'.$a1.$a2.$a3.'</ul></form>');
       }?>
      
    <a href="/v-l.php?id=<?php echo $id ?>"><div class="t-button mt" style="width: 20%; color:white"><span>Назад</span></div> </a>
    <span class="t-results">Правильно: <span id="ra">0</span> из <?php echo($num); ?></span>
    <div class="t-button" onclick="location.reload();" style="width: 20%; color:white"><span>Повторить</span></div>
    </div> 
     
      

    
    

  </div>


<?php include 'footer.php' ?>
</body>
<script src="js/test.js"></script>
<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; ?>
<?php endif; ?>
