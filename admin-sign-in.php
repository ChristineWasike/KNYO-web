<?php
include "connection.php";
session_start();
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<title>Admin | Sign In  </title>

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

    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f318d19831.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	
</head>
<body style="background: #333333;">

<?php

if (isset($_POST['admin_sign_in']))
{
    $u_email = mysqli_real_escape_string($conn, $_POST['u_email']);
    $u_password = mysqli_real_escape_string($conn, $_POST['u_password']);
    
    $sql = $conn->query("SELECT * FROM admin WHERE u_email='$u_email'");

    if ($sql->num_rows > 0)
    {
        $data = mysqli_fetch_array($sql);
        if (password_verify($u_password, $data['u_pass']))
        {
            $_SESSION['UserID'] = $data['id'];
            $_SESSION['UserName'] = $data['u_name'];
            $_SESSION['UserEmail'] = $data['u_email'];
            $_SESSION['UserTel'] = $data['u_telephone'];
            $_SESSION['Avator'] = $data['u_avator'];
             
            header("location:admin-dash.php");
        }
        else
        {
            ?>
                <script>alert("Log in failed, wrong password");</script>
            <?php
            header("location:admin_sign_in.php");
        }
    }
    else
    {
        ?>
            <script>alert("Email is not registered please register");</script>
        <?php
    }
}
?>

<!----------------------------------------------------Sign-in-Form Section---------------------------------------------------->
<section class="sign-in-section" id="sign-in-section">
    <div class="container data-container sign-data-container" id="container">
        <div class="form-container sign-in-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h1>Sign in</h1>
                <input type="email" name="u_email" placeholder="Email" />
                <input type="password" name="u_password" placeholder="Password" />
                <a href="#">Forgot your password?</a>
                <button type="submit" class="btn btn-primary" name="admin_sign_in">Sign In</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Hello, Admin!</h1>
                    <p>Please sign in with your account credentials...</p>
                    <p><a href="index.php" class="btn btn-primary mr-2 mb-2">Back</a></p>
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
<script src="js/jquery.fancybox.min.js"></script>
<script src="js/jquery.sticky.js"></script>
<script src="js/isotope.pkgd.min.js"></script>
<script src="js/main.js"></script>

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>