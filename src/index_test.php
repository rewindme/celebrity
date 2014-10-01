<!DOCTYPE html>
<html lang="ko">
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width" /> 
<title>▒ 프리미엄 크루즈의 특별함, 모던 럭셔리의 진수 셀러브리티 크루즈 ▒</title>
<meta http-equiv="keyword" content="셀러브리티크루즈,크루즈여행, 크루즈여행비용,크루즈관광,지중해크루즈, 알래스카크루즈, 유럽크루즈, 북미크루즈, 카리브해크루즈, 아시아크루즈, 남미크루즈, 크루즈여행가격, 동남아크루즈여행, 북유럽크루즈여행, 갈라파고스 크루즈, 크루즈성지순례, 바하마크루즈, 홍콩크루즈, 이클립스호, 실루엣호, 살스티스호, 크루즈예약, celebrity cruises, cruise, celebrity, modern luxury, 모던럭셔리 크루즈, 럭셔리 크루즈">
<meta http-equiv="description" content="셀러브리티 크루즈는 럭셔리 크루즈와 대중적 크루즈의 장점을 결합한 대표적인 프리엄 크루즈 선사입니다. 역동적인 엔터테인먼트로 가득한 휴가 혹은 꿈 같이 편안한 휴가를 위한 휴가, 모든 것이 가능한 셀러브리티 크루즈는 전 세계로 365일 운항하는 글로벌 리딩 크루즈 선사 입니다.">

<link href="css/celebrity.css" media="all" rel="stylesheet" type="text/css" />
<script src="js/jquery.1.9.1.min.js"></script>
<script src="js/jssor.sliders.mini.js"></script>
<script src="js/markup.js"></script>
<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

  ga('create', 'UA-54473963-1', 'auto');
  ga('require', 'displayfeatures');
  ga('send', 'pageview');

</script>
<style>
@media screen and (max-width:640px){
.footer .connect_sns{display:none}
.footer .copyright{padding-bottom:14px}
.wrap.intro .intro_footer_cover .footer{width:auto;min-width:640px}
.wrap.intro .intro_content_cover #slider_container_main{left:-150px}
}
</style>
</head>
<body>
<div class="wrap intro">
	<div class="intro_header_cover">
		<h1 class="bi" style="min-width:640px"><a href="main.php"><i>Celebrity X Cruises</i></a></h1>
	</div>
	<div class="intro_content_cover" style="min-width:640px">		
		<div id="slider_container_main">
			<!-- Loading Screen -->
	        <div u="loading" style="position: absolute; top: 0px; left: 0px;z-index:10">
	            <div style="filter: alpha(opacity=70); opacity: 0.7; position: absolute; display: block;
	                top: 0px; left: 0px; width: 100%; height: 100%;background-color:#000">
	            </div>
	            <div style="position: absolute; display: block;top: 0px; left: 0px; width: 100%; height: 100%;">
	            </div>
	        </div>
	        <!-- Slides Container -->
	        <div u="slides" class="cover">
	            <div class="item">
	            	<img src="im/intro/intro_bg01.jpg" alt="intro_bg01" width="1600" height="1080">
	            	<span class="skip_intro"><a href="main.php"><i class="blind">skip</i></a></span>
	            </div>	            
	            <div class="item"><img src="im/intro/intro_bg03.jpg" alt="intro_bg03" width="1600" height="1080"><span class="skip_intro lang_ko"><a href="main.php"><i class="blind">skip</i></a></span></div>
	            <div class="item"><img src="im/intro/intro_bg02.jpg" alt="intro_bg02" width="1600" height="1080"><span class="skip_intro"><a href="main.php"><i class="blind">skip</i></a></span></div>
	            <div class="item"><img src="im/intro/intro_bg04.jpg" alt="intro_bg04" width="1600" height="1080"><span class="skip_intro lang_ko"><a href="main.php"><i class="blind">skip</i></a></span></div>
	        </div>
	    </div>
	</div>
	<div class="intro_footer_cover">
		<?php include 'include/footer.php'; ?>
	</div>	
</div>
<script>
jQuery(document).ready(function ($) {
	var _SlideshowTransitions_opacity = 2;
	var _SlideshowTransitions_duration = 1200;
	if (navigator.userAgent.match(/(MSIE 8|MSIE 7)/)){
		_SlideshowTransitions_opacity = 2;
		_SlideshowTransitions_duration = 0;
	}
	var _SlideshowTransitions = [
		//Fade
		{ $Duration: _SlideshowTransitions_duration, $Opacity: _SlideshowTransitions_opacity }
	];
  
    var options = {
        $FillMode: 2,                                       //[Optional] The way to fill image in slide, 0 stretch, 1 contain (keep aspect ratio and put all inside slide), 2 cover (keep aspect ratio and cover whole slide), 4 actual size, 5 contain for large image, actual size for small image, default value is 0
        $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
        $AutoPlayInterval: 3000,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
        $PauseOnHover: 0,                                   //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, default value is 1
        $PlayOrientation: 1,                                //[Optional] Orientation to play slide (for auto play, navigation), 1 horizental, 2 vertical, 5 horizental reverse, 6 vertical reverse, default value is 1
        $StartIndex: Math.floor((Math.random() * 4) + 1),
        $DragOrientation: 0,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)

        $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
			$Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
			$Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
			$TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
		
		}            
	};

    var jssor_slider1 = new $JssorSlider$("slider_container_main", options);

    //responsive code begin
    //you can remove responsive code if you don't want the slider scales while window resizes
   /*
 var bodyWidth = document.body.clientWidth;
    
    jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 3000));                    
    var sc_v = $('#slider_container_main').height() / 1080;
    $(".skip_intro a").css("top",$(".wrap").height() / 2 / sc_v);
*/
    
    function ScaleSlider() {
        var bodyWidth = document.body.clientWidth;
        
        if (bodyWidth > 940){
            jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 3000));                    
            var sc_v = $('#slider_container_main').height() / 1080;
            $(".skip_intro a").css("top",$(".wrap").height() / 2 / sc_v);
            
		}	
        else{
            bodyWidth = 940;
            jssor_slider1.$SetScaleWidth(Math.min(bodyWidth, 3000));                    
            var sc_v = $('#slider_container_main').height() / 1080;
            $(".skip_intro a").css("top",$(".wrap").height() / 2 / sc_v);
/*             window.setTimeout(ScaleSlider, 200); */
            
		}
		/* alert(bodyWidth); */
    }
	
	
    ScaleSlider();
	
	

    if (!navigator.userAgent.match(/(iPhone|iPod|iPad|BlackBerry|IEMobile)/)) {
        $(window).bind('resize', ScaleSlider);
    }

});
</script>
</body>
</html>