<?php
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="Images\AstonLogoTriangle.png" />
  <link rel="stylesheet" href="index.css">
  <title>Aston Events</title>
</head>

<body>

  <body>
    <!--The logo-->
    <img src="Images\AstonUniLogo.png" alt="Aston Logo">
    <!--The navbar-->
    <div class="topnav">
      <a href="index-postlogin.php">Home</a>
      <a href="bookings.php">Bookings</a>
      <a href="logout.php">Logout</a>
    </div>

    <!--The main contents of the page go here-->
    <main class="container">
      <div class="bg-light p-5 rounded">
        <img src="Images\Aston_Uni_Campus2.jpg" alt="Aston University Campus">
        <h1>Welcome to the Aston Events website</h1>
        <h2>What is Aston Events?</h2>
        <p>Aston Events is a website where you can book any events that you're interested in.
          There are a range of options with events ranging from sports, culture and other.</p>
        <br>
        <p>
          Please feel free to browse out available
          <a href="events-postlogin.php">events</a>.
        </p>
        <img src="Images\Aston_Uni_Campus.jpg" alt="Aston University Campus">

      </div>
    </main>

  </body>

</html>