<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-70463285-1', 'auto');
  ga('require', 'linkid');
  ga('send', 'pageview');
</script>
<script>
  // <?= $page ?>

</script>
<!-- jQ and libs -->
<script src="<?= JS ?>jquery-3.2.1.min.js"></script>
<script src="<?= JS ?>visible.min.js"></script>
<script src="<?= JS ?>materialize.min.js"></script>
<!-- Specific page scripts -->
<?php if($page=="portfolio") { ?>
<script src="<?= JS ?>slick.min.js"></script>
<?php } ?>
<?php if($page=="home") { ?>
<script src="<?= JS ?>chart.js"></script>
<script src="<?= JS ?>/App/elem.chart.js"></script>
<?php } ?>
<!-- My Scripts -->
<script src="<?= JS ?>/App/app.js"></script>
