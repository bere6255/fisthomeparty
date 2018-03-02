<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Fist Home Party</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">
	<link href="css/responsive-slider.css" rel="stylesheet">
	<link rel="stylesheet" href="css/animate.css">
	<link rel="stylesheet" href="css/font-awesome.min.css">
	<link href="css/style.css" rel="stylesheet">

  </head>
  <body>
    <header>
		<div class="container">
			<div class="row">
				<nav class="navbar navbar-default" role="navigation">
					<div class="container-fluid">
						<div class="navbar-header">
							<div class="navbar-brand">
								<a href="/"><h1>Fist Home Party</h1></a>
							</div>
						</div>
						<div class="menu">
							<ul class="nav nav-tabs" role="tablist">
								<li role="presentation" class="active"><a href="/">Home</a></li>
@guest
								<li role="presentation"><a href="{{ route('login') }}">Login</a></li>
								<li role="presentation"><a href="{{ route('register') }}">Register</a></li>
@else
								<li role="presentation"><a href="{{ route('logout') }}">Logout</a></li>
@endguest
							</ul>
						</div>
					</div>
				</nav>
			</div>
		</div>
	</header>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<div class="contents">
					<h2>Call us for all event plannig <span>cinema </span> and <span>gaming</span> experience</h2>
					<p>with our mobile video game theater.</p>
				</div>
			</div>
		</div>
	</div>



	<div class="container">
		<div class="row">
			<div class="recent">
				<button class="btn-primarys"><h3>Upcoming Event</h3></button>
				<hr>
			</div>
		</div>
	</div>


	<div class="container">
		<div class="row">
			<div class="box">

				<div class="col-md-6">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="0.8s">
						<div class="align-center">
							<h4>PlayStation 4 FIFA 18</h4>
							<div class="icon">
								<i class="fa fa-desktop fa-3x"></i>

							</div>
							<p>
							<a href="/home"> click hey to register for the PlayStation 4 FIFA 18 competition.</a>
							</p>
						</div>
					</div>
				</div>
				<div class="col-md-6">
					<div class="wow bounceIn" data-wow-offset="0" data-wow-delay="1.3s">
						<div class="align-center">
							<h4>coming soon</h4>
							<div class="icon">
								<i class="fa fa-laptop fa-3x"></i>

							</div>
							<p>
							 loading.....................
							</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>


	<!--about-->

		<div class="container">
			<div class="about">
					<div class="row">
						<div class="recent">
							<button class="btn-primarys"><h3>About us</h3></button>
							<hr>
						</div>
					</div>
				<div class="row">
					<div class="row-slider">
						<div class="col-lg-12">
							<div class="wow fadeInUp" data-wow-offset="0" data-wow-delay="0.6s">
								<div class="thumnails">
									<h4>Voluptatem accusantium doloremque</h4>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore
									magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
									quis nostrud exerci tation ullamcorper suscipit
									lobortis nisl ut aliquip ex ea commodo consequat.</p>
									<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit,
									sed diam nonummy nibh euismod tincidunt ut laoreet dolore
									magna aliquam erat volutpat. Ut wisi enim ad minim veniam,
									quis nostrud exerci tation ullamcorper suscipit
									lobortis nisl ut aliquip ex ea commodo consequat.</p>

									<div class="ficon">
										<a href="" alt="">Learn more</a> <i class="fa fa-long-arrow-right"></i>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>

	<div class="container">
		<div class="row">
			<hr>
		</div>
	</div>

	<!--start footer-->
	<footer>
		<div class="container">
			<div class="row">
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Get in touch with us</h5>
						<address>
						<strong>Fist Home Party</strong><br>
						 Plot 61 Haruk Rd, Off Obi-Wali Rd<br>
						 Rumuigbo, Port Harcourt Nigeria
						</address>
						<p>
							<i class="icon-phone"></i> (234) 8037071168 - 7032790747 <br>
							<i class="icon-envelope-alt"></i> info@fisthomeparty.com
						</p>
					</div>
				</div>
				<div class="col-lg-3">
					<div class="widget">
						<h5 class="widgetheading">Qick links</h5>
						<ul class="link-list">
							<li><a href="#">login</a></li>
							<li><a href="#">Register</a></li>
							<li><a href="#">Career center</a></li>
							<li><a href="#">Contact us</a></li>
						</ul>
					</div>
				</div>
			</div>
		</div>

		<div class="container">
			<div class="row">
				<hr>
			</div>
		</div>
	</footer>
	<!--end footer-->


    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="js/jquery.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
	<script src="js/responsive-slider.js"></script>
	<script src="js/wow.min.js"></script>
	<script>
	wow = new WOW(
	 {

		}	)
		.init();
	</script>
  </body>
</html>
