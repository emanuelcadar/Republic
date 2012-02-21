<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 

<?php  $currentPage = "createScene"; ?>
<?php  $category = "film"; ?>
<?php  $thisPage = "film"; ?>

<html lang="en" class="no-js"> <!--<![endif]-->
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <meta name="robots" content="noindex">
    <title>Republic of Film</title>

    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <link rel="shortcut icon" href="/favicon.ico">
    <link rel="apple-touch-icon" href="/apple-touch-icon.png">
    <link rel="apple-touch-icon" sizes="72x72" href="/apple-touch-icon-ipad.png">
    <link rel="apple-touch-icon" sizes="114x114" href="/apple-touch-icon-iphone4.png">

    <link rel="stylesheet" href="css/style.css?v=2">
    <link rel="stylesheet" href="css/superfish.css">
    <!-- <link rel="stylesheet" href="css/sparkbox-select.css"> -->

    <script src="js/libs/modernizr-1.7.min.js"></script>
    
    <!-- Grab Google CDN's jQuery. fall back to local if necessary -->    
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.1/jquery.min.js"></script>
    <script src="js/jquery.vote.js"></script>
    <script src="js/jquery.listmanager.js"></script>
    <script src="js/jquery.hoverIntent.minified.js"></script>
    <script src="js/superfish.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/waypoints.min.js"></script>
    <script src="js/script.js"></script>


</head>

<body>
    <div class="container">
        
        <!-- Inlcude Header here... -->
        
        <?php include( 'header-film-project.php' ); ?>
        
        <div class="main">
          <section>
            <h2>Create A Scene</h2>
            <form class="create-scene" action="film-project-home.php">
              <input placeholder="Pitch Summary" id="summary" type="text" size="93"></input>
              <textarea placeholder="Make your pitch" rows="15" cols="80" id="pitch"></textarea>
              <input id="sub" type="submit" value="Submit Scene"></input>
            </form>
          </section>
          <aside>
            <h2>Time Remaining</h2>
            <time><img src="images/countdown.jpg" /></time>
            <h2>Project Timeline</h2>
            <img src="images/project-timeline.jpg" />
            <h2>Yesterday's Action</h2>
            <h3>Scene 11 Approved Script</h3>
            <p>As Willam and Janet meet with the Wedding planner, Janet can't help but notice a tear run down Willam's cheek.
            She thought back to the last time she saw Willam cry and was impressed she remembered the exact day. It was when the Chicago Cubs beat the Yankees at home 3 years ago. The emotional moment soon disappeared however as Willam ripped the most grotesque fart at the exact moment the priest entered to meet with Janet. "EXCUSE YOU FATHER" Willam exclaimed loudly. Willam then began to chuckle creating a vibration in his stomach that let out little shotgun aftershock farts with every laugh. This of course maybe Willam start to laugh even harder and yell out, 'JESUS, Father, I THINK YOU MAY HAVE SHIT YOUR ROBE.' Janet tried to apologize and tell Willam to leave, but by the time she looked back to him there was no longer a need for her to quiet him, for he was fast asleep on the church floor. 'So I was thinking first corinthians as our opening hymn, what do you think father?' Father Loyd just sat there in shock and disbelief that a man like 'Willam' existed.</p>
            <a href="#">Read More</a>
          </aside>
        </div>
    </div> <!--! end of #container -->
    
    <!-- Inlcude Footer here... -->        
    <?php include( 'footer.php' ); ?>

    