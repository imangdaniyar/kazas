<?php include 'header2.php' ?>
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
            <option value="Другой">Другой</option>
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
            <option selected="true" value="Нет">Нет</option>
            <option  value="Есть">Есть</option>
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
        <input type="text" name="info" id="i-info" required>
        <label class="inp-label">Информация</label>
      </div>
      <div class="make-filter">
        <label for="photo" class="filter-label">Фото</label>
        <div class="photo-container">
          <div class="photo"><span class="plus">+</span></div>
          <div class="photo"><span class="plus">+</span></div> 
        </div>
      </div>

      <div class="up-submit"><span>Отправить</span></div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>