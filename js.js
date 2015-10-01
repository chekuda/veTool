/******carousel*****/
/*$(document).ready(function(){


  
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



});*/

window.onload= function ()
    {

    	/******Active menu*******/
    	//
    	//
    	//
    	/*$(".nav.navbar-nav.topNavOptions li").on("click",activeMenu);

    	function activeMenu(){
    		if(!$(this).hasClass('active'))
    		{
    			$(".nav.navbar-nav.topNavOptions li").removeClass("active");
    			$(this).addClass("active");
    		}
    	}*/


    	/*****display bigger images***/
    	//
    	//
    	//
    	$('.chocolat-parent').Chocolat();
		/******Open Carousel*****/  
		//
		//
		//
		var listButtons = $(".subCategoryGroup .btn");

		for (var lista = 0; lista<listButtons.length; lista++)
		{
			listButtons[lista].onclick = showSlider;
		}


		function showSlider(){
			//visible the right carousel
			//
			if($(this).text() == "SPORT")
			{
				$('.carouselChat').css({"visibility":"hidden","height":"0px"});
				$('.carouselChat.sport').css({"visibility":"visible","height":"auto"});

				$('.carouselveContact').css({"visibility":"hidden","height":"0px"});
				$('.carouselveContact.sport').css({"visibility":"visible","height":"auto"});

				$('.carouselveContact .flickity-viewport').css({"height":"320px"});
				$('.carouselveContact img').css({"height":"300px"});


			}
			else if($(this).text() == "TRAVEL")
			{
				$('.carouselChat').css({"visibility":"hidden","height":"0px"});
				$('.carouselChat.travel').css({"visibility":"visible","height":"auto"});

				$('.carouselveContact').css({"visibility":"hidden","height":"0px"});
				$('.carouselveContact.travel').css({"visibility":"visible","height":"auto"});
				
				$('.carouselveContact .flickity-viewport').css({"height":"320px"});
				$('.carouselveContact img').css({"height":"300px"});

			}
			else{
				$('.carouselChat').css({"visibility":"hidden","height":"0px"});
				$('.carouselveContact').css({"visibility":"hidden","height":"0px"});

				$('.carouselveContact .flickity-viewport').css({"height":"170px"});
				$('.carouselveContact img').css({"height":"150px"});


				alert("there isn't any chat for that at the moment");
			}



			console.log("done");
		}

	/*********Category secction******/
	//
	//
	//
	$(".subCategoryGroup .btn").on('click',checkActive);

		function checkActive(){
			if(!$(this).hasClass('active'))
			{
				$(".subCategoryGroup .btn").removeClass('active');
				$(this).addClass("active");
			}
		}




	/****carousel*****/
	//
	var elem = document.querySelector('.main-gallery');
	var flkty = new Flickity( elem, {
	  // options
	  //
	  cellAlign: 'left',
	  contain: true,
	  imagesLoaded: true,
	  wrapAround: true,
	  freeScroll: true
	});

	/****Go to next page******/
	//
	//
	//
	$(".bottomButtons .menuBottom.btn").on("click", checkTerms);

	function checkTerms(){
		if($("#termConditionCheck")[0].checked == false)
		{
			alert("Please check the Term&Conditions");
		}
		else{
			location.href = "../veTool/vecontact.html";
		}
	}
}

				