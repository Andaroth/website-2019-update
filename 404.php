<!DOCTYPE html>
<?php $curPage = "404"; ?>
<html lang="fr">

	<?php
$loadPage1741 = 1; // code de validation
error_reporting(0);
ini_set('display_errors', 0);

$siteTitle = "Axel Fiolle !";
$siteAuthor = $siteTitle;
$siteDescription = "Créateur d'incroyables interfaces pour que le web soit un monde merveilleux.";
$siteDomain = "axelfiolle.be";

// définition du titre de la page
switch($curPage)
	{
		case "creat":
			$pageName = "Mon portfolio";
			$separaTitle = " | ";
			break;
		case "more":
			$pageName = "À propos de moi...";
			$separaTitle = " | ";
			break;
		case "404":
			$pageName = "404, encore toi !";
			$separaTitle = "";
			$siteTitle = "";
			break;
		default:
			$pageName = "Besoin d'un site web ?";
			$separaTitle = " Contactez ";
			break;
	}

function getUserIP()
{
    $client  = @$_SERVER['HTTP_CLIENT_IP'];
    $forward = @$_SERVER['HTTP_X_FORWARDED_FOR'];
    $remote  = $_SERVER['REMOTE_ADDR'];

    if(filter_var($client, FILTER_VALIDATE_IP))
    {
        $ip = $client;
    }
    elseif(filter_var($forward, FILTER_VALIDATE_IP))
    {
        $ip = $forward;
    }
    else
    {
        $ip = $remote;
    }

    return $ip;
}
$userIp = getUserIP();
?>

	<head>

		<meta charset="utf-8" />

		<title><?php echo $pageName.$separaTitle.$siteTitle; ?></title>

		<link rel="icon" type="image/png" href="./img/ico/fav.gif" />

		<meta name="description" content="<?php echo $siteDescription; ?>" />

		<meta name="keywords"
			content="axel,fiolle,andaroth,photographie,photographe,illustration,graphisme,graphiste,infographie,infographiste,web,design,designer,webmaster,user,experience,interface,ui,ux,uxd,portfolio,dwm,heaj,albert,jacquard,infographie,responsive,jquery,js,javascript,css,html,php,mysql,maria,mariadb,ruby,touhou,online,requiem,for,a,reckoning,touhoumon,bitter,sweet,reverie,b6e6901e016c39508cad"
		/>

		<meta name="author" content="<?php echo $siteAuthor; ?>" />

		<link rel="stylesheet" type="text/css" href="./css/style.css" />
		<link rel="stylesheet" type="text/css" media="(max-width: 850px)" href="./css/style-viewport.css" />
		<meta name="viewport" content="width=device-width,initial-scale=1">

		<?php /*<!-- Slick CSS -->
		<link rel="stylesheet" type="text/css" href="./js/slick/slick.css">
		<link rel="stylesheet" type="text/css" href="./js/slick/slick-theme.css">
		<!-- -->

		<!-- VideoJS CSS -->
		<link href="./js/videojs/video-js.css" rel="stylesheet">
		<link href="./js/videojs/skins/andaroth.css" rel="stylesheet">
		<script src="./js/videojs/videojs-ie8.min.js"></script>
		<!-- --> */?>

		<meta name="wot-verification" content="2cb3aa1199fd42fefd7b"/>

		<!-- App, social & Shortcut -->
		<meta name="application-name" content="<?php echo $siteTitle; ?>" />

		<meta property="og:title" content="<?php echo $siteTitle; ?>" />
		<meta property="og:description" content="<?php echo $siteDescription; ?>" />
		<meta property="og:image" content="./img/ico/fav.gif" />

		<meta name="msapplication-tooltip" content="<?php echo $siteDescription; ?>" />
		<meta name="msapplication-starturl" content="http://<?php echo $siteDomain; ?>/" />

		<meta name="wot-verification" content="b6e6901e016c39508cad"/>

		<!--[if lt IE 9]>
		<script src="//html5shim.googlecode.com/svn/trunk/html5.js"></script>
		<![endif]-->

	</head>

		$loadPage1741 = 0;
	?>

	<body>

		<div class="section error404">

			<div class="inside">

				<section class="blocktxt">
					<h1 class="blocktxt_title">Page introuvable :/</h1>
					<p class="txt_error">Il n'y a rien par ici, cette page n'existe pas, vous avez cassé quelque-chose, accès interdit, en travaux et le document auquel vous tentez d'accéder n'a pas pu être trouvé.</p>
					<a class="call2action call2action_404 call2action_arrow" href="https://axelfiolle.be/">Retourner en lieu sûr</a>
				</section>

			</div>
		</div>

	<?php include("./_includes/inc_jqueries.php"); ?>

	</body>

</html>
