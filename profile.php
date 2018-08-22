<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) :?>
<?php $user = R::findOne('users' , 'id = ?', array($_COOKIE['id']));
    $usera = R::findOne('insts' , 'uid = ?', array($_COOKIE['id']));
    ?>
<?php endif; ?>
<div class="container">
  <div class="u-profile">
  	<div class="p-left">
  		<div class="p-title">
  			<span>Профиль - О себе</span>
  		</div>
  		<div class="p-card">
  			<div class="p-personal">
  				<div class="p-info" id="p-name">
  				<i class="fa fa-user"></i> Имя
	  			</div>

	  			<div class=""><?php echo $user->name ?></div>
	  			
	  			<div class="p-info" id="p-sname">
	  				<i class="fa fa-users"></i> Фамилия
	  			</div>
	  			
	  			<div class=""><?php echo $user->sname ?></div>

	  			<div class="p-info" id="p-car">
	  				<i class="fa fa-car"></i> Машина
	  			</div>
	  			
	  			<div class="">
	  				<?php if ($usera->car == 1){ 
	  					echo 'Есть'; }
	  				else {
	  					echo 'Нет';}
					?>
					</div>	  				 
	  			
	  			<div class="p-info" id="p-exp">
	  				<i class="fa fa-address-card"></i> Стаж вождения
	  			</div>
	  			
	  			<div class="">
	  				<?php echo $insts->exp ?>
	  				<?php if(($insts->exp > 1 && $insts < 5) || ($insts->exp > 21 && $insts->exp < 25) ) {
	  					echo 'года';
	  				} elseif ($insts->exp == 1 || $insts->exp == 21) {
	  					echo 'год';
	  				} else {
	  					echo 'лет';
	  				} ?></div>

	  			<div class="p-info" id="p-exp">
	  				<i class="fa fa-mobile"></i> Телефон
	  			</div>
	  			
	  			<div class="">+7(777)777-77-77</div>
	  			
	  			<div class="p-info" id="p-info">
	  				<i class="fa fa-caret-square-down"></i> Подробно
	  			</div>	
	  			
	  			<div class=""><?php echo $usera->info ?></div>
  			</div>
  			<div class="p-photo">
  				<img src="slider/slide3.jpg" alt="" style="height:100%; width: 100%;">
  			</div>
  			
  		</div>
  	</div>
  	<div class="p-right">
  		
  	</div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>