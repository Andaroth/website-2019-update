<?php include(V."elem.alltop.php"); ?>
<main>
  <section id="about" class="about">
    <h2 class="hidden"><i class="fa fa-id-card" aria-label="scope"><span class="jhide">&#128301;</span></i> About me</h2>
    <img class="pdp" src="<?= IMG ?>elem/myface.jpg" alt="My face">
    <div class="card story-card">
      <h3 class="card-title"><strong class="normal">Web-stack developer</strong> passionate about new technologies</h3>
      <div class="card-content content">
        <p>I was young when I wrote my first line of code, I've always been interested in the computers' world. <br>At first, I learned to handle any design tool and also mastering <strong>the art of code</strong> mostly by myself. </p>
        <p>My natural taste of unknown and my initiative made me discover a lot of wonders, I'd be glad to help you getting online and expands all over the Internet !</p>
      </div>
      <div class="card-cation">
        <a href="#mozaic" class="btn waves-effect scrollback">My dev's journey</a>
      </div>
    </div>
  </section>
  <section id="mozaic" class="mozaic">
    <h2>Trip to knowledge</h2>
    <h3>1. Being at the right place at the right moment</h3>
    <div id="mozaicTrigger"></div>
    <div class="container">
      <div id="journey" class="row journey">
        <div class="row">
        <div class="col s12 m6 offset-m3">
          <div class="card skill-tile dark-nice">
          <div class="card-content">
            <h4>Lead developer at <a href="https://timbtrack.com/"><abbr title="International Business Renaissance">IBR</abbr></a></h4><img src="<?= IMG.'/ico/logo-timbtrack-block-white.png' ?>" alt="Timbtrack" class="ico small">
          </div>
          </div>
        </div>
        </div>
        <div class="col s12 m6">
          <div class="card skill-tile nomaxhskill">
            <div class="card-content">
              <h4>Mixed all knowledge at BeCode, 2017-2018</h4><img class="ico small" src="<?= IMG.'ico/becodeorg.png' ?>" alt="BeCode">
            </div>
          </div>
        </div>
        <div class="col s12 m6">
          <div class="card skill-tile nomaxhskill">
            <div class="card-content">
              <h4>Studied at Albert Jacquard, 2013 to 2016</h4><img class="ico small" src="<?= IMG.'ico/heaj.png' ?>" alt="HEAJ">
            </div>
          </div>
        </div>
      </div>
    </div>
    <h3 class="clearfix">2. Start from scratch</h3>
    <div class="container">
      <div id="scratch" class="row learned">
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="devicon-html5-plain devicon big"></i><span class="alt-tile"><strong>HTML5</strong> warrior</span>
          </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="devicon-css3-plain devicon big"></i><span class="alt-tile"><strong>CSS3</strong> wizard</span>
          </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="devicon-javascript-plain devicon big"></i><span class="alt-tile"><strong>JavaScript</strong> writer</span>
          </div>
          </div>
        </div>
      </div>
    </div>
    <h3 class="clearfix">3. Learn frameworks</h3>
    <div class="container">
      <div id="frameworks" class="row learned">
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="fab fa-vuejs devicon big"></i><span class="alt-tile">Works actively on multiple <strong>VueJS</strong> <a href="https://timbtrack.com/">projects</a></span>
          </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="devicon-react-plain devicon big"></i><span class="alt-tile">Worked on several <strong>React</strong> <a href="https://constructr.be/">applications</a></span>
          </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="fab fa-angular devicon big"></i><span class="alt-tile">Can handle <strong>Angular</strong> with ease</span>
          </div>
          </div>
        </div>
      </div>
    </div>
    <h3 class="clearfix">4. Get more skills</h3>
    <div class="container">
      <div id="more" class="row learned">
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="devicon-php-plain devicon big"></i><span class="alt-tile"><a href="https://www.linkedin.com/in/axel-fiolle/detail/skills/(ACoAABP99YMBYi-m_8zbKoUSOzyNZBdZ7eUiMlw,28)/">Everybody</a> says I'm good at <strong>PHP</strong></span>
          </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="devicon-nodejs-plain devicon big"></i><span class="alt-tile"><strong>NodeJS</strong> was in my sci-fi dreams</span>
          </div>
          </div>
        </div>
        <div class="col s12 m4">
          <div class="card skill-tile">
          <div class="card-content">
            <i class="fas fa-server devicon big"></i><span class="alt-tile"><strong>MySQL</strong> and <strong>MongoDB</strong> are my first choices</span>
          </div>
          </div>
        </div>
      </div>
    </div>
    <a href="./page-portfolio" class="btn waves-effect shadebtn clearfix">My portfolio</a>
  </section>
</main>
<?php include(V."elem.footer.php"); ?>
