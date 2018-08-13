<!DOCTYPE html>
<html lang="en">
<head>
<title>{{ $title }}</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta charset="utf-8">
<meta name="keywords" content="Trending Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- bootstrap-css -->
<link href="{{ url('css/bootstrap.css') }}" rel="stylesheet" type="text/css" media="all" />
<!--// bootstrap-css -->
<!-- css -->
<link rel="stylesheet" href="{{ url('css/style.css') }}" type="text/css" media="all" />
<!--// css -->
<!-- light-box -->
<link rel="stylesheet" href="{{ url('css/lightbox.css') }}">
<!-- //light-box -->
<!-- font-awesome icons -->
<link href="{{ url('css/font-awesome.css') }}" rel="stylesheet"> 
<!-- //font-awesome icons -->
<!-- font -->
<link href="//fonts.googleapis.com/css?family=Josefin+Sans:100,100i,300,300i,400,400i,600,600i,700,700i" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700italic,700,400italic,300italic,300' rel='stylesheet' type='text/css'>
<!-- //font -->
<script src="{{ url('js/jquery-1.11.1.min.js') }}"></script>
<script src="{{ url('js/bootstrap.js') }}"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script> 
<!-- animation -->
<link href="{{ 'css/animate.css' }}" rel="stylesheet" type="text/css" media="all">
<script src="{{ url('js/wow.min.js') }}"></script>
	<script>
		 new WOW().init();
	</script>
<!-- //animation --> 

<!--[if lt IE 9]>
  <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
