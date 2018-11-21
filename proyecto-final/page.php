<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package proyecto-final
 */

get_header();
?>

<main id="main" class="site-main">
	<section id="rooms">
		<div class="container-fluid">
			<div class="row text-center">
				<h2 style="margin: 0 auto;">Rooms</h2>
			</div>
		</div>
		<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
			<div class="carousel-inner">
				<div class="carousel-item active">
					<div class="row">
						<div class="col-md-6">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/img/room1.jpg" alt="First slide" class="img img-fluid">
						</div>
						<div class="col-md-6">
							<h2 class="text-center">Room name</h2>
							<p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima perspiciatis
								magnam natus tempora optio?</p>
							<ul>
								<li>Lorem ipsum dolor sit.</li>
								<li>Lorem ipsum dolor sit.</li>
								<li>Lorem ipsum dolor sit.</li>
							</ul>
							<button class="btn btn-warning btn-reserve-room">Reserve room</button>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-md-6">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/img/room2.jpg" alt="First slide" class="img img-fluid">
						</div>
						<div class="col-md-6">
							<h2 class="text-center">Room name</h2>
							<p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima perspiciatis
								magnam natus tempora optio?</p>
							<ul>
								<li>Lorem ipsum dolor sit.</li>
								<li>Lorem ipsum dolor sit.</li>
								<li>Lorem ipsum dolor sit.</li>
							</ul>
							<button class="btn btn-warning btn-reserve-room">Reserve room</button>
						</div>
					</div>
				</div>
				<div class="carousel-item">
					<div class="row">
						<div class="col-md-6">
							<img class="d-block w-100" src="<?php echo get_template_directory_uri()?>/img/room3.jpg" alt="First slide" class="img img-fluid">
						</div>
						<div class="col-md-6">
							<h2 class="text-center">Room name</h2>
							<p class="text-left">Lorem ipsum dolor sit amet consectetur adipisicing elit. Reiciendis minima perspiciatis
								magnam natus tempora optio?</p>
							<ul>
								<li>Lorem ipsum dolor sit.</li>
								<li>Lorem ipsum dolor sit.</li>
								<li>Lorem ipsum dolor sit.</li>
							</ul>
							<button class="btn btn-warning btn-reserve-room">Reserve room</button>
						</div>
					</div>
				</div>
			</div>
			<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
				<span class="carousel-control-prev-icon" aria-hidden="true"></span>
				<span class="sr-only">Previous</span>
			</a>
			<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
				<span class="carousel-control-next-icon" aria-hidden="true"></span>
				<span class="sr-only">Next</span>
			</a>
		</div>
		<div class="container-fluid">
			<div class="row">
				<button class="btn btn-default btn-more-rooms">More rooms</button>
			</div>
		</div>
	</section>

	<section id="services">
		<div class="container-fluid">
			<h2 class="text-center color-white">Services</h2>
		</div>
		<div class="container-fluid">
			<div class="row">
				<div class="col-md-6">
					<div class="card">
						<img class="card-img-top" src="<?php echo get_template_directory_uri()?>/img/casino.jpeg" alt="Card image cap">
						<div class="card-body">
							<h5 class="card-title">Card title</h5>
							<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
								content.</p>
							<a href="#" class="btn btn-primary">Go somewhere</a>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="row">
						<div class="col-md-6">
							<div class="card">
								<img class="card-img-top" src="<?php echo get_template_directory_uri()?>/img/casino.jpeg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
										content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
						<div class="col-md-6">
							<div class="card">
								<img class="card-img-top" src="<?php echo get_template_directory_uri()?>/img/casino.jpeg" alt="Card image cap">
								<div class="card-body">
									<h5 class="card-title">Card title</h5>
									<p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's
										content.</p>
									<a href="#" class="btn btn-primary">Go somewhere</a>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>

	<section id="location">
		<div class="container-fluid pt-2">
			<h2 class="text-center">Location</h2>
		</div>
		<div id="map"></div>
	</section>
</main><!-- #main -->


<?php
get_footer();