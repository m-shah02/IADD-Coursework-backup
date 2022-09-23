<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" href="Images\AstonLogoTriangle.png" />
    <title>Aston Events | Login</title>
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
    session_start();
    // When form submitted, check and create user session.
    if (isset($_POST['username'])) {
        $username = stripslashes($_REQUEST['username']);    // removes backslashes
        $username = mysqli_real_escape_string($con, $username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con, $password);
        // Check user is exist in the database
        $query    = "SELECT * FROM `users` WHERE username='$username'
                     AND password='" . md5($password) . "'";
        $result = mysqli_query($con, $query) or die(mysqli_error($con));
        $rows = mysqli_num_rows($result);
        if ($rows == 1) {
            $_SESSION['username'] = $username;
            $_SESSION['id'] = getID($con, $username);
            // Redirect to user dashboard page
            header("Location: dashboard.php");
        } else {
            //If login failed, then display this message
            echo "<div class='form'>
                  <h3>Incorrect Username/password.</h3><br/>
                  <p class='link'>Click here to <a href='login.php'>Login</a> again.</p>
                  </div>";
        }
    } else {
    ?>
        <!--This is the form for the login page that users are expected to sign in on-->
        <form class="form" method="post" name="login">
            <h1 class="login-title">Login</h1>
            <!--Username field-->
            <input type="text" class="login-input" name="username" placeholder="Username" autofocus="true" />
            <!--Password field-->
            <input type="password" class="login-input" name="password" placeholder="Password" />
            <!--Submit button-->
            <input type="submit" value="Login" name="submit" class="login-button" />
            <p class="link"><a href="registration.php">New Registration</a></p>
        </form>
    <?php
    }
    // This attempts to fetch the primary key field for each user to help with the bookings
    function getID($con, $username)
    {
        $sql = "SELECT users.id FROM users  WHERE username='$username' ";
        $result = $con->query($sql);
        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                return $row["id"];
            }
        }
    }
    ?>

</body>

</html>