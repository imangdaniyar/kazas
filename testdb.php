<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) :?>
<div class="container nm" style="background-color: lightgray;">
  <div class="make-question-form" style="padding-top: 2vw; padding-bottom: 5vw;">
    <div class="inp">
      <input type="text" id="question" placeholder="Вопрос">
    </div>
    <div class="inp"><input type="text" id="ans1" placeholder="Ответ 1 Правильный"></div>
    <div class="inp"><input type="text" id="ans2" placeholder="Ответ 2"></div>
    <div class="inp"><input type="text" id="ans3" placeholder="Ответ 3"></div>
    <div class="inp" id="picture1"><input type="file" id="pic1"></div>

    <div class="inp" id="picture2"><input type="file" id="pic2"></div>
    
    <div class="inp" id="picture3"><input type="file" id="pic3"></div>
    
    <div class="inp" id="picture4"><input type="file" id="pic4"></div>
    
    <div class="in-submit" style="width: 15%;"><span>Отправить</span></div>
  </div>  
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>
<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; ?>
<?php endif; ?>
