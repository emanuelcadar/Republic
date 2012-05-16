<header>
  <div class="account-options logged-in">
    <ul>
      <li>
        <a href="user-profile.php">
            <span class="avatar"><img src="images/placeholder-avatar.jpg" alt=""></span>
            <span class="account-name">Moviemaker</span>
            <span class="points">458 pts</span>
        </a>
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
      <li>
        <a href="vht.php"><span><img src="images/ht_03.png" width="36" height="49" alt="ht" /></span></a>
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
        <a href="literature.php"><span>Lit</span></a>
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
      <li class="<?php if ($thisPage == "music") echo 'current' ?>">
        <a href="music.php"><span>Gaming</span></a>
        <ul class="internal music">
          <span class="title">Gaming Genres</span>
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
      <li class="<?php if ($thisPage == "horde") echo 'current' ?>">
      		<a href="music.php"><span><img src="images/horde_logo.png" width="131" height="34" alt="horde" /></span></a>
      </li>
<!--      <li class="republic-home"><a title="Republic Home Page" class="home-badge" href="#"></a></li>-->
    </ul>
    <span class="arrow left"></span>
  </nav>
  <div class="hero <?php if ($currentPage == "index") echo 'index' ?><?php if (($currentPage == "film") OR ($currentPage == "comedy")) echo 'film' ?><?php if ($currentPage == "television") echo 'television' ?><?php if ($currentPage == "viral") echo 'viral' ?><?php if ($currentPage == "music") echo 'music' ?><?php if ($currentPage == "literature") echo 'literature' ?><?php if ($currentPage == "hot") echo 'hot' ?>">
     <?php if ($currentPage == "film") { ?> 
       <ul class="back-link"><li><a href="index.php">Republic Home</a></li></ul><h1 class="category">Film</h1> 
     <?php }; ?>
     <?php if ($currentPage == "hot") { ?> 
       <ul class="back-link"><li><a href="index.php">Republic Home</a></li></ul><h1 class="category">What's Hot</h1> 
     <?php }; ?>
     <?php if ($currentPage == "comedy") { ?>
       <ul class="back-link"><li><a href="index.php">Republic Home</a><span>/</span><a href="film.php">Film home</a></li></ul><h1 class="category">Film <span>/Comedy</h1>
     <?php }; ?>
     <?php if ($currentPage == "television") { ?> 
       <ul class="back-link"><li><a href="index.php">Republic Home</a></li></ul><h1 class="category">Television</h1> 
     <?php }; ?>
     <?php if ($currentPage == "viral") { ?> 
       <ul class="back-link"><li><a href="index.php">Republic Home</a></li></ul><h1 class="category">Viral</h1> 
     <?php }; ?>
     <?php if ($currentPage == "music") { ?> 
       <ul class="back-link"><li><a href="index.php">Republic Home</a></li></ul><h1 class="category">Music</h1> 
     <?php }; ?>
     <?php if ($currentPage == "literature") { ?> 
       <ul class="back-link"><li><a href="index.php">Republic Home</a></li></ul><h1 class="category">Literature</h1> 
     <?php }; ?>
  </div>
</header>