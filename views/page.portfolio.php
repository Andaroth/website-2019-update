<?php include(V."elem.alltop.php"); ?>
<main>
  <section id="screensmatrix" class="screensmatrix fullh">
    <div class="strip">
      <h2><i class="fa fa-code" aria-label="code-tag"><span class="jhide">&lt;&sol;&gt;</span></i> Web's matrix</h2>
      <h3>Discover the products of my love of coding.</h3>
    </div>
    <div id="webslide" class="webslide center carousel-slider">
      <div class="carousel-item">
        <div class="tile">
            <h3>Covisière</h3>
            <img src="<?= IMG ?>mini/covisiere.png" alt="covisiere" />
            <p>I recently, and expressly, made a one-pager for Timbtrack. </p>
            <p>Due to recent cases of corona virus, the company I'm working at decided to sell headset to prevent Covid-19 propagation. </p>
            <p>We wanted a fast to deploy and easy to make one pager. <br>So I decided to code it with pure and basic HTML & CSS (SCSS actually) on a really simple hosting.</p>
            <p>I worked with my coworker, a designer, who made the base template. I magnified the template with Materialize library and deployed the website by FTP.</p>
            <a href="https://covisiere.be/" class="btn waves-effect">Visit<span class="nomobile"> our website</span></a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="tile">
          <h3>Sk8boarders.be</h3>
          <img src="<?= IMG ?>mini/sk8boarders.jpg" alt="sk8boarders_be" />
          <p>A non-profit organization once called me to give a fresh and younger style to their website in WordPress. </p>
          <p>I worked with their designer who made the drawings that I plugged inside the pages with Divi or with pure CSS in the theme editor.</p>
          <a href="https://sk8boarders.be/" class="btn waves-effect">Visit<span class="nomobile"> this website</span></a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="tile">
          <h3>PacPoule</h3>
          <img src="<?= IMG ?>mini/pacpoule.jpg" alt="Pac Poule" />
          <p>Inspired of Pac-Man, you play a chicken. </p>
          <p>This is a video game I designed with RPG Maker MV. It runs in JavaScript with the PixiJS library. </p>
          <p>There's a story behind this game. <br>I made it during BeCode classes, I challenged the students to finish the game with more than 500 points. </p>
          <p>The first winner and I made a chicken on the class' window in pixel-art with post-its.</p>
          <a href="https://axelfiolle.be/pacpoule" class="btn waves-effect">Play now !</a>
        </div>
      </div>
      <div class="carousel-item">
        <div class="tile">
          <h3>Shoe conceptor</h3>
          <img src="<?= IMG ?>normal/shoeconceptor.png" alt="Shoe conceptor" />
          <p>Custom Converse maker tool with Stripe integration, handmade from A to Z. </p>
          <p>Due to technical constraints and the end environment, I had to code it fully by hand so I was able to implement payment system with ease. </p>
          <p>The design is kind of experimental but I enjoyed making the interface effects, when you hover the elements with the mice, for exemple. </p>
          <p>The company does not allow external links, so you can try the demonstration of this application for free on my own website. </p>
          <a href="https://axelfiolle.be/shoeconceptor" class="btn waves-effect">Try the app</a>
        </div>
      </div>
    </div>
  </section>
  <section id="myphotos" class="strip floating-title myphotos">
    <h2><i class="fa fa-camera-retro" aria-label="camera"><span class="jhide">&#128247;</span></i> Still wonders</h2>
    <h3>The admiration of a moment, a scene, an emotion</h3>
  </section>
  <section id="stillwonders" class="stillwonders">
    <h2 class="hidden">My photographs</h2>
    <div id="viewphotoslide" class="carousel carousel-slider viewphotoslide">
      <div class="carousel-item heavier">
        <!-- <img src="<\?= IMG ?>normal/heavier.jpg" alt="Heavier" /> -->
      </div>
      <div class="carousel-item golden">
        <!-- <img src="<\?= IMG ?>normal/golden.jpg" alt="Golden" /> -->
      </div>
      <div class="carousel-item guardian">
        <!-- <img src="<\?= IMG ?>normal/guardian.jpg" alt="Guardian" /> -->
      </div>
      <div class="carousel-item stopit">
        <!-- <img src="<\?= IMG ?>normal/stopit.jpg" alt="Stop it" /> -->
      </div>
      <div class="carousel-fixed-item center">
        <a href="https://www.flickr.com/photos/axel-andaroth/" class="btn waves-effect scrollback">Visit my flickr</a>
      </div>
    </div>
  </section>
  <section id="myvideos" class="strip myvideos">
    <h2><i class="fa fa-fast-forward" aria-label="video-camera"><span class="jhide">&#128249;</span></i> Anim-hearted</h2>
    <h3>The dance of images, the ballet of discoveries</h3>
  </section>
  <section id="animhearted" class="animhearted">
    <h2 class="hidden">My videos on youtube</h2>
    <article>
      <header>
        <h3>Visit at BeCentral</h3>
      </header>
      <iframe src="https://www.youtube.com/embed/Wi7lfhhEZBE" allowfullscreen></iframe>
      <footer>
        <p>Some footages made on the run at the BeCentral, where BeCode happens.</p>
      </footer>
    </article>
    <article>
      <header>
        <h3>My graffiti promo video</h3>
      </header>
      <iframe src="https://www.youtube.com/embed/R4dDSqmPeqg" allowfullscreen></iframe>
      <footer>
        <p>Me performing street art on the Mont des Arts' open wall at Bruxelles.</p>
      </footer>
    </article>
    <article>
      <header>
        <h3>Touhou-Online</h3>
      </header>
      <iframe src="https://www.youtube.com/embed/vAgMSfFxa2A" allowfullscreen></iframe>
      <footer>
        <p>Touhou-Online's stand at the Mang'Azur convention in Toulon.</p>
      </footer>
    </article>
    <a href="./" class="btn shadebtn">Homepage</a>
  </section>
</main>
<?php include(V."elem.footer.php"); ?>
