
function deactivate(id) {
	str = "dis=1&id="+id;
	$.ajax({
				url: '/rain.php',
        		type: "POST",
        		cache: false,
        		data: str,
                        beforeSend: function() {
        // setting a timeout
                 $('.container').addClass('disabled');
                        
                },

        	success: function(response) {
        		console.log(response);
        		if(response =="Успешно"){
        			location.reload();
        		}
        	}
        });

}
function activate(id) {
	str = "act=1&id="+id;
	$.ajax({
				url: '/rain.php',
        		type: "POST",
        		cache: false,
        		data: str,
                        beforeSend: function() {
        // setting a timeout
                 $('.container').addClass('disabled');
                        
                },
        	success: function(response) {
        		console.log(response);
        		if(response =="Успешно"){
        			location.reload();
        		}
        	}
        });

}
function delete_inst(id) {
	str = "del=1&id="+id;
	$.ajax({
				url: '/rain.php',
        		type: "POST",
        		cache: false,
        		data: str,
                        beforeSend: function() {
                                $('.container').addClass('disabled');
                        },
        	success: function(response) {
        		console.log(response);
        		if(response =="Успешно"){
        			location.reload();
        		}
        	}
        });

}