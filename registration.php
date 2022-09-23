<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <link rel="icon" href="Images\AstonLogoTriangle.png" />
  <title>Aston Events | Registration</title>
  <link rel="stylesheet" href="style.css" />
  <link rel="stylesheet" href="php.css" />
</head>

<body>
  <!--The logo-->
  <img src="Images\AstonUniLogo.png" alt="Aston Logo">
  <!--The navbar-->
  <div class="topnav">
    <a href="index.php">Home</a>
    <a href="events.php">Events</a>
    <a href="login.php">Login</a>
    <a href="registration.php">Register</a>
  </div>
  <?php
  require('db.php');
  //if (preg_match('|@aston.ac.uk$|', $registrantMailAddress;
  //{
  // // continue with registration
  //}

  // When form submitted, insert values into the database.
  if (isset($_REQUEST['username'])) {
    // removes backslashes
    $username = stripslashes($_REQUEST['username']);
    //escapes special characters in a string
    $username = mysqli_real_escape_string($con, $username);
    $email    = stripslashes($_REQUEST['email']);
    $email    = mysqli_real_escape_string($con, $email);
    $password = stripslashes($_REQUEST['password']);
    $password = mysqli_real_escape_string($con, $password);
    $create_datetime = date("Y-m-d H:i:s");
    $query    = "INSERT into `users` (username, password, email, create_datetime)
                     VALUES ('$username', '" . md5($password) . "', '$email', '$create_datetime')";
    $result   = mysqli_query($con, $query);
    if ($result) {
      //If you register successfully this message appears.
      echo "<div class='form'>
                  <h3>You are registered successfully.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a></p>
                  </div>";
    } else {
      //If the conditions for registering aren't met, this message is displayed.
      echo "<div class='form'>
                  <h3>Required fields are missing.</h3><br/>
                  <p class='link'>Click here to <a href='registration.php'>registration</a> again.</p>
                  </div>";
    }
  } else {
  ?>
    <!--The form to register is here-->
    <form class="form" action="" method="post">
      <h1 class="login-title">Registration</h1>
      <!--Username field-->
      <input type="text" class="login-input" name="username" placeholder="Username" required />
      <!--Email field-->
      <input type="text" class="login-input" name="email" placeholder="Email@aston.ac.uk">
      <!--Password field-->
      <input type="password" class="login-input" name="password" placeholder="Password">
      <!--Register button-->
      <input type="submit" name="submit" value="Register" class="login-button">
      <p class="link"><a href="login.php">Click to Login</a></p>
    </form>
  <?php
  }
  ?>
  <?php
  // Error messages
  if (isset($_GET["error"])) {
    if ($_GET["error"] == "emptyinput") {
      echo "<p>Fill in all fields!</p>";
    } else if ($_GET["error"] == "invaliduid") {
      echo "<p>Choose a proper username!</p>";
    } else if ($_GET["error"] == "invalidemail") {
      echo "<p>Choose a proper email!</p>";
    } else if ($_GET["error"] == "passwordsdontmatch") {
      echo "<p>Passwords doesn't match!</p>";
    } else if ($_GET["error"] == "stmtfailed") {
      echo "<p>Something went wrong!</p>";
    } else if ($_GET["error"] == "usernametaken") {
      echo "<p>Username already taken!</p>";
    } else if ($_GET["error"] == "none") {
      echo "<p>You have signed up!</p>";
    }
  }
  ?>
</body>

</html>