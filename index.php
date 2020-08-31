<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KNYO | Home </title>

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
								<a href="index.php" class="nav-link active"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a>
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
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<div class="carousel-inner">
			<div class="item active">
				<img src="images/14677403_565841916932244_8991876323257352192_n(1).jpg" class="img-fluid carousel-img">
				<div class="carousel-caption">
			        <h3>MUSIC JUST THE WAY YOU LIKE IT</h3>
			    </div>
			</div>
		</div>
	</div>
</section>

<section class="site-section" id="bio-section">
	<div class="container-fluid">
		<div class="row padding">
			<div class="row offset-1 padding">
				<div class="col-sm-10 col-md-8 col-lg-6">
			   		<div class="jumbotron">
			   			<div class="#" data-aos="fade">
							<h2 class="about-title" data-aos="fade-up" data-aos-delay="">Who are we?</h2>
							<hr>
						</div>
              			<p class="about-text">The National Youth Orchestra of Kenya ( KNYO, as it is often called) was set up in 2010 as a leadership, social-integration (across cultural, age, socio-economic, ethnic barriers) musical leadership programme. The idea was greatly inspired by the success of Venezuela’s El Sistema organisation in bringing communities together and developing national pride through music participation.
              			</p>
              			<a href="#" data-toggle="collapse" data-target="#moreabout">READ MORE</a>	
					</div>
				</div>
				<div class="clearfix visible-xs"></div>
				<div class="col-sm-10 col-md-8 col-lg-6">
					<div class="bio">
						<img src="images/16229470_367426603641977_5691293870105559040_n.jpg" class="img-fluid bio-pic">						
					</div>
    			</div>
        	</div>
        	<div class="row padding collapse" id="moreabout">
        		<div class="col-sm-12 col-md-12 col-lg-12">
        			<div class="jumbotron">
        				<p>It draws its members from all of Kenya, public and private schools, colleges and young professionals. The orchestra encourages, nurtures and showcases their talent. By pursuing and encouraging excellence we believe we are setting a benchmark for the country and giving other youth with talent something to aspire to.
						</p>
						<p>Currently, the orchestra is made up of over 190 members ranging from 14 – 23 years of age. The KNYO meets for a week, three times a year during the school holidays for a musical residential. Working with the best instrumental trainers there are in the country and beyond, the students have 6 intensive days of training at the residential programme, which not only builds them as musicians, but also trains them to be great Kenyans who will be mentors to their peers.
						</p>
						<p>Our ultimate aim is to link the community based Ghetto Classics programmes with the National Youth Orchestra our vision being that we would have a network of community music programmes that all link up to a national ensemble of the highest standard.
						</p>
						<p>The KNYO has performed at many functions including: TICAD (Kenya 2016), President Obama State Dinner (Kenya), U.N Day, 2014 (New York), ScoKendia (Glasgow), promulgation of the New Constitution (Kenya), Presidential inauguration (Kenya), opening of the Kenya National theatre, CBM concert in the dark, ‘Conduct-us as well as performing and appearing in the music videos of two of Kenya’s award winning musicians namely Rufftone and Dela.
						</p>
						<p>The Kenya National Youth Orchestra is a flagship program of the Art of Music Foundation alongside other programs such as The Ghetto Classics and The Safaricom Youth Orchestra. It is in partnership with various agencies which aid its management and promotes its great span both locally and internationally. KNYO currently accepts players profecient in a musical instrument of their liking, through annual auditions. The registered players meet for residentials periodically and practise together for a week or two in preparation for a concert. We believe that music is a tool for change and you and I are all it needs to make a positive difference.
						</p>
        			</div>
        		</div>
        	</div>
		</div>
	</div>
</section>

