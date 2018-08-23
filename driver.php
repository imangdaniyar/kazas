<?php include 'header2.php' ?>
<?php if($_GET['id']){
  $id = $_GET['id'];
  $insts = R::findOne('insts', 'id = ?',[$id]);
  $user = R::findOne('users', 'id = ?', (array($insts->uid)));
}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';
} ?>

<div class="container">
  <div class="d-profile">
  	<div class="d-left">
  		<div class="d-ph">
  			<img src="images/avatar.jpg" alt="" style="width: 100%;height: 100%;">
  			<div class="d-ph-name"><?php echo $user->name.' '.$user->sname ?></div>	
  		</div>
  		
  	</div>
  	<div class="d-right">
  		<div class="d-title">
  			<span>Инструктор по вождению <?php echo $user->sname.' '.$user->name ?></span>
  		</div>
  		<div class="d-card">
  			<div class="d-personal">
  				<div class="d-info" id="d-name">
  				<i class="fa fa-user"></i> Имя
	  			</div>

	  			<div class="d-info"><?php echo $user->name?></div>
	  			
	  			<div class="d-info" id="d-sname">
	  				<i class="fa fa-users"></i> Фамилия
	  			</div>
	  			
	  			<div class="d-info"><?php echo $user->sname?></div>

	  			<div class="d-info" id="d-car">
	  				<i class="fa fa-car"></i> Машина
	  			</div>
	  			
	  			<div class="d-info">
	  				<?php if ($insts->car == 1){ 
	  					echo 'Есть'; }
	  				else {
	  					echo 'Нет';}
					?>
					</div>	  				 
	  			
	  			<div class="d-info" id="d-exp">
	  				<i class="fa fa-address-card"></i> Стаж вождения
	  			</div>
	  			
	  			<div class="d-info">
	  				<?php echo $insts->exp ?>
	  				<?php if(($insts->exp > 1 && $insts < 5) || ($insts->exp > 21 && $insts->exp < 25) ) {
	  					echo 'года';
	  				} elseif ($insts->exp == 1 || $insts->exp == 21) {
	  					echo 'год';
	  				} else {
	  					echo 'лет';
	  				} ?>
	  				</div>

	  			<div class="d-info" id="d-exp">
	  				<i class="fa fa-map-marker-alt"></i> Город
	  			</div>
	  			
	  			<div class="d-info"><?php echo $insts->city ?></div>
	  			
	  			<div class="d-info" id="d-info">
	  				<i class="fa fa-envelope"></i> E-mail
	  			</div>	
	  			
	  			<div class="d-info">
	  				<?php echo $user->email?>
	  			</div>
	  			<div class="d-info" id="d-info">
	  				<i class="fa fa-envelope"></i> Телефон
	  			</div>	
	  			
	  			<div class="d-info">
	  				<?php echo $user->phone?>
	  			</div>
	  			<div class="d-info" id="d-info">
	  				<i class="fa fa-envelope"></i> Язык
	  			</div>	
	  			
	  			<div class="d-info">
	  				<?php if($insts->lang == k) {
	  					echo 'Казахский';
	  				} elseif ($insts->lang == r) {
	  					echo 'Русский';
	  				} else {
	  					echo 'Оба';
	  				} ?>
	  			</div>
  			</div>
  			<div class="personal-podrobno">
  				<div class="podrobno">
  					<i class="fa fa-envelope"></i> Подробно
  				</div>
  				<div class="podrobno-info">
					<pre class="p-i" >
<?php echo $insts->info?>
					</pre>
				</div>
  			</div>
  			
  			
  			
  		</div>
  	</div>
  	
  </div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>
<script src="js/brain.js"></script>


