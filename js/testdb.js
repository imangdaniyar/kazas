var form = new FormData();


function 	add_pic(file,id) {
	form.append('file'+id,file);
}

function 	delete_pic(id) {
	$('#picture'+id).html('');
	$('#picture'+id).html('<input type="file" id="pic'+id+'"><button onclick="delete_pic('+id+');">Удалить</button>');
	form.delete('file'+id);
}

function 	up_test(id) {
	var q = $('#question').val();
	var a1 = $('#ans1').val();
	var a2 = $('#ans2').val();
	var a3 = $('#ans3').val();
	form.append('id',id);
	form.append('q',q);
	form.append('a1',a1);
	form.append('a2',a2);
	form.append('a3',a3);
	$.ajax({
      url: '/addtest.php',
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
      	if(response == 'ok'){
      		location.reload();
      	}
      	
      }
		});
}


function  up_video(id) {
  form.append('vid',id);
  form.append('video',$('#video_url').val());
  $.ajax({
      url: '/addtest.php',
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
        if(response == 'ok'){
          location.reload();
        }
        
      }
    });
}







