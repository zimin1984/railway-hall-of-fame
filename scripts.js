$(document).ready(function() {

	$('#addImageLink').click(function() {
            $('#uploadForm').show();
	    $('#addImageLink').hide();
	    $('#plusImage').hide();
        });
        
        $("a.imagegallery").fancybox({
			'transitionIn'	: 'elastic',
			'transitionOut'	: 'elastic'
	});

	$('#menu ul').addClass('hiddenMenu');
	$('#menu ul.visibleMenu').removeClass('hiddenMenu');
	
	$('#menu span').click(function() {
	
		$('#gallery').html('<img id="logo" src="images/logo.jpg" alt="">');
		scroll(0,0);
			
		var thisClass = $(this).attr('class');	
		$('#menu ul.' + thisClass).toggleClass('hiddenMenu');
		    
		$('#menu ul').each(function() {
			if(!$(this).hasClass('hiddenMenu') && !$(this).hasClass(thisClass)) $(this).addClass('hiddenMenu');
		});
		    
		$('#menu span').each(function() {
			if($(this).hasClass('opened') && !$(this).hasClass(thisClass)) $(this).removeClass('opened');
		});
		    
		$(this).toggleClass('opened');
            
        });
	
		
	$('.deleteLink').click(function() {
		$('#confirmDeleteWindow').show().html(
		'<br><br><br>Удалить сотрудника <b>'+$(this).attr('data-fio')+'</b> безвозвратно?' +
		'<br><br><button id="deleteButton">Удалить</button>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<button id="cancelButton">Отмена</button>');
		var url = $(this).attr('data-url');
		$('#deleteButton').click(function() {
			location.href=url;
		});
		$('#cancelButton').click(function() {
			$('#confirmDeleteWindow').hide();
		});
	});
	
	$('#hideForm').click(function() {
		$('#uploadForm').hide();
		$('#addImageLink').show();
	        $('#plusImage').show();
	});
	
	$('#saveImageButton').click(function() {
		if($('#fio').val()=='')
			alert('Не указано ФИО!');
		else if($('#image_file').val()=='')
			alert('Не выбрана фотография!');
		else{
			$('#uploadForm')[0].submit();
		}
	});
	
	var imagePosition=1;
	$('.changePosForm').each(function() {
		$(this).attr('value', imagePosition);
		$(this).attr('data-position-on-page', imagePosition);
		imagePosition++;
	});
	
	imagePosition=1;
	$('.position').each(function() {
		$(this).html('Позиция на странице:' + imagePosition);
		imagePosition++;
	});
	
	$('.changePosLink').click(function() {
		$(this).hide();
		$('span', $(this).parent()).show();
		$('.changePosForm', $(this).parent()).focus();
		
		$('.changePosButton', $(this).parent()).click(function() {
			var newPos = $('.changePosForm', $(this).parent()).attr('value');
			newPos = newPos.replace(new RegExp(' ','g'),'');
			
			var currPosRecID = $('.changePosForm', $(this).parent()).attr('data-id');
			var newPosRecID = $('.changePosForm[data-position-on-page='+ newPos +']').attr('data-id');
			var newPosAttr = $('.changePosForm[data-position-on-page='+ newPos +']').attr('data-position');
			var nominacia = $('#nominacia').attr('value');
			var curPos = $('.changePosForm',$(this).parent()).attr('data-position-on-page');
			
			if (newPos == curPos)
			    alert('Новая позиция не должна совпадать с текущей!');
			else if (newPos=='' || typeof newPosRecID == "undefined") alert('Неверно указана новая позиция!');
			else {
			  if(parseInt(newPos) < parseInt(curPos)) direction='up';
			  else direction='down';
			  location.href = 'change_order.php?curr_pos_id='+currPosRecID +'&new_pos_id='+newPosRecID+
			  '&new_pos='+newPosAttr+'&nominacia='+nominacia+'&direction='+direction;
			}
		});
	});
});


