<?php

if (isset($_POST["submit"])) {

  // First we get the form data from the URL
  $name = $_POST["username"];
  $email = $_POST["email"];
  $username = $_POST["id"];
  $pwd = $_POST["pwd"];

  // Then we run a bunch of error handlers to catch any user mistakes we can (you can add more than I did)
  // These functions can be found in functions.php

  require_once "db.php";
  require_once 'functions.php';

  // Left inputs empty
  // We set the functions "!== false" since "=== true" has a risk of giving us the wrong outcome
  if (emptyInputregistration($name, $email, $username, $pwd) !== false) {
    header("location: ../registration.php?error=emptyinput");
    exit();
  }
  // Proper username chosen
  if (invalidUid($uid) !== false) {
    header("location: ../registration.php?error=invaliduid");
    exit();
  }
  // Proper email chosen
  if (invalidEmail($email) !== true) {
    header("location: ../registration.php?error=invalidemail");
    exit();
  }
  // Is the username taken already
  if (uidExists($con, $username) !== false) {
    header("location: ../registration.php?error=usernametaken");
    exit();
  }

  // Now we insert the user into the database
  createUser($con, $name, $email, $username, $pwd);
} else {
  header("location: ../registration.php");
  exit();
}
