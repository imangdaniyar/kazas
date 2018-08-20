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
$('.loginform').css('height','40vh');

$('.signin').click(function(){
	$('.signup').removeClass('active');
	$('#error').hide();
	$('.loginform').css('height','40vh');

	$('.signin').addClass('active');
	$('.signup-form').fadeOut(0,function(){
		$('.signin-form').fadeIn();
	});
});	
$('.signup').click(function(){
	$('.signin').removeClass('active');
	$('.signup').addClass('active');
	$('#errors').hide();
	$('.loginform').css('transition','1s');
	$('.loginform').css('height','80vh');

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