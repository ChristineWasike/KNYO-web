<?php
include "connection.php";
session_start();

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
    $s_avator = mysqli_real_escape_string($conn, $_POST['s_avator']);
    
    $insert = "INSERT INTO supporters(s_name, s_avator) VALUES ('$s_name', '$s_avator')";
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

<?php
if (isset($_POST['add-team']))
{
    $t_name = mysqli_real_escape_string($conn, $_POST['t_name']);
    $t_portfolio = mysqli_real_escape_string($conn, $_POST['t_portfolio']);
    $t_category = mysqli_real_escape_string($conn, $_POST['t_category']);
    $t_avator = mysqli_real_escape_string($conn, $_POST['t_avator']);

    $addteam = $conn->query("INSERT INTO team(t_name, t_portfolio, t_category, t_avator) VALUES('$t_name', '$t_portfolio', '$t_category', '$t_avator')");

    if($addteam)
    {
        ?>
        <script>alert"Team member added succesfully!";</script>
        <?php
    }
    else
    {
        ?>
        <script>alert"Team member was not added please try again or contact technician";</script>
        <?php
    }
}

if (isset($_POST['remove-team']))
{
    $t_name = mysqli_real_escape_string($conn, $_POST['t_name']);

    $removeteam = $conn->query("DELETE FROM team where t_name = '$t_name'");

    if($removeteam)
    {
        ?>
        <script>alert"Team member deleted succesfully!";</script>
        <?php
    }
    else
    {
        ?>
        <script>alert"Team member was not deleted please try again or contact technician";</script>
        <?php
    }
}

if(isset($_POST['picture-save']))
{
    $g_photo = mysqli_real_escape_string($conn, $_POST['g_photo']);

    $insertphoto = $conn->query("INSERT INTO gallery(g_photo) VALUES ('$g_photo')");

    if ($insertphoto)
    {
        ?>
        <script>alert("Photo added successfully! ");</script>
        <?php
    }
    else
    {
        ?>
        <script>alert("Photo was not added! ");</script>
        <?php
    }
}
?>

<?php

if(isset($_POST['video-save']))
{
    $g_video = mysqli_real_escape_string($conn, $_POST['g_video']);

    $insertvideo = $conn->query("INSERT INTO videos(g_video) VALUES ('$g_video')");

    if ($insertvideo)
    {
        ?>
        <script>alert("Video added successfully! ");</script>
        <?php
    }
    else
    {
        ?>
        <script>alert("Video was not added! ");</script>
        <?php
    }
}

if (isset($_POST['post-blog']))
{
    $b_author_name = mysqli_real_escape_string($conn, $_POST['b_author_name']);
    $b_date = mysqli_real_escape_string($conn, $_POST['b_date']);
    $b_avator = mysqli_real_escape_string($conn, $_POST['b_avator']);
    $b_title = mysqli_real_escape_string($conn, $_POST['b_title']);
    $b_blog = mysqli_real_escape_string($conn, $_POST['b_blog']);
    

    $postblog = $conn->query("INSERT INTO blogs (b_author_name, b_date, b_avator, b_title, b_blog) VALUES('$b_author_name', '$b_date', '$b_avator', '$b_title', '$b_blog')");

    if ($postblog)
    {
        ?>
            <script>alert("Blog posted successfully");</script>
        <?php
    }
    else
    {
        ?>
            <script>alert("Blog was not added");</script>
        <?php
    }
}

if (isset($_POST['remove-blog']))
{
    $b_delete_title = mysqli_real_escape_string($conn, $_POST['b_delete_title']);    

    $removeblog = $conn->query("DELETE FROM blogs WHERE b_title='$b_delete_title'");

    if ($removeblog)
    {
        ?>
            <script>alert("Blog deleted successfully");</script>
        <?php
    }
    else
    {
        ?>
            <script>alert("Blog was not deleted");</script>
        <?php
    }
}

