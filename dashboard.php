<?php
//include auth_session.php file on all user panel pages
include("auth_session.php");
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <title>Aston Events | Dashboard - Client area</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="php.css" />
</head>

<body>
  <!--The logo-->
  <img src="Images\AstonUniLogo.png" alt="Aston Logo">
  <!--The navbar-->
  <div class="topnav">
    <a href="index-postlogin.php">Home</a>
    <a href="bookings.php">Bookings</a>
    <a href="logout.php">Logout</a>
  </div>

  <!--This will display the moment you are logged in-->
  <div class="form">
    <p>Hey, <?php echo $_SESSION['username']; ?>!</p>
    <p>You are now in the user dashboard page.</p>
    <p><a href="logout.php">Logout</a></p>
  </div>
</body>

</html>