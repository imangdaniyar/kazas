function search_inst(lang,car,exp,city) {
	$('.grid-inst').html('');
	var str = 'search=1&lang='+lang+'&car='+car+'&exp='+exp+'&city='+city;
			$.ajax({
				url: '/filtration.php',
        		type: "POST",
        		cache: false,
        		data: str,
                        beforeSend: function() {
        // setting a timeout
                 $('.container').addClass('disabled');
                        
                },
        	success: function(response) {
        		console.log(response);
        		if(response =="no"){
                    $('.container').removeClass('disabled');
        			$('.grid-inst').html('<span calss="inst-res">Результатов нет</span>');
        		}else{
        			$('.container').removeClass('disabled');
        			$('.grid-inst').html(response)
        			
        		}
        		
        		
        	}
});
}