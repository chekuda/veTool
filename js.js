
window.onload= function (){

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
}
