<?php
   session_start();
   	include_once 'class.user.php';
   	$user = new User();
   
   	if (isset($_REQUEST['submit'])) {
   		extract($_REQUEST);
   	    $login = $user->check_login($emailusername, $password);
   	    if ($login) {
   	        /* Registration Success*/
   	       header("location:admin.php");
   	    } 
   		else {
   			/*registration failed*/
   			echo 	"<script type='text/javascript' language='javascript'>
   						alert('wrong username or password');
   
   					</script>";
   			/*header("location:home1.php");*/
   		}
   	}

?>






<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Sign in</title>

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

<body>
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
					<li class="active"><a href="index.php">Home</a></li>
					<li><a href="find.php">Find Medicine</a></li>
					
					<li><a href="contact.html">Blog</a></li>
					<li><a class="btn" type="submit"  name="submit">SIGN IN</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->

	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="index.php">Home</a></li>
			<li class="active">User access</li>
		</ol>

		<div class="row">
			
			<!-- Article main content -->
			<article class="col-xs-12 maincontent">
				<header class="page-header">
					<h1 class="page-title">Sign in</h1>
				</header>
			<form method="post" action="signin.php" name="login">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Sign in to your account</h3>
							
							<hr>
							
							<form>
								<div class="top-margin">
									<label >Username/Email <span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="exampleInputEmail1" required name="emailusername" placeholder="Email">
								</div>
								<div class="top-margin">
									<label >Password <span class="text-danger">*</span></label>
									<input type="password" class="form-control" name="password" required id="exampleInputPassword1" placeholder="Password">
								</div>

								<hr>

								<div class="row">
									<div class="col-lg-8">
										
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" type="submit" name="submit">Sign in</button>
									</div>
								</div>
							</form>
						</div>
					</div>

				</div>

			</form>
				
			</article>
			<!-- /Article -->

		</div>
	</div>	<!-- /container -->
	

	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>