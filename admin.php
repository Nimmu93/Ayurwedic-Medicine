<?php
   session_start();
   include_once 'class.user.php';
   $user = new User(); $uid = $_SESSION['uid'];
   if (!$user->get_session()){
    header("location:admin.php");
   }
   
   if (isset($_GET['q'])){
    $user->user_logout();
    header("location:index.php");
    }
    
   ?>




<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Ayurvedic Medicine</title>

	<link rel="shortcut icon" href="assets/images/main.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="assets/css/main.css">

	<!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
	<!--[if lt IE 9]>
	<script src="assets/js/html5shiv.js"></script>
	<script src="assets/js/respond.min.js"></script>
	<![endif]-->
</head>

<body class="home" style="background-color:#9ACD32;">
	<!-- Fixed navbar -->
	<div class="navbar navbar-inverse navbar-fixed-top headroom" >
		<div class="container">
			<div class="navbar-header">
				<!-- Button for smallest screens -->
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse"><span class="icon-bar"></span> <span class="icon-bar"></span> <span class="icon-bar"></span> </button>
				<a class="navbar-brand" href="index.php"><img src="assets/images/ayu.png" style="margin-top:-30px;"alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li class="active"><a href="admin.php">Home</a></li>
					<li><a href="adminfind.php">Find Medicine</a></li>
					<li><a href="addmed.php">Add Medicine</a></li>
					
					<li><a href="contact.html">Blog</a></li>
					<li><a class="btn" onclick="window.location.href='index.php?q=logout'">Log Out</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<!-- Header -->
	<header id="head">
		<div class="container">
			<div class="row">
				<h1 class="lead"><b>Ayurvedic Medicine</b></h1>
				<p class="tagline"><b>Knowledge of living </b><a href="http://www.gettemplate.com/?utm_source=progressus&amp;utm_medium=template&amp;utm_campaign=progressus"></a></p>
				
			</div>
		</div>
	</header>
	<!-- /Header -->

	<!-- Intro -->
	<div class="container text-center">
		<br> <br>
		<h2 class="thin">Ayurvedic medicine</h2>
		<p class="text-muted">Ayurveda, meaning ‘the science of life’ is considered to be the oldest healing science in the 
		world. With the time most of the people used to believe western medicine methodologies than our Sri Lankan ayurvedic 
		medicine. But nowadays again people are looking for ayurvedic solutions. Not only Sri Lankans but also foreigners.Most 
		of the existing ayurvedic websites contain details about ayurvedic resorts and spas. But through our blog we are trying
		to provide ayurvedic solutions to prevent diseases. Now a day’s most ayurvedic medicine methodologies will publish through
		social networks but there is no guarantee about the accuracy of those articles. So people are a little bit afraid to try 
		on those. But our blog articles will provide and guide by well-known Ayurvedic doctors in Sri Lanka. Some of them are
		already writing ayurvedic articles for weekend newspapers. We hope to publish blog in both Sinhala and English. So then
		it will be very useful. In additional we hope to do a survey within the university to get an idea about what they are 
		thinking and what they expect from our blog etc. Ayurveda has a two-fold aim; to prevent diseases and to treat and cure 
		diseases. As a holistic discipline, it seeks to promote health on all three planes of life: mentally, physically and 
		spiritually. Through our blog we are trying to distribute these values among the people.
			
		</p>
	</div>
	<!-- /Intro-->
		
	<!-- Highlights - jumbotron -->
	
	<!-- /Highlights -->

	<!-- container -->
	
	
	<!-- Social links. @TODO: replace by link/instructions in template -->
	<section id="social">
		<div class="container">
			<div class="wrapper clearfix">
				<!-- AddThis Button BEGIN -->
				<div class="addthis_toolbox addthis_default_style">
				<a class="addthis_button_facebook_like" fb:like:layout="button_count"></a>
				<a class="addthis_button_tweet"></a>
				<a class="addthis_button_linkedin_counter"></a>
				<a class="addthis_button_google_plusone" g:plusone:size="medium"></a>
				</div>
				<!-- AddThis Button END -->
			</div>
		</div>
	</section>
	<!-- /social links -->
<footer id="footer">

		<div class="footer1">
			<div class="container">
				<div class="row">
					<div class= "col-md-0.5 widget">
					</div>
					<div class="col-md-4 widget">
						<img src="assets/images/ayurveda.jpg" style="width: 370px; height: 200px;">
					</div>

					<div class="col-md-7.5 widget">
						<h3 class="widget-title">Ayurvedic Medicine</h3>
						<div class="widget-body">
							<p>Ayurvedic medicine (also called Ayurveda) is one of the world’s oldest medical systems. It 
							originated in India more than 3,000 years ago and remains one of the country’s traditional health 
							care systems. Its concepts about health and disease promote the use of herbal compounds,special diets, 
							and other unique health practices.India’s government and other institutes throughoutthe world support
							clinical and laboratory research on Ayurvedic medicine, within the context of the Eastern belief system.
							But Ayurvedic medicine isn’t widely studied as part of conventional (Western) medicine. This fact sheet 
							provides a general overview of Ayurvedic medicine</p>
						</div>
					</div>
				</div> <!-- /row of widgets -->
			</div>
		</div>
		<div class="footer2">
			<div class="container">
				<div class="row">
					
					<div class="col-md-6 widget">
						<div class="widget-body">
							<p class="simplenav">
								<a href="#">Home</a> |
								<a href="find.php">Find Medicine</a> | 
								<a href="">Blog</a> |
								
							</p>
						</div>
					</div>
					<div class="col-md-6 widget">
						<p class="text-right">
							Ayurvedic medicine
						</p>
					</div>
				</div> <!-- /row of widgets -->
			</div>
		</div>

	</footer>	






	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>