$(document).ready(function(){
////////////////////////////////////////////////////////////////////////////////////
//NAVIGATION FIXING FUNCTION
	$(window).clearQueue().scroll(function(){
		var top = $(window).scrollTop() +0;
		var subnav = $('#sub-nav').offset().top;
		var mainnav = $('#main-nav').offset().top + 65;
		
		if(subnav < top){
			$('#sub-nav').addClass('sub-fixed');
			$('#left-fixed-drop').css('display','inline');
			$('#sub-clearfix').show();
			$('.sub-fixed-form').show();
			$('#right-nav').hide();
			$('#cart-main li a').css('padding','12px 10px');
			$('#cart-bg.dropdown-toggle').css('padding','10px 10px');
		}
		else if(mainnav > top){
			$('#sub-nav').removeClass('sub-fixed');
			$('#left-fixed-drop').hide();
			$('#sub-clearfix').hide();
			$('#sub-nav-expandable').hide();
			$('#sub-nav-expandable').removeClass('down');
			$('#left-fixed-drop i').addClass('fa-bars').removeClass('fa-times');
			$('#left-fixed-drop').css('background-color','inherit');
			$('.sub-fixed-form').hide();
			$('#right-nav').show();
			$('#cart-main li a').css('padding','10px 10px');
			$('#cart-bg.dropdown-toggle').css('padding','8px 10px');

		}
		
	});
//SUB NAV FIXED DROPDOWN
	$('#left-fixed-drop').on('click',function(){
		if(!$('#sub-nav-expandable').is('.down')){
			$('#sub-nav-expandable').slideDown();
			$('#sub-nav-expandable').addClass('down');
			$('#left-fixed-drop i').addClass('fa-times').removeClass('fa-bars');
			$('#left-fixed-drop').css('background-color','rgb(44, 126, 213)').css('color','rgb(143, 0, 5)');
		}
		else{
			$('#sub-nav-expandable').slideUp();
			$('#sub-nav-expandable').removeClass('down');
			$('#left-fixed-drop i').addClass('fa-bars').removeClass('fa-times');
			$('#left-fixed-drop').css('background-color','inherit').css('color','white');
		}
	});
	$('#under-home-wrap').on('click',function(){
		if($('#sub-nav-expandable').is('.down')){
			$('#sub-nav-expandable').slideUp();
			$('#sub-nav-expandable').removeClass('down');
			$('#left-fixed-drop i').addClass('fa-bars').removeClass('fa-times');
			$('#left-fixed-drop').css('background-color','inherit');
		}
	});
	$('#home-text').on('click',function(){
		if($('#sub-nav-expandable').is('.down')){
			$('#sub-nav-expandable').slideUp();
			$('#sub-nav-expandable').removeClass('down');
			$('#left-fixed-drop i').addClass('fa-bars').removeClass('fa-times');
			$('#left-fixed-drop').css('background-color','inherit');
		}
	});
////////////////////////////////////////////////////////////////////////////////////
////////////HOME BOXES HOVER STATES
////top left
$('#top-main-cta-1').mouseenter(function() {
	$('#top-main-left').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#top-main-cta-1').mouseleave(function() {
	$('#top-main-left').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
$('#top-title-1').mouseenter(function() {
	$('#top-main-left').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#top-title-1').mouseleave(function() {
	$('#top-main-left').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
////top right
$('#top-main-cta-2').mouseenter(function() {
	$('#top-main-right').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#top-main-cta-2').mouseleave(function() {
	$('#top-main-right').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
$('#top-title-2').mouseenter(function() {
	$('#top-main-right').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#top-title-2').mouseleave(function() {
	$('#top-main-right').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
//bottom left
$('#bottom-cta-1').mouseenter(function() {
	$('#secondary-main-left').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#bottom-cta-1').mouseleave(function() {
	$('#secondary-main-left').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
$('#secondary-title-1').mouseenter(function() {
	$('#secondary-main-left').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#secondary-title-1').mouseleave(function() {
	$('#secondary-main-left').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
//bottom middle
$('#bottom-cta-2').mouseenter(function() {
	$('#secondary-main-center').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#bottom-cta-2').mouseleave(function() {
	$('#secondary-main-center').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
$('#secondary-title-2').mouseenter(function() {
	$('#secondary-main-center').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#secondary-title-2').mouseleave(function() {
	$('#secondary-main-center').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
//bottom right
$('#bottom-cta-3').mouseenter(function() {
	$('#secondary-main-right').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#bottom-cta-3').mouseleave(function() {
	$('#secondary-main-right').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});
$('#secondary-title-3').mouseenter(function() {
	$('#secondary-main-right').css('background-size', '110% 110%').css('box-shadow', '0 0 15px white');
});
$('#secondary-title-3').mouseleave(function() {
	$('#secondary-main-right').css('background-size', '100% 100%').css('box-shadow', '0 0 5px rgba(0, 0, 0, 0.4)');
});

////////////////////////////////////////////////////////////////////////////////////
//CATERING DROPDOWN FUNCTIONALITY
	//appitizers
	$('#appitizers-sel').on('click',function(){
		if(!$('#appitizers-dropdown').is(".down")){
			$('#appitizers-dropdown').addClass('down').slideDown();
			$('#appitizers-sel i').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
		}
		else{
			$('#appitizers-dropdown').removeClass('down').slideUp();
			$('#appitizers-sel i').removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
		}
	});
	//party
	$('#party-sel').on('click',function(){
		if(!$('#party-dropdown').is(".down")){
			$('#party-dropdown').addClass('down').slideDown();
			$('#party-sel i').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
		}
		else{
			$('#party-dropdown').removeClass('down').slideUp();
			$('#party-sel i').removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
		}
	});
	//dinner
	$('#dinners-sel').on('click',function(){
		if(!$('#dinners-dropdown').is(".down")){
			$('#dinners-dropdown').addClass('down').slideDown();
			$('#dinners-sel i').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
		}
		else{
			$('#dinners-dropdown').removeClass('down').slideUp();
			$('#dinners-sel i').removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
		}
	});
	//fruits baskets
	$('#baskets-sel').on('click',function(){
		if(!$('#baskets-dropdown').is(".down")){
			$('#baskets-dropdown').addClass('down').slideDown();
			$('#baskets-sel i').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
		}
		else{
			$('#baskets-dropdown').removeClass('down').slideUp();
			$('#baskets-sel i').removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
		}
	});
	//Desserts
	$('#desserts-sel').on('click',function(){
		if(!$('#desserts-dropdown').is(".down")){
			$('#desserts-dropdown').addClass('down').slideDown();
			$('#desserts-sel i').removeClass('fa-chevron-circle-down').addClass('fa-chevron-circle-up');
		}
		else{
			$('#desserts-dropdown').removeClass('down').slideUp();
			$('#desserts-sel i').removeClass('fa-chevron-circle-up').addClass('fa-chevron-circle-down');
		}
	});

	
	

////////////////////////////////////////////////////////////////////////////////////
//SHOP NOW IDIVIDUAL POST TAB SYSTEM
	$('#lblDescription').click(function(){
		$('#lblDescription').addClass('tabActive');
		$('#lblDetails').removeClass('tabActive');
		$('#lblReturns').removeClass('tabActive');
		$('#lblReviews').removeClass('tabActive');

		$('#description-text').show();
		$('#details-text').hide();
		$('#returns-text').hide();
		$('#reviews-text').hide();
	});

	$('#lblDetails').click(function(){
		$('#lblDescription').removeClass('tabActive');
		$('#lblDetails').addClass('tabActive');
		$('#lblReturns').removeClass('tabActive');
		$('#lblReviews').removeClass('tabActive');

		$('#description-text').hide();
		$('#details-text').show();
		$('#returns-text').hide();
		$('#reviews-text').hide();
	});

	$('#lblReturns').click(function(){
		$('#lblDescription').removeClass('tabActive');
		$('#lblDetails').removeClass('tabActive');
		$('#lblReturns').addClass('tabActive');
		$('#lblReviews').removeClass('tabActive');

		$('#description-text').hide();
		$('#details-text').hide();
		$('#returns-text').show();
		$('#reviews-text').hide();
	});

	$('#lblReviews').click(function(){
		$('#lblDescription').removeClass('tabActive');
		$('#lblDetails').removeClass('tabActive');
		$('#lblReturns').removeClass('tabActive');
		$('#lblReviews').addClass('tabActive');

		$('#description-text').hide();
		$('#details-text').hide();
		$('#returns-text').hide();
		$('#reviews-text').show();
	});


////////////////////////////////////////////////////////////////////////////////////
//SEARCH CSS HACKING
	$('#search-selector').mouseenter(function(){
		$('#all-cover').css('background-color','darkgrey');
	});
	$('#search-selector').mouseleave(function(){
		$('#all-cover').css('background-color','rgb(228, 228, 228)');
	});

////////////////////////////////////////////////////////////////////////////////////
//APPLY CARD NAME MAKER
	//$('#first-name').change(function(){
	//	var first = $('#first-name').val();
	//	var last = $('#last-name').val();
	//	$('#right-apply-inner p').html(first + " " + last);
	//});
	//$('#last-name').change(function(){
	//	var first = $('#first-name').val();
	//	var last = $('#last-name').val();
	//	$('#right-apply-inner p').html(first + " " + last);
	//});
////////////////////////////////////////////////////////////////////////////////////
//CAREERS PAGE HOVER EFFECT
	$('#careers-hover').mouseenter(function(){
		$('#chover-hide').css('opacity','0');
		$('#chover-link').show();
		
	});
	$('#careers-hover').mouseleave(function(){
		$('#chover-hide').css('opacity','1');
		$('#chover-link').hide();
		
	});
////////////////////////////////////////////////////////////////////////////////////
//HOURS CLOSE
	$('#hide-hours').click(function(){
		$('#hours-check-').hide();
		
	});
	
	
////////////////////////////////////////////////////////////////////////////////////
//SHOP PRICE SLIDER
	$(function() {
    $('#slider-range').slider({
      range: true,
      min: 0,
      max: 500,
      values: [ 0, 500 ],
      slide: function( event, ui ) {
        $( '#amount' ).val( '$' + ui.values[ 0 ] + ' - $' + ui.values[ 1 ] );
      }
    });
    $( '#amount' ).val( '$' + $( '#slider-range' ).slider( 'values', 0 ) +
      ' - $' + $( '#slider-range' ).slider( 'values', 1 ) );
  });

////////////////////////////////////////////////////////////////////////////////////
//TIMEOUT OF ALERT
	setTimeout(function(){
		$('#main-actions .alert').fadeOut(2000, function(){
		});
	},6000);

////////////////////////////////////////////////////////////////////////////////////
//MOBILE LOGIN PAGE VARIABLES
	var isMobile = {
	Android: function() {
			return navigator.userAgent.match(/Android/i);
	},
	BlackBerry: function() {
			return navigator.userAgent.match(/BlackBerry/i);
	},
	iOS: function() {
			return navigator.userAgent.match(/iPhone|iPad|iPod/i);
	},
	Opera: function() {
			return navigator.userAgent.match(/Opera Mini/i);
	},
	Windows: function() {
			return navigator.userAgent.match(/IEMobile/i);
	},
	any: function() {
			return (isMobile.Android() || isMobile.BlackBerry() || isMobile.iOS() || isMobile.Opera() || isMobile.Windows());
	}
	};

	if(isMobile.any()) {
		$('#userinput').focus(function(){
			$('#user-lable').css('position','relative').css('padding-top','0').css('color','white');
			$('#form-wrapper-login div').css('padding-bottom','0');
		});
		$('#user-lable').click(function(){
			$('#userinput').focus();
		});
		$('#password').focus(function(){
			$('#pass-lable').css('position','relative').css('padding-top','0').css('color','white');
			$('#password').css('margin-top','0');
		});
		$('#pass-lable').click(function(){
			$('#passinput').focus();
		});
		}
	else{
		$('#userinput').on("keypress", function(){
			$('#user-lable').css('position','relative').css('padding-top','0').css('color','white');
			$('#form-wrapper-login div').css('padding-bottom','0');
		});
		$('#user-lable').click(function(){
			$('#userinput').focus();
		});
		$('#password').on("keypress", function(){
			$('#pass-lable').css('position','relative').css('padding-top','0').css('color','white');
			$('#password').css('margin-top','0');
		});
		$('#pass-lable').click(function(){
			$('#passinput').focus();
		});
	};

////////////////////////////////////////////////////////////////////////////////////
//MOBILE NAVIGATION
	$('#mobile-bars').click(function(){
		if(!$('#mobile-nav-links').is('.nav-sliding')){
			$('#mobile-nav-links').slideDown('slow',function(){
			$('#mobile-nav-links').addClass('nav-sliding');
			$('#mobile-bars').css('background-color','rgb(44, 126, 213)').removeClass('fa-bars').addClass('fa-times');
			});
		}
		else{
			$('#mobile-nav-links').slideUp('slow',function(){
			$('#mobile-nav-links').removeClass('nav-sliding');
			$('#mobile-bars').css('background-color','inherit').removeClass('fa-times').addClass('fa-bars');
			});
		}

	});


	////////////////////////////////////////////////////////////////////////////////////
	//MOBILE LOGIN PAGE VARIABLES
		var isMobileAgain = {
		Android: function() {
				return navigator.userAgent.match(/Android/i);
		},
		BlackBerry: function() {
				return navigator.userAgent.match(/BlackBerry/i);
		},
		iOS: function() {
				return navigator.userAgent.match(/iPhone|iPad|iPod/i);
		},
		Opera: function() {
				return navigator.userAgent.match(/Opera Mini/i);
		},
		Windows: function() {
				return navigator.userAgent.match(/IEMobile/i);
		},
		any: function() {
				return (isMobileAgain.Android() || isMobileAgain.BlackBerry() || isMobileAgain.iOS() || isMobileAgain.Opera() || isMobileAgain.Windows());
		}
		};

		if(isMobileAgain.any()) {
			////////////////////////////////////////////////////////////////////////////////////
			//ENTER EVENT KEYBOARD PRESS BRINGS FOCUS TO ELEMENT NEEDED

				//FIRST SECTION ENTERING
				$('#fn-input').focus().keypress(function(fnentering){
					if(fnentering.which == 13){
						event.preventDefault();
						console.log('HELLO');

								$('#ln-input').focus();

					}
				});
				$('#ln-input').focus().keypress(function(lnentering){
					if(lnentering.which == 13){
						console.log('HELLO');
						event.preventDefault();

						var fnInput = $('#fn-input').val();
						var lnInput = $('#ln-input').val();

						if(fnInput == '' && lnInput ==''){
							alert('Please Fill Out Your First & Last Name');
							$('#fn-input').focus();
						}
						else if(fnInput == ''){
								alert('Please Enter Your First Name');
								$('#fn-input').focus();
							}
						else if(lnInput == ''){
								alert('Please Enter Your Last Name');
								$('#ln-input').focus();
						}
						else{
							$('#su-part-1').hide();
							$('#su-part-2').show();
							$('#user-input').focus();

							$('#prog-1').animate({width:'66.666%'},'fast');
							//$('#prog-1').removeClass('active').removeClass('progress-bar-striped');
							//$('#prog-2').show();

							$('#sign-up-progress-wrap h1').html('Step 2 of 3');
							$('.su-next-1').addClass('su-next-2').removeClass('su-next-1');
							$('.su-prev-1').addClass('su-prev-2').removeClass('su-prev-1');
						}
					}
				});

				//SECOND SECTION ENTERING
				$('#user-input').focus().keypress(function(uientering){
					if(uientering.which == 13){
						console.log('HELLO');
						event.preventDefault();


							$('#su-email-input').focus();
						}
				});
				$('#su-email-input').focus().keypress(function(emailentering){
					if(emailentering.which == 13){
						console.log('HELLO');
						event.preventDefault();

						var userInput = $('#user-input').val();
						var emailInput = $('#su-email-input').val();
						var emailcheck = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

						if(userInput == '' && emailInput ==''){
							alert('Please enter your User Name & Email Address');
							$('#user-input').focus();
						}
						else if(userInput == ''){
							alert('Please Enter Your User Name');
							$('#user-input').focus();
						}
						else if(emailInput == ''){
							alert('Please Enter Your Email Address');
							$('#su-email-input').focus();
						}
						else if( emailInput.search(emailcheck) == -1){
							alert('Please Enter A Valid Email Address (Example: name@email.com)');
							$('#su-email-input').focus();
						}
						else{
							$('#su-part-2').hide();
							$('#su-part-3').show();
							$('#su-submit-wrap').css('display','inline');
							$('#password').focus();

							$('#prog-1').animate({width:'100%'},'fast');
							//$('#prog-2').removeClass('active').removeClass('progress-bar-striped');
							//$('#prog-3').show();

							$('#sign-up-progress-wrap h1').html('Step 3 of 3');

							$('.su-next-2').addClass('su-next-3').removeClass('su-next-2');
							$('.su-prev-2').addClass('su-prev-3').removeClass('su-prev-2');
						}
					}
				});

		}
		else{
			////////////////////////////////////////////////////////////////////////////////////
			//ENTER EVENT KEYBOARD PRESS BRINGS FOCUS TO ELEMENT NEEDED

				//FIRST SECTION ENTERING
				$('#fn-input').focus().keypress(function(fnentering){
					if(fnentering.which == 13){
						event.preventDefault();
						console.log('HELLO');

						var fnInput = $('#fn-input').val();
						var lnInput = $('#ln-input').val();

						if(fnInput == '' && lnInput ==''){
							alert('Please Fill Out Your First & Last Name');
							$('#fn-input').focus();
						}
						else if(fnInput == ''){
								alert('Please Enter Your First Name');
								$('#fn-input').focus();
							}
						else if(lnInput == ''){
								alert('Please Enter Your Last Name');
								$('#ln-input').focus();
						}
						else{
							$('#su-part-1').hide();
							$('#su-part-2').show();
							$('#user-input').focus();

							$('#prog-1').animate({width:'66.666%'},'fast');
							//$('#prog-1').removeClass('active').removeClass('progress-bar-striped');
							//$('#prog-2').show();

							$('#sign-up-progress-wrap h1').html('Step 2 of 3');
							$('.su-next-1').addClass('su-next-2').removeClass('su-next-1');
							$('.su-prev-1').addClass('su-prev-2').removeClass('su-prev-1');
						}
					}
				});
				$('#ln-input').focus().keypress(function(lnentering){
					if(lnentering.which == 13){
						console.log('HELLO');
						event.preventDefault();

						var fnInput = $('#fn-input').val();
						var lnInput = $('#ln-input').val();

						if(fnInput == '' && lnInput ==''){
							alert('Please Fill Out Your First & Last Name');
							$('#fn-input').focus();
						}
						else if(fnInput == ''){
								alert('Please Enter Your First Name');
								$('#fn-input').focus();
							}
						else if(lnInput == ''){
								alert('Please Enter Your Last Name');
								$('#ln-input').focus();
						}
						else{
							$('#su-part-1').hide();
							$('#su-part-2').show();
							$('#user-input').focus();

							$('#prog-1').animate({width:'66.666%'},'fast');
							//$('#prog-1').removeClass('active').removeClass('progress-bar-striped');
							//$('#prog-2').show();

							$('#sign-up-progress-wrap h1').html('Step 2 of 3');
							$('.su-next-1').addClass('su-next-2').removeClass('su-next-1');
							$('.su-prev-1').addClass('su-prev-2').removeClass('su-prev-1');
						}
					}
				});

				//SECOND SECTION ENTERING
				$('#user-input').focus().keypress(function(uientering){
					if(uientering.which == 13){
						console.log('HELLO');
						event.preventDefault();

						var userInput = $('#user-input').val();
						var emailInput = $('#su-email-input').val();
						var emailcheck = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

						if(userInput == '' && emailInput ==''){
							alert('Please enter your User Name & Email Address');
							$('#user-input').focus();
						}
						else if(userInput == ''){
							alert('Please Enter Your User Name');
							$('#user-input').focus();
						}
						else if(emailInput == ''){
							alert('Please Enter Your Email Address');
							$('#su-email-input').focus();
						}
						else if( emailInput.search(emailcheck) == -1 ){
							alert('Please Enter A Valid Email Address (Example: name@email.com)');
							$('#su-email-input').focus();
						}
						else{
							$('#su-part-2').hide();
							$('#su-part-3').show();
							$('#su-submit-wrap').css('display','inline');
							$('#password').focus();

							$('#prog-1').animate({width:'100%'},'fast');
							//$('#prog-2').removeClass('active').removeClass('progress-bar-striped');
							//$('#prog-3').show();

							$('#sign-up-progress-wrap h1').html('Step 3 of 3');

							$('.su-next-2').addClass('su-next-3').removeClass('su-next-2');
							$('.su-prev-2').addClass('su-prev-3').removeClass('su-prev-2');
						}
					}
				});
				$('#su-email-input').focus().keypress(function(emailentering){
					if(emailentering.which == 13){
						console.log('HELLO');
						event.preventDefault();

						var userInput = $('#user-input').val();
						var emailInput = $('#su-email-input').val();
						var emailcheck = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

						if(userInput == '' && emailInput ==''){
							alert('Please enter your User Name & Email Address');
							$('#user-input').focus();
						}
						else if(userInput == ''){
							alert('Please Enter Your User Name');
							$('#user-input').focus();
						}
						else if(emailInput == ''){
							alert('Please Enter Your Email Address');
							$('#su-email-input').focus();
						}
						else if( emailInput.search(emailcheck) == -1 ){
							alert('Please Enter A Valid Email Address (Example: name@email.com)');
							$('#su-email-input').focus();
						}
						else{
							$('#su-part-2').hide();
							$('#su-part-3').show();
							$('#su-submit-wrap').css('display','inline');
							$('#password').focus();

							$('#prog-1').animate({width:'100%'},'fast');
							//$('#prog-2').removeClass('active').removeClass('progress-bar-striped');
							//$('#prog-3').show();

							$('#sign-up-progress-wrap h1').html('Step 3 of 3');

							$('.su-next-2').addClass('su-next-3').removeClass('su-next-2');
							$('.su-prev-2').addClass('su-prev-3').removeClass('su-prev-2');
						}
					}
				});


		}


////////////////////////////////////////////////////////////////////////////////////
//NEXT BUTTONS SIGN UP
	$(document).on('click','.su-next-1',function(){
		var fnInput = $('#fn-input').val();
		var lnInput = $('#ln-input').val();

		if(fnInput == '' && lnInput ==''){
			alert('Please Fill Out Your First & Last Name');
			$('#fn-input').focus();
		}
		else if(fnInput == ''){
				alert('Please Enter Your First Name');
				$('#fn-input').focus();
			}
		else if(lnInput == ''){
				alert('Please Enter Your Last Name');
				$('#ln-input').focus();
		}
		else{
			$('#su-part-1').hide();
			$('#su-part-2').show();
			$('#user-input').focus();

			$('#prog-1').animate({width:'66.666%'},'fast');
			//$('#prog-1').removeClass('active').removeClass('progress-bar-striped');
			//$('#prog-2').show();

			$('#sign-up-progress-wrap h1').html('Step 2 of 3');
			$('.su-next-1').addClass('su-next-2').removeClass('su-next-1');
			$('.su-prev-1').addClass('su-prev-2').removeClass('su-prev-1');
		}
	});

	$(document).on('click','.su-next-2',function(){
		var userInput = $('#user-input').val();
		var emailInput = $('#su-email-input').val();
		var emailcheck = /^[A-Z0-9._%+-]+@[A-Z0-9.-]+\.[A-Z]{2,4}$/i;

		if(userInput == '' && emailInput ==''){
			alert('Please enter your User Name & Email Address');
			$('#user-input').focus();
		}
		else if(userInput == ''){
			alert('Please Enter Your User Name');
			$('#user-input').focus();
		}
		else if(emailInput == ''){
			alert('Please Enter Your Email Address');
			$('#su-email-input').focus();
		}
		else if( emailInput.search(emailcheck) == -1 ){
			alert('Please Enter A Valid Email Address (Example: name@email.com)');
			$('#su-email-input').focus();
		}
		else{
			$('#su-part-2').hide();
			$('#su-part-3').show();
			$('#su-submit-wrap').css('display','inline');
			$('#password').focus();

			$('#prog-1').animate({width:'100%'},'fast');
			//$('#prog-2').removeClass('active').removeClass('progress-bar-striped');
			//$('#prog-3').show();

			$('#sign-up-progress-wrap h1').html('Step 3 of 3');
			$('.su-next-2').addClass('su-next-3').removeClass('su-next-2');
			$('.su-prev-2').addClass('su-prev-3').removeClass('su-prev-2');
		}

	});

////////////////////////////////////////////////////////////////////////////////////
//PREVIOUS BUTTONS SIGN UP
	$(document).on('click','.su-prev-2',function(){
		$('#su-part-1').show();
		$('#su-part-2').hide();

		$('#prog-1').animate({width:'33.333%'},'fast');
		$('#sign-up-progress-wrap h1').html('Step 1 of 3');

		$('.su-next-2').addClass('su-next-1').removeClass('su-next-2');
		$('.su-prev-2').addClass('su-prev-1').removeClass('su-prev-2');
	});

	$(document).on('click','.su-prev-3',function(){
		$('#su-part-2').show();
		$('#su-part-3').hide();
		$('#su-submit-wrap').hide();

		$('#prog-1').animate({width:'66.666%'},'fast');

		$('#sign-up-progress-wrap h1').html('Step 2 of 3');

		$('.su-next-3').addClass('su-next-2').removeClass('su-next-3');
		$('.su-prev-3').addClass('su-prev-2').removeClass('su-prev-3');
	});

////////////////////////////////////////////////////////////////////////////////////
//SET FOCUS ON SIGN UP PAGE LOAD
	$('#fn-input').focus();

////////////////////////////////////////////////////////////////////////////////////
//DROP DOWN ANIMATION ON CLICK FOR SHOP NOW REFINE

$('#mobile-refiner').on('click',function(){
	if(!$('#mobile-refiner').is('.toggled')){
		$('#shop-refine-mobile-drop').slideDown('slow');
		$('#mobile-refiner').addClass('toggled');

		$('#refine-search-input').css('border-bottom','1px solid #323232');
	}
	else{
		$('#shop-refine-mobile-drop').slideUp('slow');
		$('#mobile-refiner').removeClass('toggled');

		$('#refine-search-input').css('border-bottom','0');
	}
});

////////////////////////////////////////////////////////////////////////////////////
//ADMIN CONTROL PANEL FUNCTIONS
	
$('#order-side-cta').on('click',function(){
	$('#order-management').show();
	$('#order-side-cta').addClass('active-side');
	
	$('#current-inventory').hide();
	$('#user-management').hide();
	$('#card-requests').hide();
	$('#create-new-listing-wrap').hide();
	
	$('#new-listing-cta-head').addClass('btn-success').removeClass('btn-default');
	$('#inventory-side-cta').removeClass('active-side');
	$('#users-side-cta').removeClass('active-side');
	$('#card-side-cta').removeClass('active-side');
});
$('#inventory-side-cta').on('click',function(){
	$('#current-inventory').show();
	$('#inventory-side-cta').addClass('active-side');
	
	$('#order-management').hide();
	$('#user-management').hide();
	$('#card-requests').hide();
	$('#create-new-listing-wrap').hide();
	
	$('#new-listing-cta-head').addClass('btn-success').removeClass('btn-default');
	$('#order-side-cta').removeClass('active-side');
	$('#users-side-cta').removeClass('active-side');
	$('#card-side-cta').removeClass('active-side');
});
$('#users-side-cta').on('click',function(){
	$('#user-management').show();
	$('#users-side-cta').addClass('active-side');
	
	$('#order-management').hide();
	$('#current-inventory').hide();
	$('#card-requests').hide();
	$('#create-new-listing-wrap').hide();

	$('#new-listing-cta-head').addClass('btn-success').removeClass('btn-default');
	$('#order-side-cta').removeClass('active-side');
	$('#inventory-side-cta').removeClass('active-side');
	$('#card-side-cta').removeClass('active-side');
});
$('#card-side-cta').on('click',function(){
	$('#card-requests').show();
	$('#card-side-cta').addClass('active-side');
	
	$('#order-management').hide();
	$('#current-inventory').hide();
	$('#user-management').hide();
	$('#create-new-listing-wrap').hide();
	
	$('#new-listing-cta-head').addClass('btn-success').removeClass('btn-default');
	$('#order-side-cta').removeClass('active-side');
	$('#inventory-side-cta').removeClass('active-side');
	$('#users-side-cta').removeClass('active-side');
});
$('#new-listing-cta-head').on('click', function(){
	$('#create-new-listing-wrap').show();
	$('#new-listing-cta-head').removeClass('btn-success').addClass('btn-default');
	
	$('#order-management').hide();
	$('#current-inventory').hide();
	$('#user-management').hide();
	$('#card-requests').hide();
	
	$('#order-side-cta').removeClass('active-side');
	$('#inventory-side-cta').removeClass('active-side');
	$('#users-side-cta').removeClass('active-side');
	$('#card-side-cta').removeClass('active-side');
});
	
//INVENTORY DROPDOWNS FUNCTIONS
$('.drop-clicker').on('click',function(){
	var dropNum = this.id;
	if(!$('.' + dropNum).is('.dropped')){
		$('.' + dropNum).slideDown().addClass('dropped');
		$('.bg-' + dropNum).css('background-color','rgb(143, 0, 5)').css('border-radius','0');
		$('.drop-clicker#'+dropNum).css('border-radius','0');
		$('.drop-clicker#'+dropNum +' i').addClass('fa-times').removeClass('fa-bars');
	}
	else{
		$('.' + dropNum).slideUp().removeClass('dropped');
		$('.bg-' + dropNum).css('background-color','#333').css('border-bottom-left-radius','10px').css('border-bottom-right-radius','10px');
		$('.drop-clicker#'+dropNum).css('border-bottom-right-radius','10px');
		$('.drop-clicker#'+dropNum +' i').addClass('fa-bars').removeClass('fa-times');
	}
	
});

//CREATE LISTING FUNCTIONALITY
//\\//\\//\\ NEXT BUTTONS
$(document).on('click','.cl-next-1',function(){
	//Validate form parts are completed
	var title = $('#item-title').val();
	var price = $('#item-price').val();
	var description = $('#product-desc').val();
	var picture = $('#image-uploader').val();
	
	if(title === ''){
		alert('Please Insert a Product Title');
		$('#item-title').focus();
	}
	else if(price ===''){
		alert('Please Insert a Product Price');
		$('#item-price').focus();
	}
	else if(description === ''){
		alert('Please Insert a Product Description');
		$('#product-desc').focus();
	}
	else if(picture === ''){
		alert('Please Choose a Product Picture');	
	}
	else{
		//showing of next part
		$('#create-part-one').hide();
		$('#create-part-two').show();

		//button functionality
		$('.cl-next-1').addClass('cl-next-2').removeClass('cl-next-1');
		$('.cl-previous-1').addClass('cl-previous-2').removeClass('cl-previous-1');
		
		//animate bar
		$('#prog-1').animate({width:'66.666%'},'fast');
	}
});
//picture info
$('#image-uploader').change(function(){
	var picturename = $('#image-uploader').val();
	var texthere = $('#picture-name');
	console.log(picturename);
	
	texthere.html(picturename);
});
	
	
//step 2	
$(document).on('click','.cl-next-2',function(){
	//Validate form part is complete
	var category = $('#item-category').val();
	var duration = $('#item-duration').val();
	var condition = $('#item-condition').val();

	if(category === ''){
		alert('Please Insert a Category');
		$('#item-category').focus();
	}
	else if(duration === 'Select'){
		alert('Please Insert a Valid Duration');
		$('#item-duration').focus();
	}
	else if(condition === 'Select'){
		alert('Please Insert a Valid Condition');
		$('#item-condition').focus();
	}
	else{
		//showing of next part
		$('#create-part-two').hide();
		$('#create-part-three').show();
	$('#create-submit').show();
		
		//button functionality
		$('.cl-next-2').addClass('cl-next-3').removeClass('cl-next-2');
		$('.cl-previous-2').addClass('cl-previous-3').removeClass('cl-previous-2');
		
		//animate bar
		$('#prog-1').animate({width:'100%'},'fast');
	}
});
//\\//\\//\\ PREVIOUS BUTTONS
$(document).on('click','.cl-previous-2',function(){
	//showing of next part
	$('#create-part-one').show();
	$('#create-part-two').hide();
	$('#create-submit').hide();
	//button functionality
	$('.cl-next-2').addClass('cl-next-1').removeClass('cl-next-2');
	$('.cl-previous-2').addClass('cl-previous-1').removeClass('cl-previous-2');
	
	//animate bar
		$('#prog-1').animate({width:'33.333%'},'fast');
});
$(document).on('click','.cl-previous-3',function(){
	//showing of next part
	$('#create-part-two').show();
	$('#create-part-three').hide();
	$('#create-submit').hide();
	//button functionality
	$('.cl-next-3').addClass('cl-next-2').removeClass('cl-next-3');
	$('.cl-previous-3').addClass('cl-previous-2').removeClass('cl-previous-3');
	
	//animate bar
		$('#prog-1').animate({width:'66.666%'},'fast');
});	

});
