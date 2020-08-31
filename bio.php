<?php

include "connection.php";
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin-Dashboard | Bio </title>

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
    <link rel="stylesheet" href="css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styles.css">
	
</head>
<body>

<?php
if (isset($_POST['bio-save']))
{
    $b_about = mysqli_real_escape_string($conn, $_POST['b_about']);
    $b_mission = mysqli_real_escape_string($conn, $_POST['b_mission']);
    $b_logo = mysqli_real_escape_string($conn, $_POST['b_logo']);

    $insertquery = "INSERT INTO bio(b_about, b_mission, b_logo) VALUES('$b_about', '$b_mission', '$b_logo')";
    $iquery = mysqli_query($conn, $insertquery);

    if ($iquery)
    {
        ?>
            <script>alert("Bio Updated Successfully");</script>
        <?php
    }
    else
    {
        ?>
            <script>alert("Bio Update Failed");</script>
        <?php
    }

}

?>

<?php

if (isset($_POST['supporters-save']))
{
    $s_name = mysqli_real_escape_string($conn, $_POST['s_name']);
    
    $insert = "INSERT INTO supporters(s_name) VALUES ('$s_name')";
    $query = mysqli_query($conn, $insert);

    if ($query)
    {
        ?>
            <script>alert("Supporter Saved Successfully");</script>
        <?php
    }
    else
    {
        ?>
            <script>alert("Supporter was not saved");</script>
        <?php
    }

}

?>

<!------------------------------------------------------Navigation-------------------------------------------------------------->

<section class="navigation" id="navigation">
    <div class="container-fluid">
        <div class="row top-nav">
            <nav class="navbar navbar-expand-md fixed-top bg-dark" id="nav">
                <h1 class="mb-0 site-logo"><a href="index.php" class="h3 mb-0 top-text"><img src="images/clef.jpg" class="top-logo"> NYOKenya.</a></h1>
                    <div class="collapse navbar-collapse justify-content-end" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="admin-dash.php" class="nav-link active"><i class="fa fa-home fa-fw" aria-hidden="true"></i>Home</a>
                            </li>
                            <li class="nav-item">
                                <a href="bio.php" class="nav-link"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Bio</a>
                            </li>
                            <li class="nav-item">
                                <a href="team.php" class="nav-link"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Team</a>
                            </li>
                            <li class="nav-item">
                                <a href="gallery.php" class="nav-link"><i class="fa fa-camera fa-fw" aria-hidden="true"></i>Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="event.php" class="nav-link"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="store.php" class="nav-link"><i class="fa fa-cart-plus fa-fw" aria-hidden="true"></i>Store</a>
                            </li>
                            <li class="nav-item">
                                <a href="blog.php" class="nav-link"><i class="fa fa-rss fa-fw" aria-hidden="true"></i>Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="faq.php" class="nav-link"><i class="fa fa-question-circle-o fa-fw" aria-hidden="true"></i>FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a href="messages.php" class="nav-link"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>Messages</a>
                            </li>
                            <li class="nav-item">
                                <a href="subscribers.php" class="nav-link"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Subscribers</a>
                            </li>
                            <li class="nav-item">
                                <a href="admin-dash.php" class="nav-link"><i class="fa fa-lock fa-fw" aria-hidden="true"></i>Admin</a>
                            </li>
                        </ul>
                    </div>
                    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false" aria-hidden="true">
                        <i class="fa fa-bars"></i>
                    </button>
                </nav>  
            </div>
        </div>
    </div>
<section>

<!------------------------------------------------------Bio Section-------------------------------------------------------->

<section class="sign-in-section" id="sign-in-section">
    <div class="container data-container forms-data-container" id="container">
        <div class="form-container sign-in-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h1>Edit KNYO Bio</h1>
                <input type="text" name="b_about" placeholder="About" />
                <input type="text" name="b_mission" placeholder="Mission" />
                <input type="file" name="b_logo" placeholder="Logo" />
                <button type="submit" class="sign-button btn btn-success" name="bio-save">Save</button>
            </form>
        </div>
        <div class="overlay-container form-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    	<h1>Supporters</h1>
                		<input type="text" name="s_name" placeholder="Name" />
                        <button type="submit" class="sign-button btn btn-success" name="supporters-save">Save</button>
            		</form>   
                </div>
            </div>
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
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>

</body>
</html>