<?php include 'header2.php' ?>
<?php if($_GET){
  $id = $_GET['id'];
  $insts = R::findOne('insts', 'id = ?',[$id]);
  $user = R::findOne('users', 'id = ?', (array($insts->uid)));
}else{
  echo'<meta http-equiv="refresh" content="0; url=http://as">';;
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
	  				<select class="d-edit" name="Машина" id="e-car">
	  					<option value="1" selected=""true>Есть</option>
	  					<option value="0">Нет</option>
	  				</select>
					</div>	  				 
	  			
	  			<div class="d-info" id="d-exp">
	  				<i class="fa fa-address-card"></i> Стаж вождения
	  			</div>
	  			
	  			<div class="d-info">
	  				<input id="e-exp" class="d-edit" type="number" value="<?php echo $insts->exp ?>" style="color: black">
	  				
	  			</div>

	  			<div class="d-info" id="d-exp">
	  				<i class="fa fa-map-marker-alt"></i> Город
	  			</div>
	  			
	  			<div class="d-info">
	  				<input class="d-edit" type="text" value="<?php echo $insts->city ?>" id="e-city"></div>
	  			
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
	  				<input type="phone" class="d-edit" value="<?php echo $inists->phone?>" id="e-phone">
	  			</div>
	  			<div class="d-info" id="d-info">
	  				<i class="fa fa-envelope"></i> Язык
	  			</div>	
	  			
	  			<div class="d-info">
	  				<select class="d-edit" name="Язык" id="e-lang" >
	  					<option value="k" selected=""true>Казахский</option>
	  					<option value="r">Русский</option>
	  					<option value="b">Оба</option>
	  				</select>
	  				
	  			</div>
  			</div>
  			<div class="personal-podrobno">
  				<div class="podrobno">
  					<i class="fa fa-envelope"></i> Подробно
  				</div>
  				<div class="podrobno-info">
					<div class="d-edit" id="e-info" contenteditable="true" style="white-space: pre;"></div>
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