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
	$('.loginform').css('height','40vh');

	$('.signin').addClass('active');
	$('.signup-form').fadeOut(0,function(){
		$('.signin-form').fadeIn();
	});
});	
$('.signup').click(function(){
	$('.signin').removeClass('active');
	$('.signup').addClass('active');
	$('.loginform').css('transition','1s');
	$('.loginform').css('height','80vh');

	$('.signin-form').fadeOut(0,function(){
		$('.signup-form').delay(1000).fadeIn();
	});
	});