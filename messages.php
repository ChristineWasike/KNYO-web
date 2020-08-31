<?php
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin-Dashboard | Messages </title>

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
    <link rel="stylesheet" href="style.css">
	<link rel="stylesheet" href="styles.css">	
</head>
<body>

<!------------------------------------------------------Top-Navigation Section--------------------------------------------------------->

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

<!------------------------------------------------------Side-Navigation-------------------------------------------------------------->

<section class="side-navigation" id="side-navigation">
    <div class="container-fluid">
        <div id="mySidenav" class="sidenav">
            <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
            <?php            
            
            if (isset($_SESSION['UserName']))
            {
                echo '<img src="images/'.$_SESSION['Avator'].'" class="profile-avator img-fluid"><br><br>
                <div class="user_name"><h3>Welcome ' .$_SESSION['UserName'].'</h3></div>';
            }
            ?>
            ?>
            <a href="#">Home</a>
            <a href="admin-sign-up.php">Add Admin</a>
            <a href="admin-sign-up.php">Remove Admin</a>
            <a href="admin_logout.php?logout">Log Out</a>
        </div>

        <div id="main" class="">
            <h2>Text Messages</h2>
            <p>This page contains messages from KNYO contacts, to be sent to the official email by the admin. To forward to the official email, input the subject of the email then click Deliver button.</p>
            <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; More</span>
            
            <div class="container justify-content-center align-items-center text-center">
                <div class="row">
                    <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4"></div>
                    <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10">
                        <div class="card profile-card">
                            <div class="card-body">
                                <table style="width: 600px; border-color: #333;" border="2";>
                                    <tr>
                                        <th>Email</th>
                                        <th>Subject</th>
                                        <th>Message</th>
                                    </tr>

                                    <?php

                                    $retrivemessages = $conn->query("SELECT * FROM messages");

                                    while ($retrivedmessages = mysqli_fetch_array($retrivemessages))
                                    {
                                    echo '                                            
                                        <tr>
                                            <td>' .$retrivedmessages['m_sender_email']. '</td>
                                            <td>' .$retrivedmessages['m_subject']. '</td>
                                            <td>' .$retrivedmessages['m_message']. '</td>
                                        </tr>          
                                    ';
                                    }
                                    ?>
                                </table>
                            </div>

                            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="footer-subscribe" method="post">
                                <div class="input-group mb-3">
                                    <input type="text" name="delivertext" class="form-control border-secondary text-black bg-transparent" placeholder="Enter Subject">
                                    <div class="input-group-append">
                                        <button type="submit" class="btn btn-primary text-black" name="deliver-messages">Deliver</button>
                                    </div>
                                </div>
                            </form>

                        </div>
                    </div>
                </div> 
            </div>

            <?php
            if (isset($_POST['edit']))
            {
                $c_address = mysqli_real_escape_string($conn, $_POST['c_address']);
                $c_phone = mysqli_real_escape_string($conn, $_POST['c_phone']);

                
                $updateaddress = $conn->query("UPDATE contacts SET c_address='$c_address' WHERE id = 1 ");
                $updatephone = $conn->query("UPDATE contacts SET c_phone='$c_phone' WHERE id = 1 ");
                if ($updateaddress)
                {
                    ?>
                    <script>alert("Update successful");</script>
                    <?php
                }
                elseif ($updatephone)
                {
                    ?>
                    <script>alert("Update successful");</script>
                    <?php
                }                       
            }
            
            ?>
            <center>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" class="footer-subscribe" method="post">
                    <h3 style="">Edit contacts and address</h3>
                    <div class="input-group mb-6">
                        <input type="text" name="c_address" class="form-control border-secondary text-black bg-transparent" placeholder="Enter Address">
                        <input type="text" name="c_phone" class="form-control border-secondary text-black bg-transparent" placeholder="Enter Phone">
                        <div class="input-group-append">
                            <button type="submit" class="btn btn-primary text-black" name="edit">Effect</button>
                        </div>
                    </div>
                </form>
            </center>

<section id="footer-section">
    <footer class="footer-distributed bg-dark">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-4 col-sm-12 footer-col">
                    <p class="footer-orchestra-about">
                        <span class="footer-heading">About Us</span>
                        The Kenya National Youth Orchestra is a flagship program of the Art of Music Foundation alongside other programs such as The Ghetto Classics and The Safaricom Youth Orchestra. It is in partnership with various agencies which aid its management and promotes its great span both locally and internationally. KNYO currently accepts players profecient in a musical instrument of their liking, through annual auditions. The registered players meet for residentials periodically and practise together for a week or two in preparation for a concert. We believe that music is a tool for change and you and I are all it needs to make a positive difference.
                    </p>
                </div>
                <div class="col-md-4 col-sm-12 footer-col">

                    <p class="footer-orchestra-about">
                        <span class="footer-heading">Address and Contacts</span>
                            <i class="fa fa-map-marker"></i>
                            92 - Garden Estate,
                            along Garden Estate Road
                            Kenya, Nairobi 63542 &minus; 00619
                    </p>
                    <br><br>
                    <div>
                        <p class="footer-orchestra-about">
                        <i class="fa fa-phone"></i>
                        +254 723216197</p>
                    </div>
                    <br><br>
                    <ul class="footer_social_list">
                        <li class="footer_social_item"><a href="https://www.facebook.com/nyokenya/"><i class="fa fa-facebook-f"></i></a></li>
                        <li class="footer_social_item"><a href="https://twitter.com/nyo_ke"><i class="fa fa-twitter"></i></a></li>
                        <li class="footer_social_item"><a href="https://www.instagram.com/nyo_ke/"><i class="fa fa-instagram"></i></a></li>
                        <li class="footer_social_item"><a href="#"><i class="fa fa-google-plus"></i></a></li>
                    </ul>
                    <div class="col-md-12 col-xl-12 col-sm-10 offset-0.8 text-center copyright">
                        <p class="footer-orchestra-about">
                        Copyright &copy;<script>document.write(new Date().getFullYear());</script><br><br>The Kenya National Youth Orchestra<br><br>All rights reserved<br><br>A Julius and Everton creation</p>
                    </div>                  
                </div>
                <div class="col-md-3 col-sm-6 footer-col">

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

                    <h2 class="footer-heading mb-4">Subscribe for Newsletters</h2>
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" id="subs" class="footer-subscribe">
                        <div class="input-group mb-3">
                            <input type="email" name="sub_email" class="form-control border-secondary text-white bg-transparent" placeholder="Enter Email">
                            <div class="input-group-append">
                                <button type="submit" class="btn btn-primary text-black" name="subscribe">Send</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </footer>
</section>

</div>

        <script>
        function openNav() 
        {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.getElementById("subs").style.width = "80%";
            
        }

        function closeNav() 
        {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.getElementById("subs").style.width = "100%";
        }
        </script>
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
<script src="js/javascript.js"></script>

</body>
</html>