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
 var owl= $(".carousel");


$(document).ready(function(){

if(owl.length != 0 ){
	owl.owlCarousel({
		    center: true,
		    loop:true,
		    margin:10,
		    navigation : true,
		    pagination : false,
		    itemsDesktop : [2400,4],
		    itemsDesktopSmall : [980,1],
		    itemsMobile : [479,1],
		    itemsTablet: [768,3]
		    
		});
}
 


})


window.onload = function ()
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
			//Arrows for carousel
			$("#testbutton").css({"visibility":"visible"});
			$('.owl-wrapper-outer').css({"display":"block"});
			$('.carousel.chat').css({"visibility":"hidden","height":"0px","display":"none"});
			$('.carousel.contact').css({"visibility":"hidden","height":"0px","display":"none"});

			if($(this).text() == "sport")
			{
				$('.carousel.chat.sport').css({"visibility":"visible","height":"auto","display":"block"});
				$('.carousel.contact.sport').css({"visibility":"visible","height":"auto","display":"block"});
				$('.carousel.contact img').css({"height":"300px"});


			}
			else if($(this).text() == "travel")
			{
				$('.carousel.chat.travel').css({"visibility":"visible","height":"auto","display":"block"});
				$('.carousel.contact.travel').css({"visibility":"visible","height":"auto","display":"block"});
				$('.carousel.contact img').css({"height":"300px"});

			}
			else if($(this).text() == "fashion")
			{
				$('.carousel.chat.travel').css({"visibility":"visible","height":"auto","display":"block"});
				$('.carousel.contact.travel').css({"visibility":"visible","height":"auto","display":"block"});
				$('.carousel.contact img').css({"height":"300px"});

			}
			else{
				$('.carousel.chat').css({"visibility":"hidden","height":"0px"});
				$('.carousel.contact').css({"visibility":"hidden","height":"0px"});

				$('.carousel.contact .flickity-viewport').css({"height":"170px"});
				$('.carousel.contact img').css({"height":"150px"});


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
		$(".menuCategory.btn").css({"visibility":"visible"});
	}



	/****carousel*****/
	//
	//Add border to selected image
	$(".gallery-cell").on("click",selectDesing);

	function selectDesing()
	{
		$(".gallery-cell").removeClass("is-selected");
		$(this).addClass("is-selected");
	}

	/****Save design in sessionStore from carousel******/
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
				var sectorSelected = $(".subCategoryGroup .menuCategory.active").text();
				//create 
				if($("nav.topBarmenu li.active").text() == "VeContact"){
					sessionStorage.setItem('veContact_creative_Selected',currentImage.src);
					//Call the function sumary to add the images on the popUp sumary
					sumary();
				}
				else{
					sessionStorage.setItem('veChat_creative_Selected',currentImage.src);
					sessionStorage.setItem('companySector',sectorSelected);
				}
				
			}
			else{//this for the client who wants only vePrompt
				if($("nav.topBarmenu li.active").text() == "VeContact"){
					sumary();
				}
			}
		}		
	}

	//""""""""""Add templates for the sumary********
	//
	//
	function sumary(){

		if(sessionStorage.getItem("veChat_creative_Selected")){
			var chatTemplate = sessionStorage.getItem("veChat_creative_Selected");
			$("#sumaryChat img").attr("src",chatTemplate);
			$("#sumaryChat img").css({"display":"block"});
		}
		else{
			$(".sumarytemplate:first").css({"display":"none"});
		}
		if(sessionStorage.getItem("veContact_creative_Selected")){
			var contactTemplate = sessionStorage.getItem("veContact_creative_Selected");
			$("#sumaryContact img").attr("src",contactTemplate);
			$("#sumaryContact img").css({"display":"block"});
		}
		else{
			$(".sumarytemplate:last").css({"display":"none"});
		}
		
	}

	//Autoselect the sector by sessionStore
	if($("#veContactView").length != 0 && sessionStorage.getItem("companySector"))
	{
		autoSector();
		function autoSector(){

			var sector = sessionStorage.getItem("companySector");
			//add class active to the sector button
			$(".menuCategory.btn#"+sector).addClass("active");
			//display sectionsMenu
			$(".menuCategory.btn").css({"visibility":"visible"});
			//delete the bouncing banner
			$(".bannerSelection").css({"display":"none"});
			//display the carousel
			$('.carousel.contact').css({"visibility":"hidden","height":"0px","display":"none"});
			$('.carousel.contact.'+sector).css({"visibility":"visible","height":"auto","display":"block"});

			$('.carousel.contact .owl-wrapper-outer').css({"display":"block"});
			$('.carousel.contact img').css({"height":"300px"});
		}
		
	}

	//display terms&conditions
	$("#terms1").on("click",openPDF);

	$("#terms2").on("click",openPDF);

	function openPDF(){
		if($(this).text() == "here")
		{
			//full terms and Conditions
			window.open("http://vebuilder.com/doc/VeContract.pdf","_blank");

		}
		else
		{
			//Policity
			window.open("http://www.veinteractive.com/legal-policies/privacy","_blank");
		}
	}
	

	
}

				