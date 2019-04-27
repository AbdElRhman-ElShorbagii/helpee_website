<!DOCTYPE HTML>
<html>
    <head>    
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">

		<title>Helpee App</title>
		<!-- Bootstrap CSS -->
		<link rel="stylesheet" href="{{url('dist/css/bootstrap.min.css')}}" />
		<!-- Slick nav CSS -->
		<link rel="stylesheet" href="{{url('dist/css/slicknav.min.css')}}" />
		<!-- Iconfont CSS -->
		<link rel="stylesheet" href="{{url('dist/css/icofont.css')}}" />
		<!-- Slick CSS -->
		<link rel="stylesheet" href="{{url('dist/css/slick.css')}}"/>
		<link rel="stylesheet" href="{{url('dist/css/font-awesome.min.css')}}"/>
		<!-- Owl carousel CSS -->
		<link rel="stylesheet" href="{{url('dist/css/owl.carousel.css')}}"/>
		<!-- Popup CSS -->
		<link rel="stylesheet" href="{{url('dist/css/magnific-popup.css')}}"/>
		<!-- Switcher CSS -->
		<link rel="stylesheet" href="{{url('dist/css/switcher-style.css')}}"/>
		<!-- Animate CSS -->
		<link rel="stylesheet" href="{{url('dist/css/animate.min.css')}}"/>
        <!-- Main CSS -->
		<link rel="stylesheet" href="{{url('dist/css/style.css')}}" />
        <!-- Responsive CSS -->
		<link rel="stylesheet" href="{{url('dist/css/responsive.css')}}" />
		<!-- Favicon Icon -->
		<link rel="icon" href="{{url('dist/img/favcion.png')}}" />
		<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->
    </head>
    
    <body  data-spy="scroll" data-target=".header" data-offset="50">

		<!-- header section start -->
		<header class="header">
			<div class="container">
				<div class="row flexbox-center">
					<div class="col-lg-2 col-md-3 col-6">
						<div class="logo">
							<a href="#home"><img src="{{url('dist/img/logo.png')}}" alt="logo" /></a>
						</div>
					</div>
					<div class="col-lg-10 col-md-9 col-6">
						<div class="responsive-menu"></div>
					    <div class="mainmenu">
                            <ul id="primary-menu">
                                <li><a class="nav-link" href="/">Home </a></li>
                                <li><a class="nav-link" href="/#about">About</a></li>
                                <li><a class="nav-link" href="/">Our App</a></li>
                                <li><a class="nav-link" href="/">Our achievements</a></li>                                
                                <li><a class="nav-link" href="/">Team</a></li>
								<!-- <li><a class="nav-link" href="#testimonials">Testimonials</a></li> -->
								<li><a class="nav-link" href="#contact">Contact Us</a></li>
								<li><a class="nav-link active" href="/helper">Join As Helper</a></li>

                            </ul>
					    </div>
					</div>
				</div>
			</div>
		</header>
		<!-- header section end -->

		<!-- hero area start -->
		<section class="hero-area" id="home" >
            <div class="player" style="" data-property="{videoURL:'https://www.youtube.com/watch?v=7PTriE459ko',containment:'#home',autoPlay:true, mute:true, startAt:0, showControls:false, loop:true, opacity:1}"></div>
		</section>
		<!-- hero area end -->

		<!-- hero area start -->
		<section  id="helperForm" style="margin-top:100px;margin-bottom:150px;">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
						<h2 style="margin-bottom:50px;">Join Helpee App As Helper</h2>
						@if($errors->any()) 
						<div class="alert alert-danger">
							<ul>
								@foreach($errors->all() as $error) 
									<li>
										{{$error}}
									</li>
								@endforeach
							</ul>
						</div>
					@endif
					
					@if (session('status'))
						<div class="alert alert-success">
							{{session('status')}}
						</div>
					@endif
                        <form id="contact-form" action="{{ route('helperForm.store') }}" method="POST">
								@csrf
								<div><label style="color:#0074da;">Personal Information</label></div>
                                <input type="text" name="fname" placeholder="First Name*" required>
								<input type="text" name="lname" placeholder="Last Name*" required>
								<input type="text" name="age" placeholder="age*" required>
								<div style="margin-bottom:15px;">
								<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline1" name="gender" value="male" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline1">Male</label>
									</div>
								<div class="custom-control custom-radio custom-control-inline">
										<input type="radio" id="customRadioInline2" name="gender" value="female" class="custom-control-input">
										<label class="custom-control-label" for="customRadioInline2">Female</label>
									</div>
								</div>
								<input type="text" name="job" placeholder="job" required>
								<div><label style="color:#0074da;">Contact Information</label></div>	
								<input type="email" name="email" placeholder="Email*" required>
								<input type="text" name="mobileNumber" placeholder="Mobile Number*" required>
								<div><label style="color:#0074da;">Address Information</label></div>	
								<input type="text" name="country" placeholder="Country*" required>	
								<input type="text" name="city" placeholder="City*" required>	
								<input type="text" name="district" placeholder="District*" required>	
                                <button style="background:#0074da;border-color:#0074da;color:#fff;" type="submit" name="submit">Submit</button>
                        </form>    
                    </div>
                </div>
            </div>
		</section>
		<!-- hero area end -->
	
	
        
		<!-- footer section start -->
		<footer class="footer" id="contact">
			<div class="container">
				<div class="row">
                    <div class="col-lg-12">
						<div class="copyright-area" style="margin-top:30px;">
							<ul>
								<li><a href="https://www.facebook.com/Helpee-175126283370105/"><i class="icofont icofont-social-facebook"></i></a></li>
								<li><a href="https://www.linkedin.com/company/helpee-app/"><i class="icofont icofont-brand-linkedin"></i></a></li>
							</ul>
							<p>&copy;Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This Website is made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#" target="_blank">Helpee Developers</a></p>
						</div>
                    </div>
				</div>
			</div>
        </footer>
        <!-- footer section end -->

        <!--scripts-->
		<!-- jquery main JS -->
		<script src="{{url('dist/js/jquery.min.js')}}"></script>
		<!-- Bootstrap JS -->
		<script src="{{url('dist/js/bootstrap.min.js')}}"></script>
		<!-- Slick nav JS -->
		<script src="{{url('dist/js/jquery.slicknav.min.js')}}"></script>
		<!-- Slick JS -->
		<script src="{{url('dist/js/slick.min.js')}}"></script>
		<!-- owl carousel JS -->
		<script src="{{url('dist/js/owl.carousel.min.js')}}"></script>
		<!-- Popup JS -->
		<script src="{{url('dist/js/jquery.magnific-popup.min.js')}}"></script>
		<!-- Counter JS -->
		<script src="{{url('dist/js/jquery.counterup.min.js')}}"></script>
		<!-- Counterup waypoints JS -->
		<script src="{{url('dist/js/waypoints.min.js')}}"></script>
	    <!-- YTPlayer JS -->
	    <script src="{{url('dist/js/jquery.mb.YTPlayer.min.js')}}"></script>
		<!-- jQuery Easing JS -->
		<script src="{{url('dist/js/jquery.easing.1.3.js')}}"></script>
		<!-- Gmap JS -->
		<script src="{{url('dist/js/gmap3.min.js')}}"></script>
        <!-- Google map api -->
        <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBnKyOpsNq-vWYtrwayN3BkF3b4k3O9A_A"></script>
		<!-- Custom map JS -->
		<script src="{{url('dist/js/custom-map.js')}}"></script>
		<!-- WOW JS -->
		<script src="{{url('dist/js/wow-1.3.0.min.js')}}"></script>
		<!-- Switcher JS -->
		<script src="{{url('dist/js/switcher.js')}}"></script>
		<!-- main JS -->
		<script src="{{url('dist/js/main.js')}}"></script>
    </body>
</html>