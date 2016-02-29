
var owl= $(".carousel");

$(document).ready(function(){

	if(owl.length != 0 ){
		owl.owlCarousel({
			    center: true,
			    loop:true,
			    autoWidth : true,
			    margin:10,
			    navigation : true,
			    navigationText: [
			      "<i class='icon-chevron-left icon-white'><</i>",
			      "<i class='icon-chevron-right icon-white'>></i>"
			      ],
			    pagination : false,
			    itemsDesktop : [2400,4],
			    itemsDesktopSmall : [980,3],
			    itemsMobile : [479,1],
			    itemsTablet: [768,2]
			    
			});
	}

	/****************************************
	  bubbles with extra information for Form
	****************************************/
	//
	if($("#myModal"))
	{
		//Firs idea about client should provide the complete URL
		//$('#completeURL').tooltip({title: "The final page that a customer lands on when they have successfully purchased", placement: "top"});

		$('#veContactEmail').tooltip({title: "The 'EmailFrom' address that your customer sees when receiving an email e.g. support@abc.com", placement: "bottom"}); 
	}

	/********************
		change language
	*********************/
	//
	$(".lan_selection").on("click",changeLanguage)
	
	//Posting the variable selected by the client
	function changeLanguage(){
		var sel = $(this).text();
		$.ajax({
			type:"POST",
			url:"switchlan.php",
			data:{lanSelected:sel},
			success: function(data){
				location.reload();
			}
		})
	}
})


