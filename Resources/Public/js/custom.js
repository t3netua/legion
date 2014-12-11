$(window).load(function() {
    $(function() {
		$('#foo1').carouFredSel({
			auto: false,
			responsive: true,
			width: '100%',
			prev: '#prev',
			next: '#next',
			scroll: 1,
			items: {
				height: 'auto',
				width:100,
				visible: {
					min: 1,
					max: 21
				}
			},
			mousewheel: true,
			swipe: {
				onMouse: true,
				onTouch: true
			}
		});
	}); 	 				
});
	
$(document).ready(function(){
	jQuery('.camera_wrap').camera();
});
