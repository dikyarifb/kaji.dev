<!DOCTYPE html>
<html>

<head>

	<title>KlikAdv Jaya Internasional</title>
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">

	<link rel="icon" type="image/png" href="{{ asset('img/icon-logo.png') }}">

	<link rel="stylesheet" href="{{ asset('css/style.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/mobile.css') }}" />
	<link rel="stylesheet" href="{{ asset('css/onepage-scroll.css') }}" />

	<!-- Optional theme -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap-theme.min.css" integrity="sha384-rHyoN1iRsVXV4nD0JutlnGaslCJuC7uwjduW9SVrLvRYooPp2bWYgmgJQIXwl/Sp" crossorigin="anonymous">

	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Roboto+Slab" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Lobster" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Gloria+Hallelujah" rel="stylesheet">
	<link href="https://fonts.googleapis.com/css?family=Fira+Sans" rel="stylesheet">

	<!-- Latest compiled and minified JavaScript -->
	<script src='https://www.google.com/recaptcha/api.js'></script>
	<script type="text/javascript" src="{{ asset('js/jquery-3.1.1.min.js') }}"></script>
	<script type="text/javascript" src="{{ asset('js/jquery.onepage-scroll.js') }}"></script>

	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>

	<script>
	  $(document).ready(function(){

	  	setTimeout(function() {
	     				$( "body" ).animate({
						    opacity: 1
						  }, 1000, function() {

		  						});}, 500);

	      $(".main").onepage_scroll({
	        sectionContainer: "section",
	        responsiveFallback: 600,
	        loop: false
	      });
	     

	      $( "#btn-nav" ).click(function() {
  			  $(".nav-mobile-expand").slideToggle();
  			  $(".bg-behind").fadeToggle("fast");

  			  if($( "#btn-nav" ).hasClass( "fa fa-bars" )){
  			  	$( "#btn-nav" ).removeClass();
  			  	$( "#btn-nav" ).addClass("fa fa-times");
  			  }else{
  			  	$( "#btn-nav" ).removeClass();
  			  	$( "#btn-nav" ).addClass("fa fa-bars");
  			  }

  			 
		  });

		   $( ".bg-behind" ).click(function() {

		   		$(".nav-mobile-expand").slideToggle();
		   		$(".bg-behind").fadeToggle("fast");

		   		if($( "#btn-nav" ).hasClass( "fa fa-bars" )){
  			  		$( "#btn-nav" ).removeClass();
  			  		$( "#btn-nav" ).addClass("fa fa-times");
  			  	}else{
  			  		$( "#btn-nav" ).removeClass();
  			  		$( "#btn-nav" ).addClass("fa fa-bars");
  			  }
		   });
		   $( "#btn-join" ).click(function() {
		   		$( "body" ).animate({
				    opacity: 0
				  }, 700, function() {

  						});
		   		setTimeout(function() {window.location = '{{URL('/join-us')}}' }, 1500);
		   });
		   $(function(){
			    $('.nav-mobile-expand li a').click(function(){
			        var divID = $(this).attr('href');
			        $('html,body').animate({
			            scrollTop: $(divID).offset().top 
			        }, {
			            duration: 'slow', 
			            easing: 'swing'
			        });
			        $(".nav-mobile-expand").slideToggle();
		   			$(".bg-behind").fadeToggle("fast");
		   			$( "#btn-nav" ).removeClass();
  			  		$( "#btn-nav" ).addClass("fa fa-bars");
			    }); 
			});

		});

		
	    
	</script>
</head>
<body style="opacity: 0">

	<!--ul class="list-side-nav">
		<li><a href="#About"><img src="img/list-orange.png"/><span>About</span></a></li>
		<li><a href="#Process"><img src="img/list-grey.png"/><span>Process</span></a></li>
		<li><a href="#Location"><img src="img/list-grey.png"/><span>Location</span></a></li>
		<li><a href="#Contact"><img src="img/list-grey.png"/><span>Contact</span></a></li>
	</ul-->
	<div class="bg-behind">
		</div>

		<div class="container">


		<div class="row middle-sm">
			<div class="col-md-12">
				<nav class="navigation" id="nav">
				
				<div class="nav-left">

					<a href="{{URL('/')}}">
					
						<div class="brand">
							
						</div>

						<div class="brand-2 disappear-onscroll">
						</div>
						
					</a>

					<div class="brand-desc disappear-onscroll">
						Nationwide Online Billboard Placement Network
					</div>

				</div>
				
				<div class="nav-right">

					<ul class="nav-anchor">

						<li><a data-index="1" href="#1">About</a></li>
						<li><a data-index="2" href="#2">Process</a></li>
						<li><a data-index="3" href="#3">Location</a></li>
						<li><a data-index="4" href="#4">Contact</a></li>
						<li><button id='btn-join' href="{{URL('/join-us')}}">Join Us</button></li>

					</ul>
					<button class="fa fa-bars" id="btn-nav"></button>

				</div>
				
			</nav>
			</div>
			
			<ul class="nav-mobile-expand">
			
				<li><a data-index="1" href="#about"><span>A</span>bout</a></li>
				<li><a href="#process"><span>P</span>rocess</a></li>
				<li><a href="#location"><span>L</span>ocation</a></li>
				<li><a href="#contact"><span>C</span>ontact</a></li>
				<li><a href="{{URL('/join-us')}}"><span>J</span>oin Us</a></li>

			</ul>

		</div>

		</div>
