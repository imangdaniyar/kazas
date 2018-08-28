var ra = 0;

function check_test(id) {
	var val = $('input[type=radio][name=ans-'+id+']:checked').val();
	if(val =='c1'){
		$('input[type=radio][name=ans-'+id+']:checked').siblings('label').css('color','lightgreen');
		ra = ra + 1;
		$('#ra').html(''+ra);
		$('#f-'+id).css('pointer-events','none');
	}else{
		$('input[type=radio][name=ans-'+id+']:checked').siblings('label').css('color','red');
		$('input[type=radio][name=ans-'+id+'][value=c1]').siblings('label').css('color','lightgreen');
		$('#f-'+id).css('pointer-events','none');
	}

}