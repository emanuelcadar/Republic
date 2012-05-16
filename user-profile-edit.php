<!doctype html>  

<!--[if lt IE 7 ]> <html lang="en" class="no-js ie6"> <![endif]-->
<!--[if IE 7 ]>    <html lang="en" class="no-js ie7"> <![endif]-->
<!--[if IE 8 ]>    <html lang="en" class="no-js ie8"> <![endif]-->
<!--[if IE 9 ]>    <html lang="en" class="no-js ie9"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!--> 

<?php  $currentPage = "projectDetails"; ?>
<?php  $category = "film"; ?>
<?php  $thisPage = "profile"; ?>

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
    <script src="js/script.js"></script>


</head>

<body>
    <div class="container">
        
        <!-- Inlcude Header here... -->
            
        <?php include( 'header-simple.php' ); ?>
            <div class="user-hero">
            	<div class="user-left">
                	<a href="#" class="avatar"><img src="images/user.png" width="74" height="74" alt="user"></a>
                    <div class="user-info group">
                    	<h2>moviemaker</h2>
                        <p>MINNEAPOLIS, MN</p>
                        <p>25,456 <span>POINTS</span></p>
                        <a href="#" class="edit-account">EDIT ACCOUNT</a>
                    </div>
                    <div class="user-trophy">
                    	<a href="#"><img src="images/small-trophy.png" width="25" height="45" alt="image"></a>
                        <a href="#"><img src="images/small-medium-trophy.png" width="24" height="35" alt="image"></a>
                        <a href="#"><img src="images/small-grey-trophy.png" width="29" height="40" alt="image"></a>
                        <a href="#"><img src="images/small-trophy-crown.png" width="26" height="23" alt="image"></a>
                    </div>
                    <div class="clr"></div>
                    <div class="user-all">
                        <a href="#" class="active"><span class="approvals">APPROVALS <em>56</em></span></a>	
                        <a href="#"><span class="vetos">VETOS <em>56</em></span></a>
                        <a href="#"><span class="scene-sugg">SCENE SUGGESTIONS <em>56</em></span></a>	
                    </div>
                    <div class="user-all">
                        <a href="#"><span class="cmts">COMMENTS <em>56</em></span></a>	
                        <a href="#"><span class="flw">FOLLOWING <em>56</em></span></a>	
                        <a href="#"><span class="flwd">FOLLOWED <em>56</em></span></a>	
                    </div>
                </div>
                <div class="user-right">
                	<h4>RANK: <span>SCREENWRITER</span></h4>
                    <h4 class="nob"><span>SCENE SUGGESTION VIEWS</span></h4>
                    <img class="lg" src="images/user-profile_06.png" width="46" height="53" alt="user">
                    <div class="graph">
                    	<img src="images/img.png" width="255" height="115" alt="graph">
                    </div>
                </div>
            </div>  
        </header>
        
        <div class="main">
          <div class="user-edit">
          	<form action="" method="get">
            	<fieldset>
                	<label>DISPLAY NAME</label>
                    <input name="" type="text" class="text-field field3" value="MOVIEMAKER">
                </fieldset>
                <fieldset>
                	<label>EMAIL</label>
                    <input name="" type="text" class="text-field field3" value="name@domain.com">
                </fieldset>
                <fieldset>
                	<label>OLD PASSWORD</label>
                    <input name="" type="text" class="text-field field3" value="**********">
                </fieldset>
                <fieldset>
                	<label>NEW PASSWORD</label>
                    <input name="" type="text" class="text-field field3" value="**********">
                </fieldset>
                <fieldset>
                	<label>PASSWORD CONFIRM</label>
                    <input name="" type="text" class="text-field field3" value="**********">
                </fieldset>
                <fieldset>
                	<input name="" type="image" src="images/update-settings.png" class="update-settings">
                    <a href="#" class="del-account">DELETE YOUR ACCOUNT</a>
                </fieldset>
            </form>
          </div>
          <aside class="user-edit-sidebar">
          	<h2>Your Avatar</h2>
               <div class="change-avatar">
               		<a href="#"><img src="images/user.png" width="74" height="74" alt="avatar"></a>
                    <div class="avatar-options buttons">
                    	<a href="#" class="yellow-button">CHANGE AVATAR</a>
                        <div class="clr"></div>
                        <a href="#" class="grey-button">DELETE</a>
                    </div>
               </div>     
          </aside>
        </div>
    </div> <!--! end of #container -->
    
    <!-- Inlcude Footer here... -->        
    <?php include( 'footer.php' ); ?>