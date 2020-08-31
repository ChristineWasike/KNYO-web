<?php
include "connection.php";
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>KNYO | Item Arquire </title>

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
    <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
    <script src="https://kit.fontawesome.com/f318d19831.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="styles.css">

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>	
</head>
<body>
<?php

if (isset($_POST['item-arquire']))
{
    $i_item_name = mysqli_real_escape_string($conn, $_POST['i_item_name']);
    $i_item_price = mysqli_real_escape_string($conn, $_POST['i_item_price']);
    $i_buyer_name = mysqli_real_escape_string($conn, $_POST['i_buyer_name']);
    $i_buyer_telephone = mysqli_real_escape_string($conn, $_POST['i_buyer_telephone']);

    $arquireitem = $conn->query("INSERT INTO itemarquire (i_item_name, i_item_price, i_buyer_name, i_buyer_telephone) VALUES('$i_item_name', '$i_item_price', '$i_buyer_name', '$i_buyer_telephone')");
    if ($arquireitem)
    {
        ?>
        <script>alert("Thank you, please await communication from the admin as soon as possible...");</script>
        <?php
    }
    else
    {
        ?>
        <script>alert("Please resubmit the form or contact the admin for inconveniences...");</script>
        <?php
    }
}
?>

<!------------------------------------------------------Item-Arquire Section-------------------------------------------------------->

<section class="sign-in-section" id="sign-in-section">
    <div class="container data-container sign-data-container" id="container">
        <div class="form-container sign-in-container">
            <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
                <h1>Please Input Purchase Details</h1>
                <input type="text" name="i_item_name" placeholder="Item Name" />
                <input type="number" name="i_item_price" placeholder="Price" />
                <input type="text" name="i_buyer_name" placeholder="Buyer Name" />
                <input type="text" name="i_buyer_telephone" placeholder="Telephone" />
                <button type="submit" class="btn btn-primary" name="item-arquire">Submit</button>
            </form>
        </div>
        <div class="overlay-container">
            <div class="overlay">
                <div class="overlay-panel overlay-right">
                    <h1>Thank You for Submitting</h1>
                    <p>We shall contact you as soon as possible after you submit this form...</p>
                    <p><a href="store.php" class="btn btn-primary mr-2 mb-2">Back</a></p>
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

<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>

</body>
</html>