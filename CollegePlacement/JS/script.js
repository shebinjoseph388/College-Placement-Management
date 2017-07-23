$(function(){
	
	// Checking for CSS 3D transformation support
	$.support.css3d = supportsCSS3D();
	
	var formContainer = $('#formContainer');
	
	// Listening for clicks on the ribbon links
	
	$('.flipLink').click(function(e){
			
		// Flipping the forms
		formContainer.toggleClass('flipped');
		//$('#login_form1').toggle();
		$('#login_form1').fadeOut("slow");
		$('#button_form').hide();
		//$('#login_form1').fadeIn();
		$('#signin_student_form').fadeIn();
			//$('#login_form1').hide();
			//$('#signin_student_form').show();
		
		// If there is no CSS3 3D support, simply
		// hide the login form (exposing the recover one)
		if(!$.support.css3d){
		
			$('#login_form1').toggle();
			$('#login_form1').fadeOut("slow");
			$('#signin_student_form').fadeIn();
		}
		e.preventDefault();
	});
	
	$('.flipToLogin').click(function(e){
			
		// Flipping the forms
		formContainer.toggleClass('flipped');
		
		$('#signin_student_form').fadeOut("slow");
		$('#signin_student_form').hide();
		$('#login_form1').fadeIn();
		$('#button_form').fadeIn();
		// If there is no CSS3 3D support, simply
		// hide the login form (exposing the recover one)
		if(!$.support.css3d){
			$('#signin_student_form').toggle();
		$('#login_form1').show();
			
			
			
		}
		e.preventDefault();
	});
	
	
	
	// A helper function that checks for the 
	// support of the 3D CSS3 transformations.
	function supportsCSS3D() {
		var props = [
			'perspectiveProperty', 'WebkitPerspective', 'MozPerspective'
		], testDom = document.createElement('a');
		  
		for(var i=0; i<props.length; i++){
			if(props[i] in testDom.style){
				return true;
			}
		}
		
		return false;
	}
});
