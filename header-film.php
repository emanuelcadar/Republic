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
              <li><a href="film-project-home.php">Danny Divito Project</a></li>
              <li><a href="#">Chris Rock Project</a></li>
            </ul>
          </li>
          <li class="<?php if ($thisPage == "music") echo 'current' ?>">
            <a href="music.php"><span>Music</span></a>
            <ul class="internal music">
              <span class="title">Music Genres</span>
            </ul>
          </li>
          <li class="<?php if ($thisPage == "television") echo 'current' ?>">
            <a href="television.php"><span>TV</span></a>
            <ul class="internal tv">
              <span class="title">TV Genres</span>
            </ul>
          </li>
          <li class="<?php if ($thisPage == "literature") echo 'current' ?>">
            <a href="literature.php"><span>Literature</span></a>
            <ul class="internal lit">
              <span class="title">Literature Genres</span>
            </ul>
          </li>
          <li class="<?php if ($thisPage == "viral") echo 'current' ?>">
            <a href="viral.php"><span>Viral</span></a>
            <ul class="internal viral">
              <span class="title">Viral Genres</span>
            </ul>
          </li>
    <!--      <li class="republic-home"><a title="Republic Home Page" class="home-badge" href="#"></a></li>-->
        </ul>
    <span class="arrow left"></span>
  </nav>
  <div class="hero <?php if ($currentPage == "film-index") echo 'film-index' ?>">
    <h1>The Danny DeVito Project</h1>
    <ul class="sf-sub-menu">
       <li><a <?php if ($currentPage == "index") echo 'class="current"' ?> href="index.php">Project Home</a></li>
       <li><a <?php if ($currentPage == "createScene") echo 'class="current"' ?> href="create-scene.php">Create a Scene</a></li>
       <li><a <?php if ($currentPage == "projectDetails") echo 'class="current"' ?> href="project-details.php">Project Details</a>
         <ul class="internal">
           <li><a href="project-premise.php">Premise</a></li>
           <li><a href="project-script.php">Approved Script</a></li>
           <li><a href="project-characters.php">Main Characters</a></li>
           <li><a href="project-scenes.php">Previous Scenes</a></li>
         </ul>
       </li>
       <li><a <?php if ($currentPage == "createCharacter") echo 'class="current"' ?> href="create-character.php">Create a Character</a></li>
    </ul>            
  </div>
</header>