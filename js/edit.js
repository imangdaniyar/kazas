	var inst_id = $('#getid').val();
$('#e-car').on('change',function(){
	var value = $('#e-car').val();
	var purpose = "car";
	var str = 'ecar=1&id='+inst_id+'&value='+value+'&purpose='+purpose;
	$.ajax({
		url: '/rain.php',
		type: 'POST',
		cache: false,
		data: str,
		success: function(response){
			console.log(response);
		}

	});	
});
$('#e-exp').on('change',function(){
	var value = $('#e-exp').val();
	var purpose = "exp";
	var str = 'ecar=1&id='+inst_id+'&value='+value+'&purpose='+purpose;
	$.ajax({
		url: '/rain.php',
		type: 'POST',
		cache: false,
		data: str,
		success: function(response){
			console.log(response);
		}

	});	
});
$('#e-city').on('change',function(){
	var value = $('#e-city').val();
	var purpose = "city";
	var str = 'ecar=1&id='+inst_id+'&value='+value+'&purpose='+purpose;
	$.ajax({
		url: '/rain.php',
		type: 'POST',
		cache: false,
		data: str,
		success: function(response){
			console.log(response);
		}

	});	
});
$('#e-phone').on('change',function(){
	var value = $('#e-phone').val();
	var str = 'tel=1&id='+inst_id+'&value='+value;
	$.ajax({
		url: '/rain.php',
		type: 'POST',
		cache: false,
		data: str,
		success: function(response){
			console.log(response);
		}

	});	
});
$('#e-lang').on('change',function(){
	var value = $('#e-lang').val();
	var purpose = "lang";
	var str = 'ecar=1&id='+inst_id+'&value='+value+'&purpose='+purpose;
	$.ajax({
		url: '/rain.php',
		type: 'POST',
		cache: false,
		data: str,
		success: function(response){
			console.log(response);
		}

	});	
});
$('#e-info').on('focusout',function(){
	var value = $('#e-info').html();
	var purpose = "info";
	var str = 'ecar=1&id='+inst_id+'&value='+value+'&purpose='+purpose;
	$.ajax({
		url: '/rain.php',
		type: 'POST',
		cache: false,
		data: str,
		success: function(response){
			console.log(response);
		}

	});	
});
