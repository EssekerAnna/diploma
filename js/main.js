$(document).ready(function(){
	$('#fform').submit(function(){
	if (document.fform.from.value == '' || document.fform.where.value == '' || document.fform.name.value == '' || document.fform.phone.value == '' ) {
		valid=false;
		return valid;
	}
	$.ajax({
		type:"POST",
		url:"mail.php",
		data:$(this).serialize()
	}).done(function(){
			$('.js-overlay-thank-you').fadeIn();
			$(this).find('input').val('');
			$('#fform').trigger('reset');
		});
			return false;
		});
});


$(document).ready(function(){
	$('#mform').submit(function(){
	if (document.mform.from.value == '' || document.mform.where.value == '' || document.mform.name.value == '' || document.mform.phone.value == '' ) {
		valid=false;
		return valid;
	}
	$.ajax({
		type:"POST",
		url:"mail.php",
		data:$(this).serialize()
	}).done(function(){
			$('.js-overlay-thank-you').fadeIn();
			$(this).find('input').val('');
			$('#mform').trigger('reset');
			$('.overlay').fadeOut();
		});
			return false;
		});
});

$(document).ready(function(){
	$('#ovform').submit(function(){
	if (document.ovform.name.value == '' || document.ovform.phone.value == '' ) {
		valid=false;
		return valid;
	}
	$.ajax({
		type:"POST",
		url:"mailmailmail.php",
		data:$(this).serialize()
	}).done(function(){
			$('.js-overlay-thank-you').fadeIn();
			$(this).find('input').val('');
			$('#ovform').trigger('reset');
			$('.ov').fadeOut();
		});
			return false;
		});
});

$(document).ready(function(){
	$('#comform').submit(function(){
	if (document.comform.name.value == '' || document.comform.surname.value == '' || document.comform.comment.value == '' ) {
		valid=false;
		return valid;
	}
	$.ajax({
		type:"POST",
		url:"mailmail.php",
		data:$(this).serialize()
	}).done(function(){
			$('.js-overlay-thank-you_f').fadeIn();
			$(this).find('input').val('');
			$('#comform').trigger('reset');
		});
			return false;
		});
});

// $(document).ready(function(){$('#forma').submit(function(){if(document.forma.phone.value==''){valid=false;return valid;}
// 	$.ajax({type:"POST",url:"mail.php",data:$(this).serialize()}).done(function(){$('.js-overlay-thank-you').fadeIn();
// 		$(this).find('input').val('');$('#forma').trigger('reset');});return false;});});

// $(document).ready(function(){
// 	$('#mform').submit(function(){
// 		if(document.mform.phone.value=='')
// 			{valid=false;return valid;}
// 	$.ajax({
// 		type:"POST",
// 		url:"mail.php",
// 		data:$(this).serialize()}).done(function(){
// 			$('.js-overlay-thank-you').fadeIn();
// 		$(this).find('input').val('');
// 		$('#mform').trigger('reset');
// 		$('.overlay').fadeOut();});
// 		return false;});});

$(document).mouseup(function(e){var popup=$('.popup_o');
	if(e.target!=popup[0]&&popup.has(e.target).length===0){$('.js-overlay-thank-you').fadeOut();}});

$(document).mouseup(function(e){var popup=$('.popup_over');
	if(e.target!=popup[0]&&popup.has(e.target).length===0){$('.js-overlay-thank-you_f').fadeOut();}});

$(function($){$('[name="phone"]').mask("+7(999) 999-9999");});