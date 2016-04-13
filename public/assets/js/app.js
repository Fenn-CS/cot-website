

$(document).ready(function() {

		//Slider
		$('.slider').slider({
			animation: "fade",
		});


// Parallax
$('.parallax').parallax();

$('select').material_select();
$("select[required]").css({display: "inline", height: 0, padding: 0, width: 0});

$(".button-collapse").sideNav();

$('.datepicker').pickadate({
	selectMonths: true,
	selectYears: 100,
	format: 'dd-mm-yyyy',
	min: new Date(1945, 0, 1),
	editable: true,
	max: true,
	closeOnSelect: true,

	labelMonthNext: 'Next month',
	labelMonthPrev: 'Previous month',
	labelMonthSelect: 'Select a month',
	labelYearSelect: 'Select a year',

});
$("#dob").click(function(event) {
	event.stopPropagation();
	$(".datepicker").first().pickadate("picker").open();
});  

$('.dropdown-button').dropdown({
	inDuration: 300,
	outDuration: 225,
      constrain_width: true, // Does not change width of dropdown to that of the activator
      hover: true, // Activate on hover
      gutter: 0, // Spacing from edge
      belowOrigin: true, // Displays dropdown below the button
      alignment: 'left' // Displays dropdown with edge aligned to the left of button
  }
  );

		    // Next slide
		    $('.slider').slider('next');
// Previous slide
$('.slider').slider('prev');

		// Password validation
		window.onload = function () {
			document.getElementById("password1").onchange = validatePassword;
			document.getElementById("password2").onchange = validatePassword;
		}
		function validatePassword(){
			var pass2=document.getElementById("password2").value;
			var pass1=document.getElementById("password1").value;
			if(pass1!=pass2)
				document.getElementById("password2").setCustomValidity("Passwords Don't Match");
			else
				document.getElementById("password2").setCustomValidity('');  
//empty string means no validation error
}

});
