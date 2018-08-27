<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) : if($_COOKIE['id']=='1'): if($_GET['id']): ?>
<div class="container nm" style="background-color: lightgray;">
    <input type="hidden" value="<?php   echo $_GET[id]; ?> " id="tid"    >
  <div class="make-question-form" style="padding-top: 2vw; padding-bottom: 5vw;">
    <div class="inp"><input type="text" id="question" placeholder="Вопрос">
    </div>
    <div class="inp"><input type="text" id="ans1" placeholder="Ответ 1 Правильный"></div>
    <div class="inp"><input type="text" id="ans2" placeholder="Ответ 2"></div>
    <div class="inp"><input type="text" id="ans3" placeholder="Ответ 3"></div>
    <div class="inp" id="picture1"><input accept="image/*,image/jpeg" onchange="add_pic(this.files[0],'1')" type="file" id="pic1"><button onclick="delete_pic('1');">Удалить</button></div>

    <div class="inp" id="picture2"><input accept="image/*,image/jpeg" onchange="add_pic(this.files[0],'2')" type="file" id="pic2"><button onclick="delete_pic('2');">Удалить</button></div>
    
    <div class="inp" id="picture3"><input accept="image/*,image/jpeg" onchange="add_pic(this.files[0],'3')" type="file" id="pic3"><button onclick="delete_pic('3');">Удалить</button></div>
    
    <div class="inp" id="picture4"><input accept="image/*,image/jpeg" onchange="add_pic(this.files[0],'4')" type="file" id="pic4"><button onclick="delete_pic('4');">Удалить</button></div>
    
    <div class="in-submit" onclick="up_test($('#tid').val())" style="width: 15%;"><span>Отправить</span></div>
  </div>  
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/testdb.js"></script>
<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; ?>
<?php endif; ?>
<?php endif; ?>
<?php endif; ?>