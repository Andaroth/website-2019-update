<?php include(V."elem.alltop.php"); ?>
<main>
  <section id="about" class="about">
    <h2 class="hidden"><i class="fa fa-id-card" aria-label="scope"><span class="jhide">&#128301;</span></i> About me</h2>
    <img class="pdp" src="<?= IMG ?>elem/myface.jpg" alt="My face">
    <div class="story-card">
      <h3><strong class="normal">Web-stack developer</strong> passionate about new technologies</h3>
      <p>I was young when I wrote my first line of code, I've always been interested in the computers' world. <br>At first, I learned to handle any design tool and also mastering <strong>the art of code</strong> mostly by myself. </p>
      <p>My natural taste of unknown and my initiative made me discover a lot of wonders, I'd be glad to help you getting online and expands all over the Internet !</p>
    </div>
    <a href="#mozaic" class="btn scrollback">My dev's journey</a>
  </section>
  <section id="mozaic" class="mozaic">
    <h2>Trip to knowledge</h2>
    <h3>1. Being at the right place at the right moment</h3>
    <div id="mozaicTrigger"></div>
    <div id="journey" class="grid two-c journey">
      <div class="skill-tile nomaxhskill jpacity"><h4>Junior Web Developer at BeCode, 2017-2018</h4><img class="ico small" src="<?= IMG.'ico/becodeorg.png' ?>" alt="BeCode"></div>
      <div class="skill-tile nomaxhskill jpacity hidden">Co-founder of <strong>SmartEntrepreneuriat</strong></div>
      <div class="skill-tile nomaxhskill jpacity hidden">Co-founder of <strong>l'Agence du Web</strong></div>
      <div class="skill-tile nomaxhskill jpacity"><h4>Studied at Albert Jacquard, 2013 to 2016</h4><img class="ico small" src="<?= IMG.'ico/heaj.png' ?>" alt="HEAJ"></div>
    </div>
    <h3 class="clearfix">2. Start from scratch</h3>
    <div id="scratch" class="grid three-c learned">
      <div class="skill-tile">
        <i class="devicon-html5-plain devicon big"><span class="alt-tile"><strong>HTML5</strong> warrior</span></i>
      </div>
      <div class="skill-tile">
        <i class="devicon-css3-plain devicon big"><span class="alt-tile"><strong>CSS3</strong> wizard</span></i>
      </div>
      <div class="skill-tile">
        <i class="devicon-javascript-plain devicon big"><span class="alt-tile"><strong>JavaScript</strong> writer</span></i>
      </div>
    </div>
    <h3 class="clearfix">3. Learn frameworks</h3>
    <div id="frameworks" class="grid three-c learned">
      <div class="skill-tile">
        <i class="fas fa-code devicon big"><span class="alt-tile">Worked professionnally with <strong>PolymerJS</strong></span></i>
      </div>
      <div class="skill-tile">
        <i class="devicon-react-plain devicon big"><span class="alt-tile">Worked on multiple <strong>React</strong> projects</span></i>
      </div>
      <div class="skill-tile">
        <i class="fab fa-angular devicon big"><span class="alt-tile">Started <strong>Angular</strong> a few moments ago</span></i>
      </div>
    </div>
    <h3 class="clearfix">4. Get more skills</h3>
    <div id="more" class="grid three-c learned">
      <div class="skill-tile">
        <i class="devicon-php-plain devicon big"><span class="alt-tile"><a href="https://www.linkedin.com/in/axel-fiolle/detail/skills/(ACoAABP99YMBYi-m_8zbKoUSOzyNZBdZ7eUiMlw,28)/">Everybody</a> says I'm good at <strong>PHP</strong></span></i>
      </div>
      <div class="skill-tile">
        <i class="devicon-nodejs-plain devicon big"><span class="alt-tile"><strong>NodeJS</strong> was in my sci-fi dreams</span></i>
      </div>
      <div class="skill-tile">
        <i class="fas fa-graduation-cap devicon big"><span class="alt-tile">Keep learning <strong>since 2005</strong></span></i>
      </div>
    </div>
    <a href="./?page=portfolio" class="btn shadebtn clearfix">My portfolio</a>
  </section>
</main>
<?php include(V."elem.footer.php"); ?>
