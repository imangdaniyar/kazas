<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])): ?>
<div class="i-note">
  <ul>
    <li>Стаж может быть в диапозоне от 0 до 80 лет</li>
    <li>Фото является не обязательным атрибутом, как и информация о вас</li>
    <li>Первый значек фото и будет главным</li>
  </ul>
</div>
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
        <input type="number" value="0" name="exp" id="i-exp" min="0" max="80" required>
        <label class="inp-label">Стаж вождения</label>
      </div>
      <div class="make-filter">
        <label for="city" class="filter-label">Машина</label>
        <select name="car" value="Выберете город" id="i-car">
            <option selected="true" value="false">Нет</option>
            <option  value="true">Есть</option>
          </select>
      </div>
      <div class="make-filter">
        <label for="lang" class="filter-label">Язык</label>
        <select name="lang" value="Выберете город" id="i-lang">
            <option selected="true" value="b">Оба</option>
            <option  value="r">Русский</option>
            <option value="k">Казахский</option>
          </select>
      </div>
      <div class="inp">
        <div class="make-info" id="i-info" contenteditable="true">Информация о вас</div>
       
      </div>
      <div class="make-filter inv"></div>
      <div class="make-filter ">
        <label for="photo" class="filter-label">Фото</label>
        <div class="photo-container">
          <div id="c-file1" class="photo"><span><div><span id="c-fille1">+</span></div></span></div>
          <div id="c-file2" class="photo"><span><div><span id="c-fille2">+</span></div></span></div>
          <input type="file" accept="image/*,image/jpeg" onchange="file_1(this.files[0]);" class="hidden" name="file1" id="file1">
          <input type="file" accept="image/*,image/jpeg" onchange="file_2(this.files[0]);" class="hidden" name="file2" id="file2">
        </div>
      </div>

      <div onclick="upload($('#id').val());" id="send-i" class="make-filter make-button inv"><span>Отправить</span></div>
      <div onclick="" id="send-pre" class="make-filter make-button inv hidden"><span>Отправить</span></div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/make.js?12345"></script>
<?php else: echo'<meta http-equiv="refresh" content="2; url=http://as">'; ?>
 Зарегестрируйтесь или войдите в систему

<?php endif ?>