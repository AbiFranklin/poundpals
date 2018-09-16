<!doctype html>
<html <?php language_attributes(); ?>>

<head>
	<meta charset="<?php bloginfo('charset'); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<title>Calhoun County Humane Society</title>

	<!-- Bootstrap core CSS -->
	<link href="<?php bloginfo('template_url'); ?>/css/bootstrap.css" rel="stylesheet">

	<!-- Custom styles for this template -->
	<link href="<?php bloginfo('stylesheet_url'); ?>" rel="stylesheet">

	<link href="https://fonts.googleapis.com/css?family=Love+Ya+Like+A+Sister|Open+Sans" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.3.1/css/all.css" integrity="sha384-mzrmE5qonljUremFsqc01SB46JvROS7bZs3IO2EmfFsd15uHvIt+Y8vEf7N7fWAU"
	 crossorigin="anonymous">
    <?php wp_head(); ?>
</head>

    <?php get_header(); ?>

    <body>
	<main role="main">

		<div id="myCarousel" class="carousel slide" data-ride="carousel">
			<ol class="carousel-indicators">
				<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
				<li data-target="#myCarousel" data-slide-to="1"></li>
				<li data-target="#myCarousel" data-slide-to="2"></li>
			</ol>
			<div class="carousel-inner">
				<div class="carousel-item active">
					<img class="first-slide" src="img/carousel1.jpg"
					 alt="First slide">
					<div class="container">
						<div class="carousel-caption text-left text-navy">
							<h1>Adopt</h1>
							<p>We're looking for our fur-ever homes.</p>
							<p><a class="btn btn-lg btn-primary" href="./album.html" role="button">See Our Pets</a></p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="second-slide" src="img/carousel2.jpg"
					 alt="Second slide">
					<div class="container">
						<div class="carousel-caption text-teal">
							<h1>Volunteer</h1>
							<p>Learn how you can volunteer at the Calhoun County Humane Society.</p>
							<p><a class="btn btn-lg btn-primary btn-second" href="./blog.html" role="button">Learn more</a></p>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<img class="third-slide" src="img/carousel3.jpg"
					 alt="Third slide">
					<div class="container">
						<div class="carousel-caption text-right text-navy">
							<h1>Give Back</h1>
							<p>Learn about the various ways you can give back to CCHS.</p>
							<p><a class="btn btn-lg btn-primary" href="#" role="button">Give Back</a></p>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>


		<div class="container marketing">
			<h1>Featured Pets</h1>
			<div class="row">
				<div class="col-lg-4">
					<img class="rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/feature1.jpg"
					 alt="Generic placeholder image" width="140" height="140">
					<h2>Fido</h2>
					<p>Male<br>Mixed Breed, Medium (up to 44 lbs fully grown)<br>1 year</p>
					<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img class="rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/feature2.jpg"
					 alt="Generic placeholder image" width="140" height="140">
					<h2>Scruffy</h2>
					<p>Male<br>Mixed Breed, Small (up to 10 lbs fully grown)<br>2 year</p>
					<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
				</div><!-- /.col-lg-4 -->
				<div class="col-lg-4">
					<img class="rounded-circle" src="<?php echo get_template_directory_uri(); ?>/img/feature3.jpg"
					 alt="Generic placeholder image" width="140" height="140">
					<h2>Patches</h2>
					<p>Female<br>Mixed Breed, Medium (up to 44 lbs fully grown)<br>3 year</p>
					<p><a class="btn btn-primary" href="#" role="button">View details &raquo;</a></p>
				</div><!-- /.col-lg-4 -->
			</div><!-- /.row -->


			<!-- START THE FEATURETTES -->

			<hr class="featurette-divider">

			<div class="row about" id="about">
				<div class="">
					<h2 class="featurette-heading">About Us</h2>
					<p class="lead">The Calhoun County Humane Society is a Texas 
						Non-Profit Corporation. In January of 2006 we received our 
						501(c)3 tax exempt status.  We organized and established 
						this all-volunteer group to enable more adoptions of dogs 
						and cats from our local animal shelter through our 
						intervention. Many animals are euthanized each year. In 
						some cases this is unavoidable due to their illness or 
						behavioral problems. But many wonderful pets are 
						abandoned and end up at the shelter, pets that have so 
						much to offer and that have no chance without a great deal 
						of effort by caring humans.  Working with animal control, we 
						make available to the public dogs and cats that will be 
						wonderful companion animals and that have been tested, 
						vaccinated and spayed/neutered.</p>
				</div>
			</div>

	
			<!-- /END THE FEATURETTES -->

		</div><!-- /.container -->


<?php get_footer(); ?>
