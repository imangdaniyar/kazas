function search_inst(lang,car,exp,city) {
	$('.grid-inst').html('');
	var str = 'search=1&lang='+lang+'&car='+car+'&exp='+exp+'&city='+city;
			$.ajax({
				url: '/filtration.php',
        		type: "POST",
        		cache: false,
        		data: str,
        	success: function(response) {
        		console.log(response);
        		if(response =="no"){
        			$('.grid-inst').html('<span style="width:100%; height:50vh;	">Результатов нет</span>');
        		}else{
        			
        			$('.grid-inst').html(response)
        			
        		}
        		
        		
        	}
});
}