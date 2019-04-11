<!DOCTYPE html>

	<head>
    <?php
	include("head.html");
	$mail = $_REQUEST['mail'];
    ?>
    </head>
	
	<body>
	
	<!-- Loader -->
	<div class="fh5co-loader"></div>
	
	<div id="fh5co-page">
		<section id="fh5co-header">
			<div class="container">
				<nav role="navigation">
					<h1 id="fh5co-logo"><a href="index.php">M2L<span>.</span></a></h1>
					<ul class="pull-right right-menu">
						<li class="fh5co-cta-btn"><a href="index.php?uc=demandeur&mail=<?=$mail?>&action=pagedeclarer">Déclaration</a></li>
						<li class="fh5co-cta-btn"><a href="index.php?uc=demandeur&mail=<?=$mail?>&action=pageconsultation">Consulter</a></li>
						<li class="fh5co-cta-btn"><a href="index.php?uc=demandeur&mail=<?=$mail?>&action=pagemodifier">Modifer</a></li>
					</ul>
				</nav>
			</div>
		</section>
		<!-- #fh5co-header -->

		<section id="fh5co-hero" class="js-fullheight"  data-next="yes">
			<div class="fh5co-overlay"></div>
			<div class="container">
				<div class="fh5co-intro js-fullheight">
					<div class="fh5co-intro-text">
						
						<div class="fh5co-left-position">
							<h2 class="animate-box">Maison des ligues de Lorraine</h2>

						</div>
					</div>
				</div>
			</div>
			<div class="fh5co-learn-more animate-box">
					<span class="text">Présentation</span>
					<span class="arrow"><i class="icon-chevron-down"></i></span>
			</div>
		</section>
		<!-- END #fh5co-hero -->


		<section id="fh5co-projects">
			<div class="container">
				<div class="row row-bottom-padded-md">
					<div class="col-md-6 col-md-offset-3 text-center">
						<h2 class="fh5co-lead animate-box">Nos ligues partenaire</h2>
						
					</div>
				</div>
				<div class="row">
					
					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
							<img src="images/img_1.jpg" alt="Image" class="img-responsive">
							<div class="fh5co-text">
								<h2>Ligue Lorraine Escrime</h2>
								
							</div>
					
					</div>

					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
							<img src="images/img_2.jpg" alt="Image" class="img-responsive">
							<div class="fh5co-text">
								<h2>Ligue Lorraine Football</h2>
								
							</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
							<img src="images/img_3.jpg" alt="Image" class="img-responsive">
							<div class="fh5co-text">
								<h2>Ligue Lorrainne Volley-Ball </h2>
								
							</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
							<img src="images/img_4.jpg" alt="Image" class="img-responsive">
							<div class="fh5co-text">
								<h2>ligue lorraine Basket-ball</h2>
								
							</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
							<img src="images/img_5.jpg" alt="Image" class="img-responsive">
							<div class="fh5co-text">
								<h2>ligue lorraine tir à l'arc</h2>
								
							</div>
					</div>

					<div class="col-md-4 col-sm-6 col-xxs-12 animate-box">
						<a href="images/img_6.jpg" class="fh5co-project-item image-popup">
								<h2>ligue lorraine rugby</h2>
	
						</a>
					</div>
					
					
				</div>
			</div>
		</section>
		<!-- END #fh5co-projects -->
		