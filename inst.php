<?php include 'header2.php' ;
	$insts = R::findAll('insts',' active = "1" ORDER BY date DESC');
?>
	<div class="container">
		
			<div class="mini">
				<div class="give">
					<?php if(isset($_SESSION['logged'])): ?>
					<a href="/make.php"><div class="g-button"><i class="fas fa-plus"></i> Подать объявление</div></a>
					<?php else: ?>
						<a href="/auth.php"><div class="g-button"><i class="fas fa-plus"></i> Подать объявление</div></a>
					<?php endif ?>
				</div>
				<div class="inst-filters">
				<div class="filter">
					<label for="city" class="filter-label">Выберете город</label>
					<select name="city" value="Выберете город" id="inst-city">
						<option selected="true" value="all">Все</option>
						<option  value="Астана">Астана</option>
						<option value="Алматы">Алматы</option>
						<option value="Уральск">Уральск</option>
						<option value="Шымкент">Шымкент</option>
						<option value="Актау">Актау</option>
						<option value="no">Нет в списке</option>
					</select></div>
				<div class="filter">
					<label for="city" class="filter-label">Стаж интсруктора</label>
					<div><input class="num" type="number" min="0" value="0" id="inst-exp"> лет</div>
				</div>
				<div class="filter">
					<label for="city" class="filter-label">Своя машина</label>
					<select name="city" value="Выберете" id="inst-car">
						<option selected="true" value="all">Не важно</option>
						<option  value="1">Да</option>
						<option value="0">Нет</option>
						
					</select>
				</div>
				<div class="filter">
					<label for="city" class="filter-label">Предпочитаемый язык</label>
					<select name="city" value="Выберете" id="inst-lang">
						<option selected="true" value="b">Не важно</option>
						<option  value="k">Казахский</option>
						<option value="r">Русский</option>
						
					</select>
				</div>
				<div class="filter" onclick="search_inst($('#inst-lang').val(),$('#inst-car').val(),$('#inst-exp').val(),$('#inst-city').val());">
					<label for="city" class="filter-label"></label>
					<div class="f-button"><span><i class="fa fa-search"></i> Поиск</span></div>
				</div>
			</div>
		</div>
	<div class="grid-inst">
		<?php 
			foreach ($insts as $inst) {
				$user = R::findOne('users','id = ?',[$inst->uid]);
				$image = R::findOne('images','purpose = "i" AND pid = ?',[$inst->id]);
	  				$exp = $inst->exp;
	  				$last = (int)$exp[strlen($exp) - 1];
	  				if((int)$exp > 10 && (int)$exp < 20) {
	  					$exp = $exp.' лет';
	  				} elseif ($last == 1) {
	  					$exp = $exp.' год';
	  				} elseif ($last > 1 && $last <5) {
	  					$exp = $exp.' года';
	  				} else {
	  					$exp = $exp.' лет';
	  				}
					if($image){
						$img = $image->name;
					}else {
						$img = 'noimage.jpg';
					}
					if($inst->car == 1){
						$car = 'Да';
					}else {
						$car = 'Нет';
					}
					if($inst->city == 'all'){
						$inst->city = 'Все';
					}else if($inst->city == 'other'){
						$inst->city = 'Нет в списке';
					}
					echo('<a href="driver.php?id='.$inst->id.'"><div class="inst-card">
					<div class="card-container">
						<div class="card-row lp"><img class="card-picture" src="/images/'.$img.'" alt=""></div>
						<div class="card-row div"><div class="c-col1 fl">'.$user->name.' '.$user->sname.' </div><div class="c-col2 fl"></div></div>
						<div class="card-row div"><div class="c-col1">Город: </div><div class="c-col2">'.$inst->city.'</div></div>
						<div class="card-row div"><div class="c-col1">Стаж работы: </div><div class="c-col2">'.$exp.' </div></div>
						
					</div>
				</div></a>');
			}
		 ?>
			
			
		</div>
	</div>

<?php include 'footer.php' ?>
</body>
<script src="js/inst.js"></script>
</html>