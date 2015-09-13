$(document).ready(function(){


  /******carousel*****/
  $('.carouselChat').slick({
      centerMode: true,
	  centerPadding: '60px',
	  slidesToShow: 3,
	  //dots: true,
	  responsive: [
	    {
	      breakpoint: 768,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 3
	      }
	    },
	    {
	      breakpoint: 480,
	      settings: {
	        arrows: false,
	        centerMode: true,
	        centerPadding: '40px',
	        slidesToShow: 1
	      }
	    }
	  ]
	  });



});

window.onload= function ()
    {
/******Open Carousel*****/  
	
	$(".subCategoryGroup .btn:last").on("click",showSlider);


		function showSlider(){
			$('.carouselChat').css({"visibility":"visible","height":"212px"})
			
			console.log("done");
		}

	/*********Category secction******/
	$(".subCategoryGroup .btn").on('click',checkActive);

		function checkActive(){
			if(!$(this).hasClass('active'))
			{
				$(".subCategoryGroup .btn").removeClass('active');
				$(this).addClass("active");
			}
		}

}

				