window.onload = function ()
    {


    	
    	
    	/********************************
    				Carousel
    	*********************************/
    	//
    	//
    	//
    	$('.chocolat-parent').Chocolat();
		//
		//
		//@listaButtons=Array with all the sector buttons
		var listButtons = $(".subCategoryGroup .btn");

		for (var lista = 0; lista<listButtons.length; lista++)
		{
			listButtons[lista].onclick = showSlider;
		}

		//
		//@currentApp=vePrompt or veContact depend of the view
		//@currentSector= Sector selected by the client
		//@path_images_chat = path of chat templates
		//@path_images_contact = path of chat templates
		//@numImages = num of img inside the galery sector
		function showSlider(){
			//visible the right carousel
			//
			//Arrows for carousel
			$('.owl-wrapper-outer').css({"display":"block"});
			$('.carousel.chat').css({"visibility":"hidden","height":"0px","display":"none"});
			$('.carousel.contact').css({"visibility":"hidden","height":"0px","display":"none"});

			
			var currentApp;
			var currentSector = $(this).text();

			

			if(document.getElementById("veChatView"))
			{
				currentApp = "chat";
			}
			else{
				currentApp = "contact";
			}


			
			//display chat carousel
			if(currentSector)
			{
				var numImages = $(".carousel."+currentApp+"."+currentSector+" img");
				
				$(".carousel."+currentApp+"."+currentSector+"").css({"visibility":"visible","height":"auto","display":"block"});
				
				if( currentApp == "contact")
				{
					$('.carousel.contact img').css({"height":"300px"});
				}
				
				$.each(numImages, function( index, value )
				{
					numImages[index].setAttribute("src",numImages[index].getAttribute('href'));
				});

			}
			

			console.log("slider showed");
		}

	/**********************
		Category secction
	**********************/
	//
	//@@this function will add the class active to the sector button
	$(".subCategoryGroup .btn").on('click',checkActive);

		function checkActive(){
			if(!$(this).hasClass('active'))
			{
				$(".subCategoryGroup .btn").removeClass('active');
				$(this).addClass("active");
				
			}
		}

	/***********************************
		Delete the animation banner 
	***********************************/
	//
	//@@Remove the animation banner on mouseover
	$(".bannerSelection").on("mouseover",removeBanner);

	function removeBanner(){
		$(".bannerSelection").hide();
		$(".menuCategory.btn").css({"visibility":"visible"});
	}



	/********************
		   carousel
	*********************/
	//
	//@@Higlighted the image selected and tick the checkBox
	$(".gallery-cell").on("click",selectDesing);

	function selectDesing()
	{
		
		$(".gallery-cell").removeClass("is-selected");
		$(this).addClass("is-selected");
		if($(this).find(".selection").hasClass("selectionSelected"))
   		{
   			$(".selectionSelected").removeClass("selectionSelected");
   		}
   		else
   		{
   			$(".selectionSelected").removeClass("selectionSelected");
			$(this).find(".selection").addClass("selectionSelected");
   		}
	}

	

	/******************************************
	 Save design in sessionStore from carousel
	******************************************/
	//
	//@currentImage= Image selected/clicked by the customer
	//@sectorSelected = Sector button selected by the customer
	$(".bottomButtons a").on("click", creativeSelected);

	function creativeSelected(){
		//make sure the botton clicked is next so the client want the chat
		var buttonValue = $(this).text();
		if(buttonValue == "Next" || buttonValue == "下一步" || buttonValue == "下一步" || buttonValue == "Tiếp theo"){
			//if any image has been selected
			if($(".selection.selectionSelected").length != 0){
				var currentImage = $(".selection.selectionSelected")[0];
				var sectorSelected = $(".subCategoryGroup .menuCategory.active").text();
				if(currentImage && sectorSelected)
				{
					//if the customer if on veContact page, the image will be saved on sessionStore and call the sumary() 
					if(window.location.href.indexOf("contact") != -1){
						sessionStorage.setItem('veContact_creative_Selected',currentImage.name);
						//Call the function sumary to add the images on the popUp sumary
						sumary();
					}//If the client is on vePrompt page, the image will be saved on sessionStore
					else{
						sessionStorage.setItem('veChat_creative_Selected',currentImage.name);
						sessionStorage.setItem('companySector',sectorSelected);
					}
				}
				
			}
			else{//this for the client who wants only vePrompt and click Next
				if(window.location.href.indexOf("contact") != -1){
					sumary();
				}
			}
		}
		
	}

	/***************************************************
		Add templates from session store to the sumary
	****************************************************/
	//
	//@chatTemplate = Templage got from the sessionStorage
	//@contactTemplate = Template got from sessionStorage
	function sumary(){

		if(!sessionStorage.getItem("veChat_creative_Selected") && !sessionStorage.getItem("veContact_creative_Selected"))
		{
			alert("Please select any vePromt or veContact template");			
		}
		else{

			if(sessionStorage.getItem("veContact_creative_Selected")){
				var contactTemplate = sessionStorage.getItem("veContact_creative_Selected");
				$("#sumaryContact img").attr("src",contactTemplate);
				$("#sumaryContact img").attr("name",contactTemplate);
				$("#sumaryContact img").css({"display":"block"});
				$(".contactClose").css({"display":"block"});
				$("#contactTemplate").val(contactTemplate);
				if($(window).width()>325)
				{
					$(".sumarytemplate").css({"height":"436px"});
				}

				$("#veContactEmail").css({"display":"block"});//Add veContact sender Email from Form
				$("#veContactEmail").attr("required",true);
			}
			else{

				$("#veContactEmail").css({"display":"none"});//remove veContact sender Email from Form
				$("#veContactEmail").attr("required",false);
				$(".sumarytemplate:last").css({"display":"none"});
			}

			if(sessionStorage.getItem("veChat_creative_Selected")){
				var chatTemplate = sessionStorage.getItem("veChat_creative_Selected");
				$("#sumaryChat img").attr("src",chatTemplate);
				$("#sumaryChat img").attr("name",chatTemplate);
				$("#sumaryChat img").css({"display":"block"});
				$(".chatClose").css({"display":"block"});
				$("#chatTemplate").val(chatTemplate);
			}
			else{
				$(".sumarytemplate:first").css({"display":"none"});
			}
			

			//Call modal() if the client has any of the templates in sessionStorage
			$("#myModal").modal();
			
		}
		
		
	}

	//Autoselect the sector by sessionStore and display the carousel of the sector selected
	//
	
	//@sector= Sector from the sessionStorage
	if($("#veContactView").length != 0 && sessionStorage.getItem("companySector"))
	{
		autoSector();
	}
	//@@This function will be executed as soon as the client select any sector in vePrompt page
		function autoSector(){

			var sector = sessionStorage.getItem("companySector");
			//add class active to the sector button
			if(sector){
				$('#'+sector).trigger('click');
				removeBanner();
			}
			
		}
		

	/********************************
		delete templates from sumary
	********************************/
	//
	//@@Removing the chat and Contact template from sumary clicking on X button
	$(".chatClose").on("click",removeChatSumary)

	function removeChatSumary(){
		$("#sumaryChat img").removeAttr("src");
		$("#sumaryChat img").removeAttr("name");
		$("#sumaryChat img").css({"display":"none"});
		$(this).css({"display":"none"});
		sessionStorage.removeItem("veChat_creative_Selected");

	}
	$(".contactClose").on("click",removeContactSumary)

	function removeContactSumary(){
		$("#sumaryContact img").removeAttr("src");
		$("#sumaryContact img").removeAttr("name");
		$("#sumaryContact img").css({"display":"none"});
		$(this).css({"display":"none"});
		sessionStorage.removeItem("veContact_creative_Selected");
		//remove senderEmail from Form
		$("#veContactEmail").css({"display":"none"});//remove veContact sender Email
		$("#veContactEmail").attr("required",false);
		$(".sumarytemplate").css({"height":"auto"});
		
	}

	//display terms&conditions
	$("#terms1").on("click",openPDF);

	$("#terms2").on("click",openPDF);

	function openPDF(){
		var openTerm = $(this).text();
		if(openTerm == "here" || openTerm == "đây" || openTerm == "点击" || openTerm == "此" )
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



				