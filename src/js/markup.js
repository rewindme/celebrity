$(document).ready(function(){
	// GNB
	$('.gnb li .gnb_menu').mouseover(function(){
		$(this).parent().addClass('selected')
	})
	$('.gnb li').mouseleave(function(){
		$(this).removeClass('selected')
	})
	
	// 메인 목록 마우스 오버 이벤트
	$('.celebrity_intro .thumbnail').mouseover(function(){
		$(this).parent().addClass('hover')
	}).mouseout(function(){
		$(this).parent().removeClass('hover')
	})
	
	// 풋터 family Sites 이벤트 
	$('.combobox .cb-button').click(function(){
		$(this).parent().find('.cb-layer').toggle();
	})
	
})