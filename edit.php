<?php include 'header2.php' ?>

<?php if(isset($_SESSION['logged'])):
	$id = $_GET['id'];
$insts = R::findOne('insts', 'id = ?',[$id]);
  $user = R::findOne('users', 'id = ?', (array($insts->uid)));
 if($_COOKIE['id']==$user->id):?>

<?php if($_GET['id']){
	
  
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
	  				<select class="d-edit" name="Машина" id="e-car">
	  					<option value="1" <?php if($insts->car == "1"):echo'selected="true"'; endif ?> true>Есть</option>
	  					<option value="0" <?php if($insts->car == "0"):echo'selected="true"'; endif ?>>Нет</option>
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
	  				<select name="city" value="Выберете город" id="e-city">
            				<option <?php if($insts->city == "all"):echo'selected="true"'; endif ?> value="all">Все</option>
            				<option <?php if($insts->city == "Астана"):echo'selected="true"'; endif ?>  value="Астана">Астана</option>
            				<option <?php if($insts->city == "Алматы"):echo'selected="true"'; endif ?> value="Алматы">Алматы</option>
            				<option <?php if($insts->city == "Уральск"):echo'selected="true"'; endif ?> value="Уральск">Уральск</option>
            				<option <?php if($insts->city == "Шымкент"):echo'selected="true"'; endif ?> value="Шымкент">Шымкент</option>
            				<option <?php if($insts->city == "Актау"):echo'selected="true"'; endif ?> value="Актау">Актау</option>
            				<option <?php if($insts->city == "other"):echo'selected="true"'; endif ?> value="other">Другой</option>
          			</select>
	  			</div>
	  			
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
	  				<input type="phone" class="d-edit" value="<?php echo $user->phone?>" id="e-phone">
	  			</div>
	  			<div class="d-info" id="d-info">
	  				<i class="fa fa-envelope"></i> Язык
	  			</div>	
	  			
	  			<div class="d-info">
	  				<select class="d-edit" name="Язык" id="e-lang" >
	  					<option value="k" <?php if($insts->lang == "k"):echo'selected="true"'; endif ?>>Казахский</option>
	  					<option value="r" <?php if($insts->lang == "r"):echo'selected="true"'; endif ?>>Русский</option>
	  					<option value="b" <?php if($insts->lang == "b"):echo'selected="true"'; endif ?>>Оба</option>
	  				</select>
	  				
	  			</div>
  			</div>
  			<div class="personal-podrobno">
  				<div class="podrobno">
  					<i class="fa fa-envelope"></i> Подробно
  				</div>
  				<div class="podrobno-info">
					<div class="d-edit" id="e-info" contenteditable="true" style=""><?php echo($insts->info); ?></div>
				</div>
  			</div>
  			
  			
  			
  		</div>
  	</div>
  	
  </div>
  <input type="text" class="hidden" id="getid" value="<?php echo $id ?>">
</div>

<?php include 'footer.php'; ?>
</body>
<script src="js/edit.js"></script>
<?php 
else : echo'<meta http-equiv="refresh" content="0; url=http://as">'; 
 endif;
 endif; ?>
