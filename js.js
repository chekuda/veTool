$(function () {
  // Grab the template script
  var theTemplateScript = $("#application").html();

  // Compile the template
  var theTemplate = Handlebars.compile(theTemplateScript);
  var context={
  	"veChat":"hello"
  }
var theCompiledHtml = theTemplate(context);
  // Add the compiled html to the page
  $('body').html(theCompiledHtml);
});


/*window.onload= function (){

	$(".typeTemplate .btn").on('click', showElements);


	//Function to show lements

	function showElements(){

		if(!$(this).hasClass('active'))
		{
			$(".typeTemplate .btn").removeClass('active');
			$(this).addClass('active');
		}
		$(".standardChoice").collapse('toggle');

	}
}*/
