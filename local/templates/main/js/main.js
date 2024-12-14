$(document).ready(function(){
	
	//слайдер на главной
	$(".index_slider").bxSlider({
		mode: 'fade'
	});
	
	//стилизация форм
	$(".filter_bl input:checkbox, .filter_bl input:radio, .styler input:radio, .styler input:checkbox, .styler select, .styler input:file").styler();
	
	//табы в детальной
	$('body').on('click', 'ul.tabs li:not(.current)', function() {
		$(this).addClass('current').siblings().removeClass('current')
			.parents('div.section').find('div.box').eq($(this).index()).fadeIn(150).siblings('div.box').hide();				
	});
	
	
});