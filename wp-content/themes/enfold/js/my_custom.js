 (function( $ ) {
    "use strict";
 
    $(function() {
    	var whatWeDoitemIndex,
    		slideTime = 3000;

    	//slide start
 		$('.what-we-do_icon .slider-items p').addClass('hidden');
		showWhatWeDoContent(0);

 		$('.what-we-do_right-text .av_textblock_section:first-child').addClass('active');
 		//add active to clicked item
 		$('.what-we-do_right-text .av_textblock_section').on('click', function(){
 			slide($(this));
 		});
 		
 		//auto rotate items
		window.setInterval(function(){
			if($('.what-we-do_right-text .av_textblock_section.active').next().length > 0){
				$('.what-we-do_right-text .av_textblock_section.active').removeClass('active').next().addClass('active');
			}else{
				$('.what-we-do_right-text .av_textblock_section.active').removeClass('active');
				$('.what-we-do_right-text .av_textblock_section:first-child').addClass('active');	
			}
			whatWeDoitemIndex = $('.what-we-do_right-text .av_textblock_section.active').index();
			showWhatWeDoContent(whatWeDoitemIndex);
		}, slideTime);

		function showWhatWeDoContent(index) {
			$('.what-we-do_icon .slider-items p:not(.hidden)').addClass('hidden');
			$('.what-we-do_icon .slider-items p:eq("'+ index +'")').removeClass('hidden');
		}

		function slide(item){
			$('.what-we-do_right-text .av_textblock_section.active').removeClass('active');
 			item.addClass('active');

 			whatWeDoitemIndex = $('.what-we-do_right-text .av_textblock_section.active').index();
 			showWhatWeDoContent(whatWeDoitemIndex);
		}

    });
 
}(jQuery)); 