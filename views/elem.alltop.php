<header class="alltopbar">
  <h1><a href="./"><?= $meta['title'] ?></a></h1>
  <p class="navigatelabel nomobile">Navigate :</p>
  <ul id="pagenav" class="pagenav">
    <?php /* <li><a href="#page_" class="scrollback">Top</a></li> */ ?>
<?php switch($page) { case 'home': ?>
    <li><a class="scrollback" href="#presentation">UX developer</a></li>
    <li><a href="#skills" class="scrollback">Skills</a></li>
<?php break; case 'about': ?>
    <li><a href="#about" class="scrollback">About<span class="nomobile"> me</span></a></li>
    <li><a href="#mozaic" class="scrollback"><span class="hidden">Learn more about my </span>Learning</a></li>
<?php break; case 'portfolio': ?>
    <li><a class="scrollback" href="#screensmatrix">Web<span class="nomobile"> &amp; Apps</span></a></li>
    <li><a class="scrollback" href="#stillwonders">Photo<span class="nomobile">graph</span>s</a></li>
    <li><a class="scrollback" href="#animhearted">Videos</a></li>
<?php break;} ?>
    <li><a href="#contact" id="contactlink" class="contactlink">Contact<span class="nomobile"> me</span></a></li>
  </ul>
  <a href="#visitmenu" id="visitlink" class="visitlink"><i class="fas fa-bars visit"></i> Visit !</a>
  <!--<a href="#visitmenu" id="visitlink" class="visitlink"><span class="and rotate">&and;</span> Visit !</a>-->
  <nav>
    <ul id="visitmenu" class="visitmenu">
      <li><a href="./">Homepage</a></li>
      <li><a href="./?page=about">Who am I</a></li>
      <li><a href="./?page=portfolio">Discover my work</a></li>
      <li><a href="./shop">My store</a></li>
    </ul>
  </nav>
</header>
<?php include(C."meiling.php"); ?>
