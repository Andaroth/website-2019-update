<?php include(V."elem.alltop.php"); ?>
<main>
  <section class="landing">
    <div class="box firstbox">
      <h2 class="hidden">Axel Fiolle</h2>
      <div>
        <h3><strong>Web developper</strong> in love with virtual things</h3>
        <p>The worldwide web is like an interconnected dream. I'm living in the <strong>Internet Of Things</strong>.</p>
        <p><strong>Trust me your dreams</strong> I'll make them real</p>
        <a href="#contact" class="btn waves-effect smallbtn contactlink">Get in touch</a>
      </div>
    </div>
    <a href="#presentation" id="landingscroll" class="scroller landingscroll scrollback">&and;</a>
  </section>
  <section id="presentation" class="presentation">
    <h2>10 years of coding</h2>
    <div>
      <p class="mbottom">I design <b>dreams and experiences</b> since I was just a kid.</p> 
      <p class="codepen" data-height="376" data-theme-id="dark" data-default-tab="css,result" data-user="Andaroth" data-slug-hash="EbWVbm" style="height: 375px; box-sizing: border-box; display: flex; align-items: center; justify-content: center; border: 2px solid black; margin: 1em 0; padding: 1em;" data-pen-title="Logo BeCode SVG animé en CSS">
        <span>See the Pen <a href="https://codepen.io/Andaroth/pen/EbWVbm/">
        Logo BeCode SVG animé en CSS</a> by Axel Fiolle (<a href="https://codepen.io/Andaroth">@Andaroth</a>)
        on <a href="https://codepen.io">CodePen</a>.</span>
      </p>
      <script async src="https://static.codepen.io/assets/embed/ei.js"></script>
      <div>
        <p>With more than <strong>ten years of experience in web design and developement</strong>, I can help you to <strong>create your own website</strong> and assert your presence online.</p>
      </div>
    </div>
    <a href="./page-about" class="btn waves-effect smallbtn shadebtn">About me</a>
    <!--<i class="fas fa-trophy" aria-label="trophy"><span class="jhide">&#127942;</span></i>-->
    <!--<p>I started making websites when I was just a kid. <br>With more than <strong>ten years of experience in web design and developement</strong>, I can help you to <strong>create your own website</strong> and assert your presence online.</p>-->
  </section>
  <section id="skills" class="skills clearfix">
    <h2>My skills</h2>
    <h3>A little graphic worth <a href="./page-about">a long talk</a></h3>
    <div id="canvagrid" class="canvagrid grid two-c">
      <div id="chartTrigger">
        <h4>Front-end</h4>
        <ul class="jhide">
          <li>Worked professionnally with Polymer</li>
          <li>Spent months on React</li>
          <li>Training in Angular</li>
          <li>Can make SCSS and SASS work like a charm</li>
          <li>Excellent in HTML and CSS</li>
        </ul>
        <canvas id="frontendChart" class="homeChart"></canvas>
      </div>
      <div>
        <h4>Back-end</h4>
        <ul class="jhide">
          <li>Good use of Symfony</li>
          <li>Can write NodeJS backend</li>
          <li>Confirmed PHP doer</li>
        </ul>
        <canvas id="backendChart" class="homeChart"></canvas>
      </div>
      
    </div>
    <a href="./page-portfolio" class="btn waves-effect shadebtn">Check what I made</a>
    
  </section>
</main>
<?php include(V."elem.footer.php"); ?>
