<head>
  <meta charset="UTF-8">
  <title><?= $meta['title'] ?></title>
  <meta name="description" content="<?= $meta['description'] ?>">
  <meta name="keywords" content="<?= $meta['keywords'] ?>">
  <meta name="wot-verification" content="2cb3aa1199fd42fefd7b"/>
  <meta name="application-name" content="<?= $meta['title'] ?>" />
  <meta property="og:title" content="<?= $meta['title'] ?>" />
  <meta property="og:description" content="<?= $meta['description'] ?>" />
  <meta property="og:image" content="https://axelfiolle.be/views/assets/img/design/section1bg.jpg" />
  <meta name="viewport" content="width=device-width,initial-scale=1">
  <link rel="stylesheet" href="<?= V.'assets/css/fontawesome.css'?>">
  <link rel="stylesheet" href="<?= V.'assets/css/materialize.min.css'?>">
<?php if($page=="portfolio") { ?>
  <link rel="stylesheet" href="<?= V.'assets/js/slick.css' ?>">
  <link rel="stylesheet" href="<?= V.'assets/js/slick-theme.css' ?>">
<?php } ?>
<?php if($page=="about") { ?>
  <link rel="stylesheet" href="<?= V.'assets/css/devicon.css'?>">
<?php } ?>
  <link rel="stylesheet" href="<?= V.'assets/css/style.css'?>">
  <link rel="stylesheet" media="screen and (max-width:850px)" href="<?= V.'assets/css/mobile.css'?>">
  <link rel="icon" type="image/gif" href="<?= IMG ?>ico/fav.gif" />
</head>
