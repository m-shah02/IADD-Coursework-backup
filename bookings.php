<?php
require('db.php');
session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="Images\AstonLogoTriangle.png" />
  <link rel="stylesheet" href="events.css" />
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
  <title>Aston Events | Bookings</title>
</head>

<body>
  <!--The logo-->
  <img src="Images\AstonUniLogo.png" alt="Aston Logo" />
  <!--The navbar-->
  <div class="topnav">
    <a href="index-postlogin.php">Home</a>
    <a href="bookings.php">Booking</a>
    <a href="logout.php">Logout</a>
  </div>


  <!--The main contents of the page go here-->
  <main class="container">
    <h1>Booking</h1>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\Football_image.jpg" alt="Football Event">
        <!--Header-->
        <div class="card-header">Football 5-a-side tournament</div>
        <!--Content-->
        <div class="card-body">Category: Sports</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/3</div>
        <!--Button for Booking-->
        <button type="submit" name="Football" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\Movie_image.jpg" alt="Movie Night Event">
        <!--Header-->
        <div class="card-header">Movie Night</div>
        <!--Content-->
        <div class="card-body">Category: Culture</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/5</div>
        <!--Button for Booking-->
        <button type="submit" name="Movie" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\Cricket_image.jpg" alt="Cricket Event">
        <!--Header-->
        <div class="card-header">Cricket</div>
        <!--Content-->
        <div class="card-body">Category: Sports</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/6</div>
        <!--Button for Booking-->
        <button type="submit" name="Cricket" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\Weightlifting_image.jpg" alt="Weightlifting Event">
        <!--Header-->
        <div class="card-header">Weightlifting</div>
        <!--Content-->
        <div class="card-body">Category: Sports</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/10</div>
        <!--Button for Booking-->
        <button type="submit" name="Weights" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\Cooking_image.jpg" alt="Cooking Event">
        <!--Header-->
        <div class="card-header">Cooking</div>
        <!--Content-->
        <div class="card-body">Category: Other</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/12</div>
        <!--Button for Booking-->
        <button type="submit" name="Cook" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\Eid_image.jpg" alt="Eid Event">
        <!--Header-->
        <div class="card-header">Eid Ul Fitr</div>
        <!--Content-->
        <div class="card-body">Category: Culture</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/13</div>
        <!--Button for Booking-->
        <button type="submit" name="Eid" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\Museum_image.jpg" alt="Museum Event">
        <!--Header-->
        <div class="card-header">Visit the museum</div>
        <!--Content-->
        <div class="card-body">Category: Culture</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/15</div>
        <!--Button for Booking-->
        <button type="submit" name="Museum" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\ArtGallery_image.jpg" alt="Art Gallery Event">
        <!--Header-->
        <div class="card-header">Visit the local Art Gallery</div>
        <!--Content-->
        <div class="card-body">Category: Culture</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/20</div>
        <!--Button for Booking-->
        <button type="submit" name="Art" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\Music_image.jpg" alt="Music Event">
        <!--Header-->
        <div class="card-header">Music Festival</div>
        <!--Content-->
        <div class="card-body">Category: Other</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/23</div>
        <!--Button for Booking-->
        <button type="submit" name="Music" class="btn btn-info btn-lg">Book now</button>
      </div>

      <!--This is what the cards look like for each event-->
      <div class="card">
        <!--The image-->
        <img class="card-img-top" src="Images\WiiSports_image.jpg" alt="Wii Sports Event">
        <!--Header-->
        <div class="card-header">Wii Sports Competition</div>
        <!--Content-->
        <div class="card-body">Category: Other</div>
        <!--Footer-->
        <div class="card-footer">Date: 2021/5/30</div>
        <!--Button for Booking-->
        <button type="submit" name="Wii" class="btn btn-info btn-lg">Book now</button>
      </div>
    </form>

    <!-- This is for the booking to work -->
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
      $username = $_SESSION['id'];
      $event = null;
      // If they booked the football event
      if (array_key_exists('Football', $_POST)) {
        $event = 1;
      }
      // If they booked the movie night event
      if (array_key_exists('Movie', $_POST)) {
        $event = 2;
      }
      // If they booked the cricket event
      if (array_key_exists('Cricket', $_POST)) {
        $event = 3;
      }
      // If they booked the weightlifting event
      if (array_key_exists('Weights', $_POST)) {
        $event = 4;
      }
      // If they booked the cooking event
      if (array_key_exists('Cook', $_POST)) {
        $event = 5;
      }
      // If they booked the Eid event
      if (array_key_exists('Eid', $_POST)) {
        $event = 6;
      }
      // If they booked the museum event
      if (array_key_exists('Museum', $_POST)) {
        $event = 7;
      }
      // If they booked the art event
      if (array_key_exists('Art', $_POST)) {
        $event = 8;
      }
      // If they booked the music event
      if (array_key_exists('Music', $_POST)) {
        $event = 9;
      }
      // If they booked the wii sports event
      if (array_key_exists('Wii', $_POST)) {
        $event = 10;
      }
      // This prevents double booking
      if (eventCheck($con, $username, $event) === false) {
        $sql = "INSERT INTO eventattendees (UserID,EventID) VALUES ('$username', '$event')";
        if ($con->query($sql) === TRUE) {
          // Event has not been booked
          echo "<script type='text/javascript'>alert('Event booked');</script>";
        } else {
          // Error message
          $con->error;
        }
      } else {
        // Event is booked already
        echo "<script type='text/javascript'>alert('Event already book');</script>";
      }
    }
    // This function checks to see if the event has been booked before
    function eventCheck($con, $username, $event)
    {
      $sql = "SELECT * FROM eventattendees WHERE UserID ='$username' AND EventID = '$event' ";


      $result = $con->query($sql);
      if ($result->num_rows > 0) {
        return true;
      } else {
        return false;
      }
    }

    ?>
  </main>
</body>

</html>