<?php include 'header2.php' ?>
<?php if(isset($_SESSION['logged'])) :?>
<?php $user = R::findOne('users' , 'id = ?', array($_COOKIE['id']));
    $usera = R::findOne('insts' , 'uid = ?', array($_COOKIE['id']));
    $active_insts = R::findAll('insts','uid = ? AND active="1"',[$_COOKIE['id']]);
    $dis_insts = R::findAll('insts','uid = ? AND active!="1"',[$_COOKIE['id']]);
    ?>

	
	


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
  				<span>Мои уроки:</span>
  			</div>
  			
  		</div>
  	</div>
  	<div class="p-right">
  		<div class="p-title r">
  			<span>Мои объявления</span>
  		</div>
  		<div class="p-insts">
  			<div class="p-active">
  				<span>Активные</span><br>
  				<div class="fulll"><?php foreach ($active_insts as $inst) {
  					$date = new DateTime($inst->date);
  					$date->add(new DateInterval('P31D'));
  					$date = $date->format('d.m.Y');
  					echo ('<div class="p-inst-active">
  					<a href="driver.php?id='.$inst->id.'"><span class="p-label">Активно до '.$date.'</span></a>
  					<div class="pia-edit p"><a style="color:white;" href="edit.php?id='.$inst->id.'"><i class="fas fa-edit"></a></i></div>
  					<div class="pia-down p"><i onclick="deactivate('.$inst->id.')" class="fas fa-times"></i></div>
  				</div>');

  				} ?></div>
  				

  				

  			</div>
  			<div class="p-dis">
  				<span>Не активные</span><br>
  				<div class="fulll"></div>
  				<?php foreach ($dis_insts as $inst) {
  					
  					echo ('<div class="p-inst-dis">
  					<a href="driver.php?id='.$inst->id.'"><span class="p-label">Не активно</span></a>
  					<div class="pia-activate p"><i onclick="activate('.$inst->id.')" class="fas fa-upload"></i></div>
  					<div class="pia-edit p"><a style="color:white;" href="edit.php?id='.$inst->id.'"><i class="fas fa-edit"></i></a></div>
  					<div class="pia-delete p"> <i onclick="delete_inst('.$inst->id.')" class="fas fa-trash"></i></div>
  				</div>');
  				} ?>
  				
  			</div>
  		</div>
  	</div>
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/profile.js"></script>
<?php else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; ?>
<?php endif; ?>