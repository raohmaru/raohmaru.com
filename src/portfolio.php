<?php
require 'inc/bootstrap.php';
require 'inc/class/Portfolio.php';
$portfolio = new Portfolio();
?>
<?php include("inc/head.php"); ?>
<title>Portafolio | raohmaru.com</title>
<meta name="description" content="Proyectos desarrolladas por Raúl Parralejo: websites, interactivos, juegos, animación, programación.">
<meta name="keywords" content="trabajos,proyectos,web,html,flash,juego,aplicacion" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="canonical" href="https://raohmaru.com/portfolio">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/libs/modernizr-3.3.1.min.js"></script>
<script src="/js/foo.js"></script>
</head>

<body class="section portfolio" data-raoh-init="portfolio">
<?php include("inc/canvas.php"); ?>
<div id="container">	
	<?php
	$menu_selected = 'portfolio';
	include("inc/menu.php");
	?>
	
	<section id="main" role="main">		
		<div id="content">
			<article class="portfolio-cat">
				<?php echo $portfolio->Build(); ?>
			</article>
		</div>
	</section>
	
	<?php include("inc/footer.php"); ?>
</div>

<?php include("inc/js-vendor.php"); ?>

<!-- scripts concatenated and minified via build script -->
<script src="/js/plugins.js"></script>
<script src="/js/script.js"></script>
<!-- end scripts -->
<script src="/js/modules/iscroll.js"></script>

<?php include("inc/analytics.php"); ?>
</body>
</html>