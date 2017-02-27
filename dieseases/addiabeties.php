<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport"    content="width=device-width, initial-scale=1.0">
	<meta name="description" content="">
	<meta name="author"      content="Sergey Pozhilov (GetTemplate.com)">
	
	<title>Find Medicine</title>

	<link rel="shortcut icon" href="../assets/images/main.png">
	
	<link rel="stylesheet" media="screen" href="http://fonts.googleapis.com/css?family=Open+Sans:300,400,700">
	<link rel="stylesheet" href="../assets/css/bootstrap.min.css">
	<link rel="stylesheet" href="../assets/css/font-awesome.min.css">

	<!-- Custom styles for our template -->
	<link rel="stylesheet" href="../assets/css/bootstrap-theme.css" media="screen" >
	<link rel="stylesheet" href="../assets/css/main.css">
	
	<link rel="stylesheet" type="text/css" href="style.css">

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
				<a class="navbar-brand" href="../index.php"><img src="../assets/images/ayu.png" style="margin-top:-30px;"alt="Progressus HTML5 template"></a>
			</div>
			<div class="navbar-collapse collapse">
				<ul class="nav navbar-nav pull-right">
					<li><a href="admin.php">Home</a></li>
					<li class="active"><a href="adminfind.php">Find Medicine</a></li>
					<li><a href="addmed.php">Add Medicine</a></li>
					
					<li><a href="http://slayurvedamedicine.blogspot.com/" target="_blank">Blog</a></li>
					<li><a class="btn" onclick="window.location.href='../index.php?q=logout'">Log Out</a></li>
					
				</ul>
			</div><!--/.nav-collapse -->
		</div>
	</div> 
	<!-- /.navbar -->
	<header id="head" class="secondary"></header>

	<!-- container -->
	<div class="container">

		<ol class="breadcrumb">
			<li><a href="../admin.php">Home</a></li>
			<li><a href="../adminfind.php">Find Medicine</a></li>
			<li class="active">Diabeties</li>
		</ol>
<h2>Medicine for Diabeties </h2>
	<br>
	<br>

		
		<!-- /container -->
	<div class="labels">
	<div class="row">


                  <?php

                  	include '../db_config.php';

                     $query = $conn->query("select * from medicine where disease='diabeties'");
                     while($row = mysqli_fetch_assoc($query)){
                     $name= $row['plant_name'];
                     $disease = $row['disease'];
                     $about = $row['about'];
                    
                     ?>
                <div class="col-md-2 col-sm-3 text-center">

                    <img class="photo" src="<?php echo $row['location']; ?>" width="200" height="190"><br><br>
					<h4><span class="label label-success"><a href="<?php echo $row['adminlink']; ?>" > <?php echo $name; ?></a></span></h4>
                   

                  
                   
                </div>
                    <?php } ?>
					
				
    </div>
</div>

</div>             

	


	<!-- JavaScript libs are placed at the end of the document so the pages load faster -->
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://netdna.bootstrapcdn.com/bootstrap/3.0.0/js/bootstrap.min.js"></script>
	<script src="assets/js/headroom.min.js"></script>
	<script src="assets/js/jQuery.headroom.min.js"></script>
	<script src="assets/js/template.js"></script>
</body>
</html>