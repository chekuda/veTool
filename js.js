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


    	/*****display bigger images at carousel***/
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
				$('.carouselChat').css({"visibility":"hidden","height":"0px","display":"none"});
				$('.carouselChat.sport').css({"visibility":"visible","height":"auto","display":"block"});

				$('.carouselveContact').css({"visibility":"hidden","height":"0px","display":"none"});
				$('.carouselveContact.sport').css({"visibility":"visible","height":"auto","display":"block"});

				$('.carouselveContact .flickity-viewport').css({"height":"320px"});
				$('.carouselveContact img').css({"height":"300px"});


			}
			else if($(this).text() == "TRAVEL")
			{
				$('.carouselChat').css({"visibility":"hidden","height":"0px","display":"none"});
				$('.carouselChat.travel').css({"visibility":"visible","height":"auto","display":"block"});

				$('.carouselveContact').css({"visibility":"hidden","height":"0px","display":"none"});
				$('.carouselveContact.travel').css({"visibility":"visible","height":"auto","display":"block"});
				
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



			console.log("slider showed");
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

	/**********Delete the banner for sector********/
	//
	//
	//
	$(".bannerSelection").on("mouseover",removeBanner);

	function removeBanner(){
		$(this).css({"display":"none"});
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

	/****Select a design from carousel******/
	//
	//
	//
	$(".bottomButtons a").on("click", creativeSelected);

	function creativeSelected(){
		//make sure the botton clicked is next so the client want the chat
		if($(this).text() == "Next"){
			//if any image has been selected
			if($(".gallery-cell.is-selected").length != 0){
				var currentImage = $(".gallery-cell.is-selected img")[0];
				//create 
				if($("nav.topBarmenu li.active").text() == "VeContact"){
					localStorage.setItem('veContact_creative_Selected',currentImage.src);
					//Call the function sumary to add the images on the popUp sumary
					sumary();
				}
				else{
					localStorage.setItem('veChat_creative_Selected',currentImage.src);
				}
				
			}
		}		
	}

	//""""""""""Add templates for the sumary********
	//
	//
	function sumary(){

		if(localStorage.getItem("veChat_creative_Selected")){
			var chatTemplate = localStorage.getItem("veChat_creative_Selected");
			$("#sumaryChat img").attr("src",chatTemplate);
		}
		else{
			$(".sumarytemplate:first").css({"display":"none"});
		}
		if(localStorage.getItem("veContact_creative_Selected")){
			var contactTemplate = localStorage.getItem("veContact_creative_Selected");
			$("#sumaryContact img").attr("src",contactTemplate);
		}
		else{
			$(".sumarytemplate:last").css({"display":"none"});
		}
		
	}




	
}

				