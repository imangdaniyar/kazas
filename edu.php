<?php include 'header2.php' ?>

<div class="edu-nav">
  <select name="course" id="edu-course" class="e-choise">
    <option selected="true" value="All" class="" disabled="true">Все курсы</option>
    <option value="Free" class="">Бесплатные</option>
    <option value="Paid" class="">Платные</option>
  </select>   
</div>

<div class="container nm">
  <div class="courses">
    <a href="/theory.php" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Теоритический материал</span>
        <span class="paid">Платно</span>
      </div>
    </a>
    <a href="/video.php" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Видеоматериал</span>
        <span class="paid">Платно</span>
      </div>
    </a>
    <a href="#" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Тест</span>
        <span class="paid">Платно</span>
      </div>
    </a>
    <a href="#" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Теоритический материал</span>
      </div>
    </a>
    <a href="#" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Видеоматериал</span>
      </div>
  </a>
    <a href="#" style="text-decoration: none; color: white">
      <div class="course">
        <span class="c-title">Тест</span>
      </div>
    </a>
  </div>	
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>



