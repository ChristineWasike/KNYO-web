<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KNYO | FAQ's </title>

	<meta charset="utf-8">
	<meta name="description" content="KNYO">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
    <link rel="stylesheet" href="fonts/icomoon/style.css">
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="plugins/font-awesome-4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">
    <link rel="stylesheet" href="css/jquery.fancybox.min.css">
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">
    <link rel="stylesheet" href="css/aos.css">
	<link rel="stylesheet" href="styles.css">

	<link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f318d19831.js" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="styles.css">

	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
	<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	
</head>
<body>

<!------------------------------------------------------Navigation-------------------------------------------------------------->

<section class="navigation" id="navigation">
	<div class="container-fluid">
		<div class="row">
			<nav class="navbar navbar-expand-md fixed-top bg-black" id="nav">
				<h1 class="mb-0 site-logo"><a href="index.php" class="h3 mb-0 top-text"><img src="images/clef.jpg" class="top-logo"> NYOKenya.</a></h1>
					<div class="collapse navbar-collapse justify-content-center text-white" id="collapsibleNavbar">
						<ul class="navbar-nav">
							<li class="nav-item">
								<a href="index.php" class="nav-link"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a>
							</li>
							<li class="nav-item">
								<a href="events.php" class="nav-link"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Events</a>
							</li>
							<li class="nav-item">
								<a href="store.php" class="nav-link"><i class="fa fa-cart-plus fa-fw" aria-hidden="true"></i>Store</a>
							</li>
							<li class="nav-item">
								<a href="blogs.php" class="nav-link"><i class="fa fa-rss fa-fw" aria-hidden="true"></i>Blogs</a>
							</li>
							<li class="nav-item">
								<a href="contacts.php" class="nav-link"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>Contact Us</a>
							</li>
							<li class="nav-item">
								<a href="support.php" class="nav-link"><i class="fa fa-support" aria-hidden="true"></i>Support</a>
							</li>
						</ul>
						<div class="search-bar">
							<form>
								<div class="input-group mb-3">
									<input type="text" class="form-control border-secondary text-white bg-transparent" placeholder="Search KNYO" aria-describedby="button-addon2">
									<div class="input-group-append">
										<span><i class="fa fa-search"></i></span>
									</div>
								</div>
							</form>
							
						</div>
					</div>
					<span class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false" aria-hidden="true">
						<i class="fa fa-bars"></i>
					</span>
				</nav>	
			</div>
		</div>
	</div>
<section>

<section class="slides" id ="slides">
	<div id="slide" class="carousel-slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="carousel-item active img-fluid">
				<img src="images/14278934_559937070878906_1336155047_n.jpg" class="img-fluid carousel-img">
				<div class="carousel-caption">
			        <h3>FREQUENTLY ASKED QUESTIONS</h3>
			    </div>
			</div>
		</div>
	</div>
</section>

<section class="site-section" id="faq-section">
	<div class="container-fluid">
		<div class="row">
			<div class="col-lg-12" data-aos="fade-up" data-aos-delay="">
				<h1 class="text-center">FAQ's</h1>
				<hr>
			</div>
		</div>
		<div class="row padding">
			<?php 
			$selectfaq = $conn->query("SELECT * FROM faq LIMIT 20");
			while ($fetchfaq = mysqli_fetch_array($selectfaq))
			{
				echo '
				<div class="col-md-6" data-aos="fade-up" data-aos-delay="100">
			        <h3 class="text-black h4 mb-4">' .$fetchfaq['f_quiz']. '</h3>
			        <p>' .$fetchfaq['f_answer']. '</p>
		      	</div>'
		      	;
			}
			?>
	      	<div class="col-xl-10 col-sm-10 col-md-8 col-lg-10 col-xl-10">
	      		<?php 
					if (isset($_POST['askquiz']))
				      {
				      	$f_quiz = mysqli_real_escape_string($conn, $_POST['f_quiz']);

				        $sendquiz = $conn->query("INSERT INTO faq (f_quiz) VALUES ('$f_quiz') ");

				        if($sendquiz)
				        {
				        	?>
				        		<script>alert("Question submitted successfully");</script>
				        	<?php
				        }
				      }
				?>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
					<h2 class="h4 mb-5 card-title">Post a Question</h2> 
					<input type="text" name="f_quiz" class="form-control text-black faq-quiz" placeholder="Write your notes or questions here..." />
					<br><br>
					<button type="submit" class="btn btn-primary" name="askquiz">Post</button>
				</form>
			</div>
		</div>
	</div>
