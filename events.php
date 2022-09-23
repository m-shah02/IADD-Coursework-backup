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
  <title>Aston Events | Events</title>
</head>

<body>
  <!--The logo-->
  <img src="Images\AstonUniLogo.png" alt="Aston Logo" />
  <!--The navbar-->
  <div class="topnav">
    <a href="index.php">Home</a>
    <a href="events.php">Events</a>
    <a href="login.php">Login</a>
    <a href="registration.php">Register</a>
  </div>

  <!--The main contents of the page go here-->
  <main class="container">
    <h1>Events</h1>

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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#football">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="football" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Football 5-a-side tournament</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <!--Description-->
          <div class="modal-body">

            <p>Time: 2021/5/3 12:00</p><br>
            <p>Organiser: Sports Teams</p><br>
            <p>Venue: Football pitches </p><br>
            <br>
            <p>Partake in an intense game of 5 a side football in a tournament to see which team reigns supreme</p><br>
            <?php
            /*$sql = "SELECT Name FROM events";
            
            if ($result = mysqli_query($con, $sql)) {
            while ($fieldinfo = mysqli_fetch_field($result)) {
              printf("Name: %s\n", $fieldinfo -> Name);
            }
            mysqli_result_free_result($result);
          }
          mysqli_close($con);*/
            ?>
            <!-- <p class ="name"><?php //echo $row['Name'] 
                                  ?></p> -->
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#film">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="film" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Movie Night</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/5 12:00</p><br>
            <p>Organiser: Eventbrite</p><br>
            <p>Venue: Student Union</p><br>
            <p>Url: https://www.astonsu.com/</p><br>
            <br>
            <p>watch some of the greatest classsics whilst you grab some popcorn</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cricket">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="cricket" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Cricket</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/6 12:00</p><br>
            <p>Organiser: Sports Teams</p><br>
            <p>Venue: Sports Hall</p><br>
            <p>Url: https://www.astonsu.com/club/cricket/</p><br>
            <br>
            <p>If you're a big fan of cricket why not attend the Aston Cricket club?</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#weightlifting">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="weightlifting" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Weightlifting</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/10 12:00</p><br>
            <p>Organiser: Sports Teams</p><br>
            <p>Venue: Gymnasium</p><br>
            <p>Url: https://www.astonsu.com/</p><br>
            <br>
            <p>Prove to everyone how strong you are by visiting the weightlifting challenge to see who can lift the most</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#cooking">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="cooking" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Cooking</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/12 12:00</p><br>
            <p>Organiser: Chefs</p><br>
            <p>Venue: Kitchen</p><br>
            <p>Url: https://www.astonsu.com/</p><br>
            <br>
            <p>Put your cooking skills to the test as you try to make some of the best dishes imaginable</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#eid">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="eid" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Eid Ul Fitr</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/13 12:00</p><br>
            <p>Organiser: Muslims</p><br>
            <p>Venue: Student Union</p><br>
            <p>Url: https://www.astonsu.com/</p><br>
            <br>
            <p>Celebrate Eid ul fitr together with people at the university.</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#museum">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="museum" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Visit the museum</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/12 12:00</p><br>
            <p>Organiser: </p><br>
            <p>Venue: Birmingham Museum and Art Gallery</p><br>
            <p>Url: https://www.birminghammuseums.org.uk/bmag</p><br>
            <br>
            <p>Look at all the historical figures and pieces of history in the museums.</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#art">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="art" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Visit the local Art Gallery</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>

          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/20 12:00</p><br>
            <p>Organiser: Eventbrite</p><br>
            <p>Venue: Birmingham Museum and Art Gallery</p><br>
            <p>Url: https://www.birminghammuseums.org.uk/bmag</p><br>
            <br>
            <p>Visit the art gallery to view a wide variety of paintings and sculptures</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#music">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="music" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Music Festival</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/23 12:00</p><br>
            <p>Organiser: Eventbrite</p><br>
            <p>Venue: Main Building</p><br>
            <p>Url: https://www.astonsu.com/</p><br>
            <br>
            <p>Listen to some of your favourite music together</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
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
      <!--Button for more details-->
      <button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#wii">More details</button>
    </div>

    <!--Modal-->
    <div class="modal fade" id="wii" role="dialog">
      <div class="modal-dialog">

        <!--Modal content-->
        <div class="modal-content">
          <div class="modal-header">
            <h4 class="modal-title">Wii Sports Competition</h4>
            <button type="button" class="close" data-dismiss="modal">&times;</button>
          </div>
          <!--Description-->
          <div class="modal-body">
            <p>Time: 2021/5/30 12:00</p><br>
            <p>Organiser: Mansoor Shah</p><br>
            <p>Venue: Student Union</p><br>
            <p>Url: https://www.astonsu.com/</p><br>
            <br>
            <p>Take place in an intense game of Wii sports where you go against the reining champion, Mansoor Shah, in a challenging game of bowling</p><br>
          </div>
          <div class="modal-footer">
            <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
          </div>
        </div>
      </div>
    </div>
    </div>
  </main>
</body>

</html>