<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged']) && $_GET) : ?>

<?php 
 $id = $_GET['id'];
  $theory = R::findOne('theory', 'id = ?', (array($id)));
$user = R::findOne('users' , 'id = ?', array($_COOKIE['id']));
  if(($user->lessons == 1 && $theory->free==0) || ($theory->free == 1)) :
$usera = R::findOne('insts' , 'uid = ?', array($_COOKIE['id']));
    $active_insts = R::findAll('insts','uid = ? AND active="1"',[$_COOKIE['id']]);
    $dis_insts = R::findAll('insts','uid = ? AND active!="1"',[$_COOKIE['id']]);
 
    
 
 ?>

<div class="container nm">
  <div class="v-lesson">
    <div class="v-l-title">
      <span>
        <?php echo $theory->title;?>
      </span>
    </div>
    <div class="video">
      <iframe width="100%" height="100%" src="<?php echo $theory->video; ?>" frameborder="0" allow="autoplay; encrypted-media" allowfullscreen></iframe>
    </div>
    <a href="/test.php?id=<?php echo $id ?>">
      <div class="link-test">Перейти к тесту</div>
    </a>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<?php  else:
    echo'<meta http-equiv="refresh" content="0; url=http://as">';
  endif; ?>

<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as/auth.php">';  endif; ?>