<section class="site-section" id="bio-section">
	<div class="container-fluid">
			<div class="row site-section">
				<div class="col-sm-12 col-md-12 col-lg-12 text-center" data-aos="fade-up" data-aos-delay="">
					<h2 class="section-title">CALENDAR</h2>
					<hr>
				</div>
			</div>
		<div class="row padding offset-1">
			<?php
				$selectevents = $conn->query("SELECT * FROM events LIMIT 1");			
			while($fetchevents = mysqli_fetch_array($selectevents))
			{
				echo '
				<div class="col-sm-8 col-md-6 col-lg-4">
					<div class="bio">
						<img src="images/' .$fetchevents['e_avator'].'" class="img-fluid event-pic">						
					</div>				
				</div>
				<div class="col-sm-8 col-md-6 col-lg-5 padding">
					<div class="event-name">
						<h3>' .$fetchevents['e_name']. '</h3>
					</div>
					<div class="event-status">
						<span><i class="fa fa-map-marker"></i>
							' .$fetchevents['e_venue']. '
						</span>
						<span><i class="fa fa-calendar"></i>
							' .$fetchevents['e_date']. '
						</span>
						<span><i class="fa fa-book"></i><a href="event-attendance.php" class="btn">Book Seat</a></span>
						<span class="event-description">
							<p>
								' .$fetchevents['e_description']. '
							</p>
						</span>
					</div>
				</div>
				<div class="col-sm-8 col-md-6 col-lg-3">
					<a href="events.php" class="btn btn-primary event-button">EVENT INFO</a>
					<br/><a href="events.php" class="more-events-button">MORE EVENTS</a>
				</div>';
			}
			?>
		</div>
	</div>
</section>

<section class="site-section photos-section" id="bio-section">
	<div class="row padding offset-2">
		<div class="col-sm-8 col-md-6 col-lg-3">
			<img src="images/15306523_1617488081887474_3537703757863190528_n.jpg" class="img-fluid">
		</div>
		<div class="col-sm-8 col-md-6 col-lg-3">
			<img src="images/15538926_196498804088459_6685147077606899712_n.jpg" class="img-fluid">
		</div>
		<div class="col-sm-8 col-md-6 col-lg-3">
			<img src="images/15306067_1421911781187422_6526048247578886144_n.jpg" class="img-fluid">
		</div>
	</div>
	<div class="row text-white text-center">
		<div class="col-sm-8 col-md-6 col-lg-12">
			<a href="gallery.php" class="btn btn-primary">VIEW IN GALLERY</a>
		</div>
	</div>
</section>

<section class="site-section" id="bio-section">
	<div class="container-fluid">
		<div class="row site-section">
			<div class="col-sm-12 col-m-12 col-lg-12 text-center" data-aos="fade-up" data-aos-delay="">
				<h2 class="section-title">BLOG POSTS</h2>
				<hr>
			</div>
		</div>		
		<div class="row offset-1">
			<div class="col-md-5 blog">
				<p>Music is always a remedy for the soul. Good music is more than a remedy, it is a way of life </p>
				<img src="images/13649140_1802227926667927_2096481418_n.jpg">
				<p class="bloger-details"><b>Anonymous</b><br> Blogger </p><br/><br/>
				<a href="blogs.php" class="#">READ MORE</a>
			</div>
			<div class="col-md-5 blog">
				<p>When the basses play, you don't hear them sound; you only hear their effect. They are the heart of the orchestra</p>
				<img src="images/13651771_505464836308717_1993004860_n.jpg">
				<p class="bloger-details"><b>Anonymous</b><br> Tubist </p><br/><br/>
				<a href="blogs.php" class="#">READ MORE</a>
			</div>
			<div class="col-md-1 blog">
				<a href="blogs.php" class="btn btn-primary">MORE BLOGS</a>
			</div>
		</div>
	</div>
</section>

<section class="site-section" id="contacts-section">
	<div class="container-fluid">
			<div class="row site-section">
				<div class="col-sm-12 col-md-12 col-lg-12 text-center" data-aos="fade-up" data-aos-delay="">
					<h2 class="section-title">OUR CONTACTS</h2>
					<hr>
				</div>
			</div>
		<div class="row padding contacts-row">
			<div class="col-sm-8 col-md-6 col-lg-3 contacts-div">
				<span class="contacts-icons"><i class="fa fa-phone"></i><br/>
					<p class="contact-item">CALL OR TEXT</p><br/>
					+254 723216197
				</span>
			</div>
			<div class="col-sm-8 col-md-6 col-lg-3 contacts-div">
				<span class="contacts-icons"><i class="fa fa-map-marker"></i><br>
					<p class="contact-item">ADDRESS</p><br>
					92 - Garden Estate, Nairobi, Kenya 63542 &minus; 00619
				</span>
			</div>
			<div class="col-sm-8 col-md-6 col-lg-3 contacts-div">
				<span class="contacts-icons"><i class="fa fa-envelope"></i><br>
					<p class="contact-item">EMAIL</p><br>
					knyo@aom.com
				</span>
			</div>
		</div>
		<hr>
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
						<a href="faqs.php" class="nav-link">FAQ's</a>
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
				<a href="support.php" class="btn btn-primary">DONATE</a>
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
				<form  action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" >
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