if (isset($_POST['add-event']))
{
    $e_name = mysqli_real_escape_string($conn, $_POST['e_name']);
    $e_date = mysqli_real_escape_string($conn, $_POST['e_date']);
    $e_time = mysqli_real_escape_string($conn, $_POST['e_time']);
    $e_venue = mysqli_real_escape_string($conn, $_POST['e_venue']);
    $e_short_des = mysqli_real_escape_string($conn, $_POST['e_short_des']);
    $e_description = mysqli_real_escape_string($conn, $_POST['e_description']);
    $e_avator = mysqli_real_escape_string($conn, $_POST['e_avator']);

    $insertevent = $conn->query("INSERT INTO events (e_name, e_date, e_time, e_venue, e_short_des, e_description, e_avator) VALUES('$e_name','$e_date', '$e_time', '$e_venue', '$e_short_des', '$e_description', '$e_avator')");

    if ($insertevent)
    {
        ?>
            <script>alert("Event added successfully!");</script>
        <?php
    }
    else
    {
        ?>
            <script>alert("Event was not added!");</script>
        <?php  
    }
}

if (isset($_POST['remove-event']))
{
    $e_delete_name = mysqli_real_escape_string($conn, $_POST['e_delete_name']);

    $deleteevent = $conn->query("DELETE FROM events WHERE e_name='$e_delete_name'");

    if ($deleteevent)
    {
        ?>
            <script>alert("Event delete successfully!");</script>
        <?php
    }
    else
    {
        ?>
            <script>alert("Event was not deleted!");</script>
        <?php  
    }
}
if (isset($_POST['add-item']))
{
    $st_item_name = mysqli_real_escape_string($conn, $_POST['st_item_name']);
    $st_item_price = mysqli_real_escape_string($conn, $_POST['st_item_price']);
    $st_item_description = mysqli_real_escape_string($conn, $_POST['st_item_description']);
    $st_item_avator = mysqli_real_escape_string($conn, $_POST['st_item_avator']);

    $insertitem = $conn->query("INSERT INTO store (st_item_name, st_item_price, st_item_description,st_item_avator) VALUES('$st_item_name', '$st_item_price', '$st_item_description', '$st_item_avator')");

    if ($insertitem)
    {
        ?>
            <script>alert("Item added successfully!");</script>
        <?php
    }
    else
    {
        ?>
            <script>alert("Item was not added!");</script>
        <?php  
    }
}

