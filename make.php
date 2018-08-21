<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])): ?>
<div class="container">
  <div class="make-form">
    <div id="title">Подать объявление</div>
      <div class="make-filter">
        <label for="city" class="filter-label">Выберете город</label>
        <select name="city" value="Выберете город" id="i-city">
            <option selected="true" value="all">Все</option>
            <option  value="Астана">Астана</option>
            <option value="Алматы">Алматы</option>
            <option value="Уральск">Уральск</option>
            <option value="Шымкент">Шымкент</option>
            <option value="Актау">Актау</option>
            <option value="other">Другой</option>
          </select>
      </div>
      <div class="inp" style="display: none;">
        <input type="text" name="city" id="i-city" required>
        <label class="inp-label">Другой город</label>
      </div>
      <div class="inp">
        <input type="number" name="exp" id="i-exp" required>
        <label class="inp-label">Стаж вождения</label>
      </div>
      <div class="make-filter">
        <label for="city" class="filter-label">Машина</label>
        <select name="car" value="Выберете город" id="make-filter">
            <option selected="true" value="false">Нет</option>
            <option  value="true">Есть</option>
          </select>
      </div>
      <div class="make-filter">
        <label for="lang" class="filter-label">Язык</label>
        <select name="lang" value="Выберете город" id="i-lang">
            <option selected="true" value="Оба">Оба</option>
            <option  value="Русский">Русский</option>
            <option value="Казахский">Казахский</option>
          </select>
      </div>
      <div class="inp">
        <div class="make-info" contenteditable="true">Информация о вас</div>
       
      </div>
      <div class="make-filter inv"></div>
      <div class="make-filter ">
        <label for="photo" class="filter-label">Фото</label>
        <div class="photo-container">
          <div class="photo"><span><div><span>+</span></div></span></div>
          <div class="photo"><span><div><span>+</span></div></span></div>
          <input type="file" class="hidden" name="file1" id="file1">
          <input type="file" class="hidden" name="file2" id="file2">
        </div>
      </div>

      <div onclick="upload($('#id').val());" class="make-filter make-button inv"><span>Отправить</span></div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/make.js"></script>
<?php else: echo'<meta http-equiv="refresh" content="2; url=http://as">'; ?>
 Зарегестрируйтесь или войдите в систему

<?php endif ?>