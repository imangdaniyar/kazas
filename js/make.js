var form = new FormData();
var file1;
var file2;
var inp_file1 = '<input type="file" onchange="file_1(this.files[0]);" class="hidden" name="file1" id="file1">';
var inp_file2 = '<input type="file" onchange="file_2(this.files[0]);" class="hidden" name="file2" id="file2">';
function upload(id) {
		console.log(file1);
		console.log(file2);
		var city = $('#i-city').val();
		var exp = $('#i-exp').val();
		var car = $('#i-car').val();
		if(car='true'){
			car = 1;
		}else car = 0;
		var lang = $('#i-lang').val();
		var info = $('#i-info').html();
		if((file1!=null) & (file1!='')){
			form.append('i-file1',file1);};
		if(file2!=null & file2!=''){
			form.append('i-file2',file2);
		};
		form.append('uid',id);
		form.append('city',city);	
		form.append('exp',exp);
		form.append('car',car);
		form.append('lang',lang);
		form.append('info',info);
		console.log(form);
		$.ajax({
      url: '/main.php',
      type: "POST",
      cache:false,
      contentType: false, // важно - убираем форматирование данных по умолчанию
      processData: false, // важно - убираем преобразование строк по умолчанию
      data: form,
      beforeSend: function() {
        // setting a timeout
        	 $('.container').addClass('disabled');
        		
    		},
      success: function(response){
      	console.log(response);
      	location.replace('http://as/driver.php?id='+response+' ');
      }
		});
	}
	
	function file_1(file){
			$('#c-fille1').addClass('plus');
			file1 = file;
	}
	function file_2(file){
			$('#c-fille2').addClass('plus');
			file2 = file;
	}
$(document).ready(function(){
	$('#c-file1').on('click',function(){
		if($('#c-fille1').hasClass('plus')){
			$('#c-fille1').removeClass('plus');
			$('#file1').remove();
			$('#c-file2').after(inp_file1);
			file1 = '';
		}else {
			$('#file1').click();
		}
		
	});
	$('#c-file2').on('click',function(){
		if($('#c-fille2').hasClass('plus')){
			$('#c-fille2').removeClass('plus');
			$('#file2').remove();
			$('#c-file2').after(inp_file2);
			file2 = '';
		}else {
			$('#file2').click();
		}
	});



});


