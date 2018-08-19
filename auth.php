<?php include 'header2.php' ?>
<div class="container">
	<div class="loginform">
		<div class="choise">
			<div class="signin active"><span>Вход</span></div>
			<div class="signup"><span>Рег-ция</span></div>
		</div>
		<div class="signin-form">
			<div class="inp">
				<input type="text" name="in-login" id="in-login" required>
				<label class="inp-label">Ваше имя пользователя</label>
			</div>
			<div class="inp">
				<input type="text" name="in-password" id="in-pass" required>
				<label class="inp-label">Ваш пароль</label>
			</div>
				
			<div class="in-submit"><span>Вход</span></div>
		</div>
		<div class="signup-form">
			<div class="inp">
				<input type="text" name="up-login" id="up-login" required>
				<label  class="inp-label">Имя пользователя</label>
			</div>
			<div class="inp">
				<input type="text" name="up-login" id="up-login" required>
				<label  class="inp-label">ФИО</label>
			</div>
			<div class="inp">
				<input type="text" name="up-login" id="up-login" required>
				<label  class="inp-label">E-mail</label>
			</div>
			<div class="inp">
				<input type="password" name="up-login" id="up-login" required>
				<label  class="inp-label">Пароль</label>
			</div>
			<div class="inp">
				<input type="password" name="up-login" id="up-login" required>
				<label  class="inp-label">Повторите пароль</label>
			</div>
			
				
			<div class="up-submit"><span>Зарегистрироваться</span></div>
		</div>
	</div>
</div>

<?php include 'footer.php' ?>
</body>
<script src="js/js.js"></script>