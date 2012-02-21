<header>
  <div class="account-options logged-in">
    <ul>
      <li>
        <span class="avatar"><img src="images/placeholder-avatar.jpg" alt=""></span>
        <span class="account-name"><a href="user-profile.php">Moviemaker</a></span>
        <span class="points">458 pts</span>
        <ul class="dropdown">
          <li class="approvals"><a href="#">Approvals <span>23</span></a></li>
          <li class="vetos"><a href="#">Vetos <span>23</span></a></li>
          <li class="scene-suggestions"><a href="#">Scene Suggestions <span>1</span></a></li>
          <li class="comments"><a href="#">Comments <span>3</span></a></li>
          <li class="following"><a href="#">Following <span>223</span></a></li>
          <li class="followed"><a href="#">Followed <span>21233</span></a></li>
          <li class="settings"><a href="#">Settings</a></li>
          <li class="log-out"><a href="#">Log Out</a></li>
        </ul>
      </li>
    </ul>
  </div>
  <nav class="main">
    <a class="hidden-home" href="index.php"></a>
    <a class="home" href="index.php">
      <?php if ($category == "republic") { ?>
        <img src="images/logo.png" alt="Home">
      <?php }; ?>
      <?php if ($category == "film") { ?>
        <img src="images/logo-film.png" alt="Home">
      <?php }; ?>
      <?php if ($category == "lit") { ?>
        <img src="images/logo-lit.png" alt="Home">
      <?php }; ?>
      <?php if ($category == "music") { ?>
        <img src="images/logo-music.png" alt="Home">
      <?php }; ?>
      <?php if ($category == "viral") { ?>
        <img src="images/logo-viral.png" alt="Home">
      <?php }; ?>
      <?php if ($category == "tv") { ?>
        <img src="images/logo-tv.png" alt="Home">
      <?php }; ?>
      <?php if ($category == "hot") { ?>
        <img src="images/logo-hot.png" alt="Home">
      <?php }; ?>
    </a>
    <span class="arrow right"></span>
    <ul class="sf-menu">
      <li class="hot <?php if ($thisPage == "hot") echo 'current' ?>">
        <a href="hot.php"><span>Hot</span></a>
      </li>
      <li class="<?php if ($thisPage == "film") echo 'current' ?>">
        <a href="film.php"><span>Film</span></a>
        <ul class="internal film">
          <span class="title">Film Genres</span>
          <li><a href="comedy-home.php">Comedy</a></li>
          <li class="project"><a href="film-project-home.php">Danny Divito Project</a></li>
          <li class="project"><a href="#">Chris Rock Project</a></li>
          <li><a href="#">Sci-Fi</a></li>
          <li class="project"><a href="#">Natalie Portman Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
          <li><a href="#">Western</a></li>
          <li class="project"><a href="#">Clint Eastwood Project</a></li>
          <li class="project"><a href="#">Kevin Costner Project</a></li>
          <li><a href="#">Action</a></li>
          <li class="project"><a href="#">Bruce Willis Project</a></li>
          <li class="project"><a href="#">Jackie Chan Project</a></li>
          <li><a href="#">Horror</a></li>
          <li class="project"><a href="#">M. Night Shyamalan Project</a></li>
          <li><a href="#">Romance</a></li>
          <li class="project"><a href="#">Kate Winslet Project</a></li>
          <li class="project"><a href="#">Dustin Hoffman Project</a></li>
          <li><a href="#">Drama</a></li>
          <li class="project"><a href="#">Robert Redford Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
        </ul>
      </li>
      <li class="<?php if ($thisPage == "music") echo 'current' ?>">
        <a href="music.php"><span>Music</span></a>
        <ul class="internal music">
          <span class="title">Music Genres</span>
          <li><a href="comedy-home.php">Comedy</a></li>
          <li class="project"><a href="film-project-home.php">Danny Divito Project</a></li>
          <li class="project"><a href="#">Chris Rock Project</a></li>
          <li><a href="#">Sci-Fi</a></li>
          <li class="project"><a href="#">Natalie Portman Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
          <li><a href="#">Western</a></li>
          <li class="project"><a href="#">Clint Eastwood Project</a></li>
          <li class="project"><a href="#">Kevin Costner Project</a></li>
          <li><a href="#">Action</a></li>
          <li class="project"><a href="#">Bruce Willis Project</a></li>
          <li class="project"><a href="#">Jackie Chan Project</a></li>
          <li><a href="#">Horror</a></li>
          <li class="project"><a href="#">M. Night Shyamalan Project</a></li>
          <li><a href="#">Romance</a></li>
          <li class="project"><a href="#">Kate Winslet Project</a></li>
          <li class="project"><a href="#">Dustin Hoffman Project</a></li>
          <li><a href="#">Drama</a></li>
          <li class="project"><a href="#">Robert Redford Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
        </ul>
      </li>
      <li class="<?php if ($thisPage == "television") echo 'current' ?>">
        <a href="television.php"><span>TV</span></a>
        <ul class="internal tv">
          <span class="title">TV Genres</span>
          <li><a href="comedy-home.php">Comedy</a></li>
          <li class="project"><a href="film-project-home.php">Danny Divito Project</a></li>
          <li class="project"><a href="#">Chris Rock Project</a></li>
          <li><a href="#">Sci-Fi</a></li>
          <li class="project"><a href="#">Natalie Portman Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
          <li><a href="#">Western</a></li>
          <li class="project"><a href="#">Clint Eastwood Project</a></li>
          <li class="project"><a href="#">Kevin Costner Project</a></li>
          <li><a href="#">Action</a></li>
          <li class="project"><a href="#">Bruce Willis Project</a></li>
          <li class="project"><a href="#">Jackie Chan Project</a></li>
          <li><a href="#">Horror</a></li>
          <li class="project"><a href="#">M. Night Shyamalan Project</a></li>
          <li><a href="#">Romance</a></li>
          <li class="project"><a href="#">Kate Winslet Project</a></li>
          <li class="project"><a href="#">Dustin Hoffman Project</a></li>
          <li><a href="#">Drama</a></li>
          <li class="project"><a href="#">Robert Redford Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
        </ul>
      </li>
      <li class="<?php if ($thisPage == "literature") echo 'current' ?>">
        <a href="literature.php"><span>Literature</span></a>
        <ul class="internal lit">
          <span class="title">Literature Genres</span>
          <li><a href="comedy-home.php">Comedy</a></li>
          <li class="project"><a href="film-project-home.php">Danny Divito Project</a></li>
          <li class="project"><a href="#">Chris Rock Project</a></li>
          <li><a href="#">Sci-Fi</a></li>
          <li class="project"><a href="#">Natalie Portman Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
          <li><a href="#">Western</a></li>
          <li class="project"><a href="#">Clint Eastwood Project</a></li>
          <li class="project"><a href="#">Kevin Costner Project</a></li>
          <li><a href="#">Action</a></li>
          <li class="project"><a href="#">Bruce Willis Project</a></li>
          <li class="project"><a href="#">Jackie Chan Project</a></li>
          <li><a href="#">Horror</a></li>
          <li class="project"><a href="#">M. Night Shyamalan Project</a></li>
          <li><a href="#">Romance</a></li>
          <li class="project"><a href="#">Kate Winslet Project</a></li>
          <li class="project"><a href="#">Dustin Hoffman Project</a></li>
          <li><a href="#">Drama</a></li>
          <li class="project"><a href="#">Robert Redford Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
        </ul>
      </li>
      <li class="<?php if ($thisPage == "viral") echo 'current' ?>">
        <a href="viral.php"><span>Viral</span></a>
        <ul class="internal viral">
          <span class="title">Viral Genres</span>
          <li><a href="comedy-home.php">Comedy</a></li>
          <li class="project"><a href="film-project-home.php">Danny Divito Project</a></li>
          <li class="project"><a href="#">Chris Rock Project</a></li>
          <li><a href="#">Sci-Fi</a></li>
          <li class="project"><a href="#">Natalie Portman Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
          <li><a href="#">Western</a></li>
          <li class="project"><a href="#">Clint Eastwood Project</a></li>
          <li class="project"><a href="#">Kevin Costner Project</a></li>
          <li><a href="#">Action</a></li>
          <li class="project"><a href="#">Bruce Willis Project</a></li>
          <li class="project"><a href="#">Jackie Chan Project</a></li>
          <li><a href="#">Horror</a></li>
          <li class="project"><a href="#">M. Night Shyamalan Project</a></li>
          <li><a href="#">Romance</a></li>
          <li class="project"><a href="#">Kate Winslet Project</a></li>
          <li class="project"><a href="#">Dustin Hoffman Project</a></li>
          <li><a href="#">Drama</a></li>
          <li class="project"><a href="#">Robert Redford Project</a></li>
          <li class="project"><a href="#">Sigourney Weaver Project</a></li>
        </ul>
      </li>
<!--      <li class="republic-home"><a title="Republic Home Page" class="home-badge" href="#"></a></li>-->
    </ul>
    <span class="arrow left"></span>
  </nav>
  