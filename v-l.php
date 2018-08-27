<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) :?>
<?php $user = R::findOne('users' , 'id = ?', array($_COOKIE['id']));
    $usera = R::findOne('insts' , 'uid = ?', array($_COOKIE['id']));
    $active_insts = R::findAll('insts','uid = ? AND active="1"',[$_COOKIE['id']]);
    $dis_insts = R::findAll('insts','uid = ? AND active!="1"',[$_COOKIE['id']]);
    ?>
<?php if($_GET['id']){
  $id = $_GET['id'];
  $theory = R::findOne('theory', 'id = ?', (array($id)));
}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';
} ?>

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
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>
<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; ?>
<?php endif; ?>