<![endif]-->
</head>
<body>
	<!-- banner -->
	<div class="banner" id="home">
		<div class="agileinfo-dot">
			<div class="header">
					<nav class="navbar navbar-default">
						<!-- Brand and toggle get grouped for better mobile display -->
						<div class="navbar-header">
						  <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						  </button>
							<div class="agileits-logo">
								<h1><a href="index.html">{{ $title }}</a></h1>
							</div>
						</div>

						<!-- Collect the nav links, forms, and other content for toggling -->
						<div class="collapse navbar-collapse nav-wil" id="bs-example-navbar-collapse-1">
							<nav>
								<ul class="nav navbar-nav">
									@foreach($categories as $cat)
										<li><a href="#team" class="scroll">{{ $cat->name }}</a></li>
                                     
									@endforeach
									
									
								</ul>
							</nav>
						</div>
						<!-- /.navbar-collapse -->
					</nav>
			</div>
			<div class="w3layouts-banner-info">
				<div class="container">
					<div class="agileits-slider">
						<div class="slider">
							<div class="callbacks_container">
								<ul class="rslides callbacks callbacks1" id="slider4">
									<li>
										<div class="agileits-banner-info">
											<h3>Lorem ipsum</h3>
											<h6>Mauris nisl nunc, feugiat a nulla euismod</h6>
											<p>Nulla eu erat risus. Curabitur in purus porta, suscipit nisi sit amet, maximus purus. Fusce nulla nibh, porttitor eu velit id, cursus mattis nibh. Phasellus dapibus aliquam urna in maximus.</p>
										</div>	
									</li>
									<li>
										<div class="agileits-banner-info">
											<h3>Donec posuere</h3>
											<h6>Vivamus facilisis dolor ac sapien pharetra</h6>
											<p>Donec luctus faucibus lacus accumsan pellentesque. Vestibulum volutpat dignissim sem id dignissim. Nunc sit amet risus nec diam porttitor tristique et eu lorem. Morbi ut ullamcorper eros</p>
										</div>	
									</li>
									<li>
										<div class="agileits-banner-info">
											<h3>Integer accumsan</h3>
											<h6>Nunc dapibus euismod purus, sed molestie</h6>
											<p>Nulla a vehicula urna, in mattis nisl. Nulla facilisi. Praesent at nibh et ligula imperdiet vehicula. Sed posuere, massa semper ornare laoreet, ipsum sem faucibus velit, non tempus mi felis</p>
										</div>
									</li>
								</ul>
							</div>
							<div class="clearfix"> </div>
							<script src="{{ url('js/responsiveslides.min.js') }}"></script>
							<script>
										// You can also use "$(window).load(function() {"
										$(function () {
										  // Slideshow 4
										  $("#slider4").responsiveSlides({
											auto: true,
											pager:false,
											nav:true,
											speed: 500,
											namespace: "callbacks",
											before: function () {
											  $('.events').append("<li>before event fired.</li>");
											},
											after: function () {
											  $('.events').append("<li>after event fired.</li>");
											}
										  });
									
										});
							</script>
							<!--banner Slider starts Here-->
						</div>
					</div>
					<div class="w3-arrow bounce animated">
						<a href="#about" class="scroll"><i class="fa fa-angle-down" aria-hidden="true"></i></a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- //banner -->
	<!-- about -->
   @yield('content')
	<!--//gallery-->
	<!-- news -->
	<div class="news" id="news">
		<div class="container">
			<div class="agile-heading">
				<h3>Our News</h3>
			</div>
			<div class="wthree-news-grids">
				<div class="col-md-4 agile-news-right-info">
					<div class="col-md-6 agile-news-img">
						
					</div>
					<div class="col-md-6 agile-news-img-info">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor</a></h5>
						<div class="agileits-w3layouts-border"> </div>
						<p>Maecenas et suscipit augue. Aenean at ultricies lacus.</p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th Dec,2016</h6>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 agile-news-right-info">
					<div class="col-md-6 agile-news-img agile-news-img1">
							
					</div>
					<div class="col-md-6 agile-news-img-info">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor</a></h5>
						<div class="agileits-w3layouts-border"> </div>
						<p>Maecenas et suscipit augue. Aenean at ultricies lacus.</p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 24th Dec,2016</h6>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="col-md-4 agile-news-right-info">
					<div class="col-md-6 agile-news-img agile-news-img2">
							
					</div>
					<div class="col-md-6 agile-news-img-info">
						<h5><a href="#" data-toggle="modal" data-target="#myModal">Lorem ipsum dolor</a></h5>
						<div class="agileits-w3layouts-border"> </div>
						<p>Maecenas et suscipit augue. Aenean at ultricies lacus.</p>
						<h6><i class="fa fa-calendar" aria-hidden="true"></i> 13th Nov,2016</h6>
					</div>
					<div class="clearfix"> </div>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //news -->
	<!-- contact -->
	<div class="contact" id="mail">
		<div class="container">
			<div class="agile-heading">
				<h3>Get In Touch</h3>
			</div>
			<div class="agile-contact-form">
				<div class="col-md-6 contact-form-left">
					<div class="w3layouts-contact-form-top">
						<h3>Get in touch</h3>
						<p>Pellentesque eget mi nec est tincidunt accumsan. Proin fermentum dignissim justo, vel euismod justo sodales vel. In non condimentum mauris. Maecenas condimentum interdum lacus, ac varius nisl dignissim ac. Vestibulum euismod est risus, quis convallis nisi tincidunt eget. Sed ultricies congue lacus at fringilla.</p>
					</div>
					<div class="agileits-contact-address">
						<ul>
							<li><i class="fa fa-phone" aria-hidden="true"></i> <span>+1 234 567 8901</span></li>
							<li><i class="fa fa-phone fa-envelope" aria-hidden="true"></i> <span><a href="mailto:example@email.com">mail@example.com</a></span></li>
							<li><i class="fa fa-map-marker" aria-hidden="true"></i> <span>Eiusmod Tempor inclore Place,Kingsport 56777.</span></li>
						</ul>
					</div>
				</div>
				<div class="col-md-6 contact-form-right">
					<div class="contact-form-top">
						<h3>Send us a message</h3>
					</div>
					<div class="agileinfo-contact-form-grid">
						<form action="#" method="post">
							<input type="text" name="Name" placeholder="Name" required="">
							<input type="email" name="Email" placeholder="Email" required="">
							<input type="text" name="Telephone" placeholder="Telephone" required="">
							<textarea name="Message" placeholder="Message" required=""></textarea>
							<button class="btn1">Submit</button>
						</form>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
			
			<div class="w3agile-map">
				<h3>Find us here</h3>
				<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d102623.04862310845!2d-82.59779327009554!3d36.506579763153326!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x885a856b70074b97%3A0x6f9cc0d30bcc841f!2sKingsport%2C+TN%2C+USA!5e0!3m2!1sen!2sin!4v1471495038514"  allowfullscreen></iframe>
			</div>
		</div>
	</div>
	<!-- //contact -->
	<!-- footer -->
	<div class="footer">
		<div class="container">
			<div class="agile-footer-grids">
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>About</h3>
					<p>Aenean cursus dignissim porta. Quisque mattis dolor sem, nec ultrices arcu consequat vel. Phasellus sollicitudin dui diam, et scelerisque nunc venenatis non. Cras dapibus, urna et pellentesque egestas</p>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Events</h3>
					<ul>
						<li>12th Aug <a href="#" data-toggle="modal" data-target="#myModal">Curabitur</a></li>
						<li>10th Sept <a href="#" data-toggle="modal" data-target="#myModal">Fusce urna</a></li>
						<li>24th Sept <a href="#" data-toggle="modal" data-target="#myModal">Praesent</a></li>
						<li>17th Oct <a href="#" data-toggle="modal" data-target="#myModal">Malesuada </a></li>
						<li>09th Dec <a href="#" data-toggle="modal" data-target="#myModal">Cum sociis</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Navigation</h3>
					<ul>
						<li><a href="#home">Home</a></li>
						<li><a href="#about" class="scroll">About</a></li>
						<li><a href="#services" class="scroll">Services</a></li>
						<li><a href="#gallery" class="scroll">Gallery</a></li>
						<li><a href="#team" class="scroll">Team</a></li>
						<li><a href="#news" class="scroll">News</a></li>
						<li><a href="#mail" class="scroll">Mail Us</a></li>
					</ul>
				</div>
				<div class="col-md-3 w3-agile-footer-grid">
					<h3>Newsletter</h3>
					<form action="#" method="post">
						<input type="email" id="mc4wp_email" name="EMAIL" placeholder="Enter your email here" required="">
						<input type="submit" value="Subscribe">
					</form>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
	</div>
	<!-- //footer -->
	<!-- copyright -->
	<div class="copyright">
		<div class="container">
			<p>© 2017 Trending . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a> </p>
		</div>
	</div>
	<!-- //copyright -->
	<script src="{{ url('js/jarallax.js') }}"></script>
	<script src="{{ url('js/SmoothScroll.min.js') }}"></script>
	<script type="text/javascript">
		/* init Jarallax */
		$('.jarallax').jarallax({
			speed: 0.5,
			imgWidth: 1366,
			imgHeight: 768
		})
	</script>
	<script src="{{ url('js/responsiveslides.min.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/move-top.js') }}"></script>
	<script type="text/javascript" src="{{ url('js/easing.js') }}"></script>
	<!-- here stars scrolling icon -->
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<!-- //here ends scrolling icon -->
</body>	
</html>