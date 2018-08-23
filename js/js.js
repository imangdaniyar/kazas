$('.signin').hover(function(){
	$(this).addClass('hovered');
},function(){
	$(this).removeClass('hovered');
});
$('.signup').hover(function(){
	$(this).addClass('hovered');
},function(){
	$(this).removeClass('hovered');
});
$('.signup-form').hide();
$('.loginform').css('height','20vw');

$('.signin').click(function(){
	$('.signup').removeClass('active');
	$('.inp-er').hide();
	$('.loginform').css('height','20vw');

	$('.signin').addClass('active');
	$('.signup-form').fadeOut(0,function(){
		$('.signin-form').fadeIn();
	});
});	
$('.signup').click(function(){
	$('.signin').removeClass('active');
	$('.signup').addClass('active');
	$('.inp-er').hide();
	$('.loginform').css('transition','1s');
	$('.loginform').css('height','39vw');

	$('.signin-form').fadeOut(0,function(){
		$('.signup-form').delay(1000).fadeIn();
	});
	});

function as_filter(city) {
	$('.grid-container').html('');
	var str = 'foint='+city;
			$.ajax({
				url: '/filtration.php',
        		type: "POST",
        		cache: false,
        		data: str,
        	success: function(response) {
        		console.log(response);
        		if(response =="no"){
        			$('.grid-container').html('<span class="kek";>Результатов нет</span>');
        		}else{
        			$('.grid-container').html(response);
        		}
        		
        		
        	}
});
		}
function send_as(id,aid) {
	var text = $('#a-text').html();
	str = "afeed=1&id="+aid+'&uid='+id+'&text='+text;
	$.ajax({
				url: '/rain.php',
        		type: "POST",
        		cache: false,
        		data: str,
        	success: function(response) {
        		console.log(response);
        		if(response){
        			$('#a-comments').append(response);
        		}else{
        			
        		}
        		
        		
        	}
});
}

function delete_acom(id) {
	str = "adel=1&id="+id;
	$.ajax({
				url: '/rain.php',
        		type: "POST",
        		cache: false,
        		data: str,
        	success: function(response) {
        		console.log(response);
        		if(response){
        			$('#a-'+id).remove();
        		}else{
        			
        		}
        		
        		
        	}
});
}

