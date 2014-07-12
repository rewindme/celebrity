$(document).ready(function(){
	// GNB 마우스 오버/아웃
	$('.header').on('mouseover',".gnb_menu",function(){
		$(this).parent().addClass('selected')
	}).on('mouseleave',".gnb li",function(){
		$(this).removeClass('selected')
	})
	
	// 메인 목록 오버
	$('.info_list .thumbnail').mouseover(function(){
		$(this).parent().addClass('hover')
	}).mouseout(function(){
		$(this).parent().removeClass('hover')
	})
	
	// 풋터 family Sites 이벤트 
	$('.footer').on('click','.combobox .cb-button',function(){
		$(this).parent().find('.cb-layer').toggle();
	})
	
	$('.cb-label').on('click',function(){
		$(this).parent().toggleClass('open');
	})
})

// ajax include
function load_section(param){
	if (!param){return false;}
	$.each(param,function(idx,value){
		var sID = value.section, fName = value.fileName;
		$.get("./"+fName,function(data){
			$(sID).html($(data).find(sID).html())
			console.log($(data).find(sID))
		}).success(function(){
			console.log(sID)
		}).fail(function(){
			console.log('못불러왔쪄욤 뿌잉뿌잉')
		});
	});	
}