</section>

<section class="site-section bg-black" id="footer-section">
	<div class="container-fluid">
		<div class="row padding">
			<img src="images/knyo_logo.jpg" class="footer-logo img-fluid">
			<nav class="navbar navbar-expand-md bg-black footer-menu" id="nav">
				<ul class="navbar-nav">
					<li class="nav-item">
						<a href="admin-sign-in.php" class="nav-link">Admin</a>
					</li>
					<li class="nav-item">
						<a href="support.php" class="nav-link">Support KNYO</a>
					</li>
					<li class="nav-item">
						<a href="faqs.php" class="nav-link active">FAQ's</a>
					</li>
					<li class="nav-item">
						<a href="about.php" class="nav-link">About</a>
					</li>
				</ul>
			</nav>
			<ul class="footer_social_list">
				<li class="footer_social_item"><a href="https://www.facebook.com/nyokenya/"><i class="fa fa-facebook-f"></i></a></li>
				<li class="footer_social_item"><a href="https://twitter.com/nyo_ke"><i class="fa fa-twitter"></i></a></li>
				<li class="footer_social_item"><a href="https://www.instagram.com/nyo_ke/"><i class="fa fa-instagram"></i></a></li>
				<li class="footer_social_item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
			</ul>
		</div>
		<hr/>
		<div class="row ml-30">
			<div class="col-lg-3">
				<h4 class="text-white">Supporters</h4>
				<div class="mb-4">
					<ul class="list-unstyled ul-check white text-white">
						<?php 
						$selectsupporters = $conn->query("SELECT s_name FROM supporters");
						while ($fetchsupporters = mysqli_fetch_array($selectsupporters))
						{
							echo '<li>' .$fetchsupporters['s_name']. '</li>';
						}
						?>
					</ul>
 				</div>
			</div>
			<div class="col-lg-3 text-white">
			    <p>
			    	<i class="fa fa-map-marker"></i>
					92 - Garden Estate, Nairobi, Kenya 63542 &minus; 00619
					<br><br>
					<i class="fa fa-phone"></i>
					+254 723216197
				</p>
			</div>
			<div class="col-lg-3">
				<a href="#" class="btn btn-primary">DONATE</a>
			</div>
			<div class="col-lg-3 text-white">
				<?php
					if (isset($_POST['subscribe']))
					{
						$sub_email = mysqli_real_escape_string($conn, $_POST['sub_email']);

						$addsub = $conn->query("INSERT INTO subscribers (sub_email) VALUES ('$sub_email')");

						if ($addsub)
						{
							?>
								<script>alert("Your subscription is successful!");</script>
							<?php
						}
					}
				?>
				<h4>Newsletters</h4><br/>
				<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
					<div class="input-group mb-3">
						<input type="email" name="sub_email" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email" aria-label="Enter Email" aria-describedby="button-addon2">
						<div class="input-group-append">
							<input class="btn btn-primary text-black" type="submit" id="button-addon2" name="subscribe">
						</div>
					</div>
				</form>
			</div>
		</div>
		<div class="row text-center border-top justify-content-center text-white">
  			<p>
	  			Copyright &copy;<script>document.write(new Date().getFullYear());</script> The Kenya National Youth Orchestra<br><br>All rights reserved<br><br>A Julius and Everton creation
  			</p>
		</div>
	</div>
</section>

	<script>
    if ( window.history.replaceState ) {
      window.history.replaceState( null, null, window.location.href );
    }
    </script>


<!--------------------------------------------------Javascripts----------------------------------------------------------->

<script src="js/jquery-3.3.1.min.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/popper.min.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/jquery.countdown.min.js"></script>
<script src="js/jquery.easing.1.3.js"></script>
<script src="js/aos.js"></script>
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>