if (isset($_POST['remove-item']))
{
    $st_delete_item_name = mysqli_real_escape_string($conn, $_POST['st_delete_item_name']);

    $deleteitem = $conn->query("DELETE FROM store WHERE st_item_name='$st_delete_item_name'");

    if ($deleteitem)
    {
        ?>
            <script>alert("Item delete successfully!");</script>
        <?php
    }
    else
    {
        ?>
            <script>alert("Item was not delete!");</script>
        <?php  
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin-Dashboard | Home </title>

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

    <script>
        function openNav() {
            document.getElementById("mySidenav").style.width = "250px";
            document.getElementById("main").style.marginLeft = "250px";
            document.body.style.backgroundColor = "rgba(0,0,0,0.4)";
        }

        function closeNav() {
            document.getElementById("mySidenav").style.width = "0";
            document.getElementById("main").style.marginLeft= "0";
            document.body.style.backgroundColor = "white";
        }
    </script>

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f318d19831.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>
</head>
<body>

<!---------------------------------------------------------Top-Navigation------------------------------------------------------>

<section class="navigation" id="navigation">
    <div class="container-fluid">
        <div class="row">
            <nav class="navbar navbar-expand-md fixed-top bg-black" id="nav">
                <h1 class="mb-0 site-logo"><a href="#" class="h3 mb-0 top-text"><img src="images/clef.jpg" class="top-logo"> NYOKenya.</a></h1>
                    <div class="collapse navbar-collapse justify-content-center text-white" id="collapsibleNavbar">
                        <ul class="navbar-nav">
                            <li class="nav-item">
                                <a href="#bio-section" class="nav-link"><i class="fa fa-user fa-fw" aria-hidden="true"></i>Bio</a>
                            </li>
                            <li class="nav-item">
                                <a href="#team-section" class="nav-link"><i class="fa fa-users fa-fw" aria-hidden="true"></i>Team</a>
                            </li>
                            <li class="nav-item">
                                <a href="#gallery-section" class="nav-link"><i class="fa fa-camera fa-fw" aria-hidden="true"></i>Gallery</a>
                            </li>
                            <li class="nav-item">
                                <a href="#events-section" class="nav-link"><i class="fa fa-calendar fa-fw" aria-hidden="true"></i>Events</a>
                            </li>
                            <li class="nav-item">
                                <a href="#store-section" class="nav-link"><i class="fa fa-cart-plus fa-fw" aria-hidden="true"></i>Store</a>
                            </li>
                            <li class="nav-item">
                                <a href="#blog-section" class="nav-link"><i class="fa fa-rss fa-fw" aria-hidden="true"></i>Blogs</a>
                            </li>
                            <li class="nav-item">
                                <a href="#faq-section" class="nav-link"><i class="fa fa-question-circle-o fa-fw" aria-hidden="true"></i>FAQs</a>
                            </li>
                            <li class="nav-item">
                                <a href="#messages-section" class="nav-link"><i class="fa fa-envelope fa-fw" aria-hidden="true"></i>Messages</a>
                            </li>
                            <li class="nav-item">
                                <a href="#subscribers-section" class="nav-link"><i class="fa fa-book fa-fw" aria-hidden="true"></i>Subscribers</a>
                            </li>
                            <li class="nav-item">
                                <a href="#applications-section" class="nav-link"><i class="fa fa-pencil-square-o fa-fw" aria-hidden="true"></i>Applications</a>
                            </li>
                        </ul>
                    </div>
                    <span class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar" aria-expanded="false" aria-hidden="true">
                        <i class="fa fa-bars"></i>
                    </span>
                </nav>  
            </div>
        </div>
    </div>
<section>

<div id="mySidenav" class="sidenav">
    <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>
    <?php echo '<img src="images/' .$_SESSION['Avator'].'" alt="Image" class="img-fluid">'; ?>
    <a href="#">Home</a>
    <a href="admin-sign-up.php">Add Admin</a>
    <a href="admin-remove.php">Remove Admin</a>
    <a href="admin_logout.php">Log Out</a>
</div>

<div id="main">
    <span style="font-size:30px;cursor:pointer" onclick="openNav()">&#9776; MORE</span>
    <section class="site-section" id="admin-section">
        <div class="container-fluid">
            <div class="row site-section">
                <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                    <h2 class="section-title">PROFILE</h2>
                    <hr>
                </div>
            </div>
            <div class="row padding offset-2">
                <div class="col-sm-8 col-md-6 col-lg-4">
                    <div class="bio">
                        <?php echo '<img src="images/' .$_SESSION['Avator'].'" alt="Image" class="img-fluid"  style="width:600px; height:350px; border-radius: 10px;">'; ?>                     
                    </div>              
                </div>
                <div class="col-lg-1"></div>
                <div class="col-sm-8 col-md-6 col-lg-5">
                    <div class=""><br><br>
                        <?php echo '<h3>ID ' .$_SESSION['UserID']. '</h3>';?>
                    </div>
                    <div class="admin-section-item"><br><br>
                        <?php echo '<h3>' .$_SESSION['UserName']. '</h3>';?>
                    </div>
                    <div class="admin-section-item"><br><br>
                        <?php echo '<h3>' .$_SESSION['UserTel']. '</h3>';?>
                    </div>
                    <div class="admin-section-item"><br><br>
                        <?php echo '<h3>' .$_SESSION['UserEmail']. '</h3>';?>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="messages-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">ADMIN</h2>
                <hr>
            </div>
        </div>
        <div class="container justify-content-center align-items-center text-center">
            <div class="row offset-1 justify-content-center align-items-center text-center">
                <div class="col-sm-10 col-md-10 col-lg-10 col-xl-10">
                    <div class="card profile-card">
                        <div class="card-body">
                            <table style="width: 600px; border-color: #333;" border="2";>
                                <tr>
                                    <th>Admin ID</th>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th>Telephone</th>
                                </tr>

                                <?php

                                $selectadmin = $conn->query("SELECT * FROM admin");

                                while ($fetchadmin = mysqli_fetch_array($selectadmin))
                                {
                                echo '                                            
                                    <tr>
                                        <td>' .$fetchadmin['id']. '</td>
                                        <td>' .$fetchadmin['u_name']. '</td>
                                        <td>' .$fetchadmin['u_email']. '</td>
                                        <td>' .$fetchadmin['u_telephone']. '</td>
                                    </tr>          
                                ';
                                }
                                ?>
                            </table>
                        </div>
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <section class="site-section" id="bio-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">ABOUT KNYO</h2>
                <hr>
            </div>
        </div>
            <div class="container data-container forms-data-container" id="container">
        <div class="form-container sign-in-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h1>Edit KNYO Bio</h1>
                <input type="text" name="b_about" placeholder="About" />
                <input type="text" name="b_mission" placeholder="Mission" />
                <input type="file" name="b_logo" placeholder="Logo" />
                <input type="submit" class="btn btn-primary" name="bio-save">
            </form>
        </div>
        <div class="overlay-container form-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                        <h1>Supporters</h1>
                        <input type="text" name="s_name" placeholder="Name" />
                        <input type="file" name="s_avator" placeholder="Avator" />
                        <input type="submit" class="btn btn-primary" name="supporters-save">
                    </form>   
                </div>
            </div>
        </div>
    </div>
    </section>

    <section class="site-section" id="team-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">TEAM</h2>
                <hr>
            </div>
        </div>
        <div class="container data-container forms-data-container" id="container">
            <div class="form-container sign-in-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <h1>Add Team Member</h1>
                    <input type="text" name="t_name" placeholder="Name" />
                    <input type="text" name="t_portfolio" placeholder="Portfolio" />
                    <input type="text" name="t_category" class="bio-input" placeholder="management or orchestra section" />
                    <input type="file" name="t_avator" placeholder="Image" />
                    <input type="submit" class="btn btn-primary" name="add-team">
                </form>
            </div>
            <div class="overlay-container form-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <h1>Remove Team Member?</h1>
                            <input type="text" name="t_name" placeholder="Name" />
                            <input type="submit" class="btn btn-primary" name="remove-team">
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="gallery-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">GALLERY</h2>
                <hr>
            </div>
        </div>
        <div class="container data-container forms-data-container" id="container">
            <div class="form-container sign-in-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <h1>Add Photo</h1>
                    <input type="file" name="g_photo" placeholder="Image" />
                    <input type="submit" class="btn btn-primary" name="picture-save">
                </form>
            </div>
            <div class="overlay-container form-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <h1>Add Video Clip</h1>
                            <input type="file" name="g_video" placeholder="Image" />
                            <input type="submit" class="btn btn-primary" name="video-save">
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="events-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">EVENTS</h2>
                <hr>
            </div>
        </div>
        <div class="card profile-card">
            <div class="card-body">
                <center>
                    <h2 class="section-title">EVENT ATTENDERS</h2>
                <hr>
                <table style="width: 600px; border-color: #333;" border="2";>
                    <tr>
                        <th>Event</th>
                        <th>Name</th>
                        <th>Email</th>
                        <th>Telephone</th>
                    </tr>

                    <?php
                    $selectdata = $conn->query("SELECT * FROM eventbookings LIMIT 20");

                        while ($fetchdata = mysqli_fetch_array($selectdata))
                        {
                        echo '
                            <tr>
                                <td>' .$fetchdata['ea_event_name']. '</td>
                                <td>' .$fetchdata['ea_audince_name']. '</td>
                                <td>' .$fetchdata['ea_audience_email']. '</td>
                                <td>' .$fetchdata['ea_audience_phone']. '</td>
                            </tr>         
                        ';
                        }
                    ?>
                </table>
            </center>
        </div>
        <div class="container data-container forms-data-container" id="container">
            <div class="form-container sign-in-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <input type="text" name="e_name" placeholder="Event Name" />
                    <input type="date" name="e_date" placeholder="Event Date" />
                    <input type="text" name="e_time" placeholder="Event Time" />
                    <input type="text" name="e_venue" placeholder="Event Venue" />
                    <input type="text" name="e_short_des" placeholder="Short Description" />
                    <input type="text" name="e_description" placeholder="Description" />
                    <input type="file" name="e_avator" placeholder="Image" />
                    <input type="submit" class="btn btn-primary" name="add-event">
                </form>
            </div>
            <div class="overlay-container form-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <h1>Remove Event</h1>
                            <input type="text" name="e_delete_name" placeholder="Event Name" />
                            <input type="submit" class="btn btn-primary" name="remove-event">
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="store-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">STORE</h2>
                <hr>
            </div>
        </div>
        <div class="card profile-card">
            <div class="card-body">
                <center>
                    <h2 class="section-title">PURCHASERS</h2>
                <hr>
                <table style="width: 600px; border-color: #333;" border="2";>
                    <tr>
                        <th>Item</th>
                        <th>Price</th>
                        <th>Buyer</th>
                        <th>Telephone</th>
                    </tr>

                    <?php
                    $selectdata = $conn->query("SELECT * FROM itemarquire");

                        while ($fetchdata = mysqli_fetch_array($selectdata))
                        {
                        echo '
                            <tr>
                                <td>' .$fetchdata['id']. '</td>
                                <td>' .$fetchdata['i_item_name']. '</td>
                                <td>' .$fetchdata['i_buyer_name']. '</td>
                                <td>' .$fetchdata['i_buyer_telephone']. '</td>
                            </tr>         
                        ';
                        }
                    ?>
                </table>
            </center>
        </div>
        <div class="container data-container forms-data-container" id="container">
            <div class="form-container sign-in-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <h1>Add Item to Store</h1>
                    <input type="text" name="st_item_name" placeholder="Item Name" />
                    <input type="text" name="st_item_price" placeholder="Price" />
                    <input type="text" name="st_item_description" placeholder="Description" />
                    <input type="file" name="st_item_avator" placeholder="Image" />
                    <input type="submit" class="btn btn-primary" name="add-item">
                </form>
            </div>
            <div class="overlay-container form-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <h1>Remove Item from Store</h1>
                            <input type="text" name="st_delete_item_name" placeholder="Item Name" />
                            <input type="submit" class="btn btn-primary" name="remove-item">
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="blog-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">BLOG POSTS</h2>
                <hr>
            </div>
        </div>
        <div class="container data-container forms-data-container" id="container">
            <div class="form-container sign-in-container">
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                    <h1>Add Blog Post</h1>
                    <input type="text" name="b_author_name" placeholder="Author Name" />
                    <input type="date" name="b_date" placeholder="Date" />
                    <input type="file" name="b_avator" placeholder="Avator" />
                    <input type="text" name="b_title" placeholder="Title" />
                    <input type="text" name="b_blog" placeholder="Blog" />
                    <input type="submit" class="btn btn-primary" name="post-blog">
                </form>
            </div>
            <div class="overlay-container form-container">
                <div class="overlay">
                    <div class="overlay-panel overlay-right">
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                            <h1>Remove Blog Post</h1>
                            <input type="text" name="b_delete_title" placeholder="Title" />
                            <input type="submit" class="btn btn-primary" name="remove-blog">
                        </form>   
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section  class="site-section" id="faq-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">FREQUENTLY ASKED QUESTIONS</h2>
                <hr>
            </div>
        </div>
        <div class="container justify-content-center align-items-center text-center">
            <div class="row offset-1">
                <div class="col-sm-10 col-md-10 col-lg-11 col-xl-11">
                    <div class="card profile-card">
                        <div class="card-body">
                            <table style="width: 800px; border-color: #333;" border="2" class="responsive";>
                                <tr>
                                    <th>Quiz Id</th>
                                    <th>Quiz</th>
                                    <th>Answer</th>
                                </tr>

                                <?php

                                $retrivequiz = $conn->query("SELECT * FROM faq LIMIT 15");

                               while ($retrivedquiz = mysqli_fetch_array($retrivequiz))
                                {
                                echo '
                                    
                                        
                                        <tr>
                                            <td>' .$retrivedquiz['id']. '</td>
                                            <td>' .$retrivedquiz['f_quiz']. '</td>
                                            <td>' .$retrivedquiz['f_answer']. '</td>
                                        </tr>          
                                ';
                                }
                                ?>
                            </table>
                        </div>

                        <?php
                        if (isset($_POST['answer-quiz']))
                        {
                        $f_id = mysqli_real_escape_string($conn, $_POST['f_id']);
                        $f_answer = mysqli_real_escape_string($conn, $_POST['f_answer']);

                        $answerquiz = $conn->query("UPDATE faq SET f_answer='$f_answer' WHERE id='$f_id'");

                        if($answerquiz)
                        {
                            ?>
                                <script>alert("Answer submitted successfully");</script>
                            <?php
                        }
                        else
                        {
                            ?>
                                <script>alert("Answer was not submitted. Please try again or contact technician");</script>
                            <?php
                        }

                        }

                        ?>
                        <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post" class="footer-subscribe">
                                <input type="text" name="f_id" class="form-control border-secondary text-black bg-transparent" placeholder="Enter Id to answer" style="width: 50%"><br><br>
                            <div class="input-group mb-3">
                                <input type="text" name="f_answer" class="form-control border-secondary text-black bg-transparent" placeholder="Enter answer" style="width: 50%">
                                <div class="input-group-append">
                                    <input type="submit" class="btn btn-primary text-black" name="answer-quiz">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="site-section" id="messages-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">MESSAGES</h2>
                <hr>
            </div>
        </div>
        <div class="container justify-content-center align-items-center text-center">
            <div class="row offset-1 justify-content-center align-items-center text-center">
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

                                $retrivemessages = $conn->query("SELECT * FROM messages LIMIT 20");

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
                    </div>
                </div>
            </div> 
        </div>
    </section>

    <section class="site-section" id="subscribers-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">SUBSCRIBERS</h2>
                <hr>
            </div>
        </div>
        <div class="container justify-content-center align-items-center text-center">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4"></div>
                <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4">
                    <div class="card profile-card">
                        <div class="card-body">
                            <div class="container">
                              <h2>Subscribers</h2>
                              <table class="table table-dark table-striped">
                                <tbody>
                                    
                                        <?php
                                            $selectsubs = $conn->query("SELECT * FROM subscribers");
                                            
                                        
                                            while($fetchsubs = mysqli_fetch_array($selectsubs))
                                            {
                                                echo 
                                                '<tr><td>' .$fetchsubs['sub_email']. '</td></tr>';
                                                   
                                            }
                                        ?>
                                    
                                </tbody>
                              </table>
                            </div>                                  
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4"></div>
            </div> 
        </div>
    </section>

    <section class="site-section" id="applications-section">
        <div class="row site-section">
            <div class="col-12 text-center" data-aos="fade-up" data-aos-delay="">
                <h2 class="section-title">APPLICATIONS</h2>
                <hr>
            </div>
        </div>
        <div class="container justify-content-center align-items-center text-center">
            <div class="row">
                <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4"></div>
                <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4">
                    <div class="card profile-card">
                        <div class="card-body">
                            <div class="container">
                              <h2>Applicants</h2>
                              <table class="table table-dark table-striped">
                                <tbody>
                                    
                                        <?php
                                            $selectapplications = $conn->query("SELECT * FROM applications");
                                            
                                            while($fetchapplications = mysqli_fetch_array($selectapplications))
                                            {
                                                echo 
                                                '<tr><td>' .$fetchapplications['apply_email']. '</td></tr>';
                                                   
                                            }
                                        ?>
                                    
                                </tbody>
                              </table>
                            </div>                                  
                        </div>
                    </div>
                </div>
                <div class="col-sm-8 col-md-8 col-lg-4 col-xl-4"></div>
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
                            <a href="#" class="nav-link">Admin</a>
                        </li>
                        <li class="nav-item">
                            <a href="#" class="nav-link">Support KNYO</a>
                        </li>
                        <li class="nav-item">
                            <a href="#faq-section" class="nav-link">FAQ's</a>
                        </li>
                        <li class="nav-item">
                            <a href="bio-section" class="nav-link">About</a>
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
</div>

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