<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Add Medicine</title>

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

<body style="background-color:#9ACD32;">
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
					
					<li><a href="http://slayurvedamedicine.blogspot.com/" target="_blank">Blog</a></li>
					<li><a class="btn" onclick="window.location.href='index.php?q=logout'">Log Out</a></li>
					
					
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
			<li class="active" style="color:#fff;">Add Medicine</li>
		</ol>

		<form  id="upload_image"  class="form-horizontal" method="POST" enctype="multipart/form-data">
				<div class="col-md-6 col-md-offset-3 col-sm-8 col-sm-offset-2">
					<div class="panel panel-default">
						<div class="panel-body">
							<h3 class="thin text-center">Add Medicine</h3>
							
							<hr>
							
							
								<div class="top-margin">
									<label >Medicine Plant Name<span class="text-danger">*</span></label>
									<input type="text" class="form-control" id="plantname" required name="plantname" placeholder="Plant Name">
								</div>
								<div class="top-margin">
									<label >Disease <span class="text-danger">*</span></label>
									<input type="text" class="form-control" name="disease" required id="disease" placeholder="Disease">
								</div>

								<div class="top-margin">
									<label >About the Plant <span class="text-danger">*</span></label>
									<textarea class="form-control" name="about" required id="about" placeholder="About the Plant">
									</textarea>
								</div>
								<br>

								<div class="control-group">
                					<label class="control-label" for="input01">Image:</label>

                						<div class="controls">
                    						<input type="file" name="image" class="font" required>
                						</div>
            				    </div>						

								

								<div class="row">
									<div class="col-lg-8">
										
									</div>
									<div class="col-lg-4 text-right">
										<button class="btn btn-action" style="background-color:#9ACD32;" type="submit" name="submit">Add Plant</button>
									</div>
								</div>
							
						</div>
					</div>

				</div>

			</form>

		<?php

		 include "db_config.php";

         if (isset($_POST['submit'])) {
         
         	$image = addslashes(file_get_contents($_FILES['image']['tmp_name']));
         	$image_name = addslashes($_FILES['image']['name']);
         	$image_size = getimagesize($_FILES['image']['tmp_name']);
         
         	move_uploaded_file($_FILES["image"]["tmp_name"], "images/" . $_FILES["image"]["name"]);
         	$location = "../images/" . $_FILES["image"]["name"];
         	
         	$plantname = $_POST['plantname'];
         	$disease = $_POST['disease'];
         	$about = $_POST['about'];

         	$addplant = "insert into medicine(plant_name,disease,about,location) values ('$plantname','$disease','$about','$location')";
            $result1=mysqli_query($conn, $addplant);


            echo 	"<script type='text/javascript' language='javascript'>
   						alert('A new plant has been added');
   
   					</script>";




         ?>
      <script>
         window.location = 'addmed.php';
      </script>
      <?php
         }
         ?>

		
	</div>	<!-- /container -->
	
	

	
		




	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
	
	<!-- Google Maps -->
	<script src="https://maps.googleapis.com/maps/api/js?key=&amp;sensor=false&amp;extension=.js"></script> 
	<script src="assets/js/google-map.js"></script>
	

</body>
</html>