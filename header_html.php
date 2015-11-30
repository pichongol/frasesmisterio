<!DOCTYPE html>
<!--[if lt IE 7 ]><html class="ie ie6" lang="es"> <![endif]-->
<!--[if IE 7 ]><html class="ie ie7" lang="es"> <![endif]-->
<!--[if IE 8 ]><html class="ie ie8" lang="es"> <![endif]-->
<!--[if (gte IE 9)|!(IE)]><!--><html lang="es"> <!--<![endif]-->
<head>

	<!--Basic Page Needs-->
	<title><?=$title?></title>
	<meta charset="utf-8">
	<meta name="description" content="Las Mejores Frases - FrasesMisterio.com">

	<!--Mobil Metas-->
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

	<!--Css-->
	<link rel="stylesheet" href="/css/style.css">
	<link rel="stylesheet" href="/css/modal.css">

	<!--Javascript-->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
	<script src="/js/jquery.custom.js"></script>
	<script src="/js/jquery.simplemodal.js"></script>
	<script type="text/javascript" src="/js/jquery.cookies.js"></script>

	<!--[if lt IE 9]>
	<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
	<![endif]-->

	<!-- Favicons -->
	<link rel="shortcut icon" type="image/x-icon" href="/images/favicon.ico" />
	<link rel="apple-touch-icon" href="/images/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="/images/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="/images/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="/images/apple-touch-icon-152x152.png" />

	<meta property="og:title" content="<?=$title?>"/>
	<meta property="og:url" content="<?=$url?>"/>
	<meta property="og:description" content="<?=$description?>"/>
	<? if(isset($shareImage)) { ?>
	<meta property="og:image" content="<?=$shareImage?>"/>
	<meta property="og:image:type" content="image/jpg"/>
	<? if($name){ ?>
	<meta property="og:image:width" content="800"/>
	<meta property="og:image:height" content="420"/>
	<? } elseif(($settings['type'] == "apps") || ($settings['type'] == "appsfechaambos")){ ?>
	<meta property="og:image:width" content="1024"/>
	<meta property="og:image:height" content="600"/>
	<? } ?>
	<? } ?>

	<script type="text/javascript">
	  var _gaq = _gaq || [];
	  _gaq.push(['_setAccount', '<?=$analytics?>']);
	  _gaq.push(['_trackPageview']);

	  (function() {
	    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
	    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
	    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
	  })();
	</script>

	<script src="https://code.jquery.com/jquery.js"></script>
	<script src="/js/jquery.simplemodal.js"></script>
	<script type="text/javascript" src="/js/jquery.cookies.js"></script>
	<script type="text/javascript" src="/js/main.js"></script>
</head>

<body>
<div id="fb-root"></div>
<script>
	(function(d, s, id) {
	  var js, fjs = d.getElementsByTagName(s)[0];
	  if (d.getElementById(id)) return;
	  js = d.createElement(s); js.id = id;
	  js.src = "//connect.facebook.net/<?=$locale?>/sdk.js#xfbml=1&version=v2.4";
	  fjs.parentNode.insertBefore(js, fjs);
	}(document, 'script', 'facebook-jssdk'));
</script>

<div class="header-bar">
	<div class="container">
		<header class="header">
			<div class="logo-header">
				<h1><a href="/"><?=_t("")?></a></h1>
				<div>Frases</div>
			</div>
			<div class="clearfix"></div>
		</header>
	</div>
</div>