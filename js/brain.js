$(document).ready(function(){

	var errors = '';
	$("#up-name").focusout(function() {
		check_name();
			
	});
	$("#up-sname").focusout(function() {
		check_sname();

	});
	$("#up-login").focusout(function() {
		check_login();
		
	});
	$("#up-email").focusout(function() {
		check_email();if(error_email){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		}
	});
	$("#up-password").focusout(function() {
		check_password()
		check_repass();if(error_password){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		}
	});
	$("#up-repass").focusout(function() {
		check_repass();if(error_repass){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		}
	});
			var error_name = true;
	var error_sname = true;
	var error_login = true;
	var error_password = true;
	var error_repass = true;
	var error_email = true;

	function check_name() {
		var name = $('#up-name').val();
		var l = name.length;
		if (l < 2 || l > 50) {
			errors = '';
			$('#up-name').css('border-bottom','0.1vw solid red');
			errors = 'Имя должно состоять из не менее 2 и не более 50 символов, включая пробелы';
			
			error_name = true;
			if(error_name){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		};
		} else {
			$('#up-name').css('border-bottom','0.1vw solid green');
			error_name = false;


		}

	};
	function check_email() {
		var email = $('#up-email').val();
		var el = email.length;
		if (el < 2 || el > 75) {
			error_email = true;

			errors = '';
			errors = 'электронный адресс должен состоять из не менее 2 и не более 50 символов, включая пробелы';
			$('#up-email').css('border-bottom','0.1vw solid red');
			if(error_email){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		};
			
		} else {
			var pattern = /^([a-z0-9_\.-])+@[a-z0-9-]+\.([a-z]{2,4}\.)?[a-z]{2,4}$/i;
			if(pattern.test(email)){
				$('#up-email').css('border-bottom','0.1vw solid green');
				error_email = false;
			} else {
			$('#up-email').css('border-bottom','0.1vw solid red');
			errors= '';
			errors = 'email не соответствует стандартам';
			error_email = true;}
		}
	};
	function check_sname() {
		var sname = $('#up-sname').val();
		var ls = sname.length;
		if (ls < 2 || ls > 50) {
			errors = '';
			errors = 'Фамилия должна состоять из не менее 2 и не более 50 символов, включая пробелы';
			$('#up-sname').css('border-bottom','0.1vw solid red');
			error_sname = true;
			if(error_sname){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
			
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		}
		} else {
			$('#up-sname').css('border-bottom','0.1vw solid green');
			error_sname = false;
		}
	};
	function check_login() {
		var login_length = $("#up-login").val().length;

		if (login_length < 5 || login_length > 50) {
			errors = '';
			
			$('#up-login').css('border-bottom','0.1vw solid red');
			errors = 'Имя пользователя не должно содержать пробелов и состоять более чем 5 и менее чем 50 символов';
			error_login = true;
		} else {
			var str = $('#up-login').serialize();
			str = 'loginc=1&'+str;
			$.ajax({
				url: '/brain.php',
        		type: "POST",
        		cache: false,
        		data: str,
        	success: function(response) {
        		console.log(response);
        		if (response == 'as'){
        		location.replace("http://"+response+"/index.php");	
        	};
        		

            	if(response == '1'){
            		$('#up-login').css('border-bottom','0.1vw solid green');
            		error_login = false;
            		if(error_login){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		}
            	} else {
            		errors = '';
            		errors = 'Данное имя пользователя уже занято';
            		$('#up-login').css('border-bottom','0.1vw solid red');
            		error_login = true;
            		if(error_login){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		};
            		
            	}
            
            }
        
    });
			;
		};
		if(error_login){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			errors ='';
		}
	};

	function check_password() {
		var password_length = $("#up-password").val().length;

		if (password_length < 8) {
			errors = '';
			errors = 'Пароль должен быть не менее 8 символов';
			$('#up-password').css('border-bottom','0.1vw solid red');
			error_password = true;
		} else {
			$('#up-password').css('border-bottom','0.1vw solid green');
			error_password = false;
		}
	};

	function check_repass() {
			var password = $("#up-password").val();
			var repass = $("#up-repass").val();

			if (password != repass) {
				errors = '';
				errors ="Введенные пароли не совпадают"
				$('#up-repass').css('border-bottom','0.1vw solid red');
				error_repass = true;
				if(error_repass){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		}else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			error_repass = false;
		}
			} else {
				$('#up-repass').css('border-bottom','0.1vw solid green');
				error_repass = false;
			}
		}



	$('.up-submit').on('click',function(){
		if(!error_email	 &  !error_repass & !error_password & !error_login & !error_sname &  !error_name){
			errors = '';
			var name = $('#up-name').val().trim();
			var sname = $('#up-sname').val().trim();
			var login = $('#up-login').val().trim().toLowerCase();
			var password = $('#up-password').val().trim();
			var email = $("#up-email").val();
			var str = 'register=1&'+'name='+name+'&'+'sname='+sname+'&'+'password='+password+'&'+'login='+login+'&'+'email='+email;
			$.ajax({
				url: '/brain.php',
        		type: "POST",
        		cache: false,
        		data: str,
        		beforeSend: function() {
        			$('.container').addClass('disabled');
        		},
        		success: function(response) {
            		console.log(response);
            		var obj = jQuery.parseJSON(response);
            		location.replace(obj.ans);

        		}
    		});

	} else {
		if(errors){
			$('.inp-er').show();
			$('.loginform').css('height','44vw');
			$('#errors').show();
			$('#errors').html(errors);
		} else {
			$('.loginform').css('height','39vw');
			$('.inp-er').hide();
			console.log(error_repass+' '+error_login+' '+error_sname+' '+error_password+' '+error_email+' '+error_name+' ');
		}
	}
		});
});

$('.in-submit').on('click',function(){
var login = $('#in-login').val().trim().toLowerCase();
	var password = $('#in-password').val().trim();
	if(login != '' & password != ''){
			var str = 'signin=1&'+'login='+login+'&'+'password='+password;
			$.ajax({
				url: '/brain.php',
        		type: "POST",
        		cache: false,
        		data: str,
        		beforeSend: function() {
        // setting a timeout
        	 $('.container').addClass('disabled');
        		
    		},
        		success: function(response) {
            		var obj = jQuery.parseJSON(response);
            		if (obj.ans==='0'){
            			$('.loginform').css('height','25vw');
		$('.inp-er').show();
            			$('#error').html('Неправильно введен логин');
            		}	else if (obj.ans==='1') {
            			$('.loginform').css('height','25vw');
		$('.inp-er').show();
            			$('#error').html('Неправильный пароль');
            		} else {location.replace(obj.ans);}
        		}
    		});

	} else {
		$('.loginform').css('height','25vw');
		$('.inp-er').show();
		$('#error').html('Заполните поля');
	}
});

