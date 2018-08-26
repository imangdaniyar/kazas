<?php include 'header2.php' ?>
<?php $theory = R::findAll('theory');
  foreach ($theory as $theor) {
  $id = $theor->id;
  } ?>


<div class="container nm">
  <div class="th">
  	<div class="th-title">
  		<span >Правила дорожного движения <br> Республики Казахстан 2018</span>
  	</div>
  	<div class="th-list">
  		<ol class="th-chapters">
  			<li class="th-ch"><a href="/topic.php" style="color: #162034;">Общие положения</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Общие обязанности водителей</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Обязанности пешеходов</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Обязанности пассажиров</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Сигналы светофора и регулировщика</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Применение специальных сигналов</a></li>	
  			<li class="th-ch"><a href="" style="color: #162034;">Применение аварийной сигнализации и знака аварийной остановки</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Маневрирование</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Расположение транспортных средств на проезжей части дороги</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Скорость движения</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Обгон, встречный разъезд</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Остановка и стоянка</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Проезд перекрестков</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Пешеходные переходы и остановки маршрутных транспортных средств
			</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Движение через железнодорожные пути</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Движение по автомагистралям</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Движение в жилых зонах</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Приоритет маршрутных транспортных средств</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Пользование внешними световыми приборами и звуковыми сигналами</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Буксировка механических транспортных средств</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Учебная езда</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Перевозка пассажиров</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Перевозка грузов</a></li><li class="th-ch"><a href="" style="color: #162034;">Дополнительные требования к движению велосипедов, мопедов, гужевых повозок, а также прогону животных</a></li>
  			<li class="th-ch"><a href="" style="color: #162034;">Обеспечение движения людей с нарушениями опорно-двигательного аппарата</a></li>
  			
  		</ol>
  	</div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>



