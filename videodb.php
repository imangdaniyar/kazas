<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) : if($_COOKIE['id']=='1'): if($_GET['id']): ?>
<div class="container nm" style="background-color: lightgray;">
    <input type="hidden" value="<?php   echo $_GET[id]; ?> " id="tid"    >
    <div class="make-question-form" style="padding-top: 2vw; padding-bottom: 5vw;">
    <div class="inp"><input type="text" id="video_url" placeholder="Ссылка на видео">
    </div>
    <div class="in-submit" onclick="up_video($('#tid').val());" style="width: 15%;"><span>Отправить</span></div>
  </div>  
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/testdb.js"></script>
<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>