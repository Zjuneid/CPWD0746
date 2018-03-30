$(function() {
$( "#datepicker" ).datepicker();
});

var $menuBTN{
		$menuBTN=$('.menu_btn')
		$navMap=$('.navigation-map');
		
		$menuBTN.toggleclass('open')
}


  /*$(".single-item").slick({
	dots: true
});*/

$( function() {
    $( "#tabs" ).tabs();
  } );
  

$(function(){
	var slide = function(){
		var $slideshow = $('#tabs'),
			//slidesToShow:3,
			slickConfig;
			slickConfig={
				/* dots: true, */
				infinite: false,
				speed: 300,
				slidesToShow: 5,
				slidesToScroll: 5,
				
				autoplay: true,
				autoplaySpeed: 2000,
				responsive: [
				{
				  breakpoint: 1024,
				  settings: {
					slidesToShow: 4,
					slidesToScroll:4,
					infinite: true,
					dots: true
				  }
				},
				{
				  breakpoint: 680,
				  settings: {
					slidesToShow: 3,
					slidesToScroll: 3
				  }
				},
				{
				  breakpoint: 480,
				  settings: {
					slidesToShow: 1,
					slidesToScroll: 1
				  }
				}
			] 
		};
	}
});
			
				