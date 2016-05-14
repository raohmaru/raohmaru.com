<?php
require 'inc/bootstrap.php';
require 'inc/class/Portfolio.php';
$portfolio = new Portfolio();
?>
<?php include("inc/head.php"); ?>
<title>Portafolio | raohmaru.com</title>
<meta name="description" content="Proyectos desarrolladas por Raúl Parralejo: HTML, Flash, Juegos, animación, programación.">
<meta name="keywords" content="trabajos,proyectos,web,html,flash,juego,aplicacion" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="canonical" href="http://raohmaru.com/portfolio">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/vendor/modernizr-2.5.3.min.js"></script>
</head>

<body class="section portfolio">
<?php include("inc/canvas.php"); ?>
<div id="container">	
	<?php
	$menu_selected = 'portfolio';
	include("inc/menu.php");
	?>
	
	<section id="main" role="main">		
		<div id="content">
			<article class="portfolio-cat">
				<?php
				echo $portfolio->Build("html", "HTML");
				echo $portfolio->Build("flash", "Flash");
				echo $portfolio->Build("game", "Game");
				?>
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
<script src="/js/libs/iscroll.min.js"></script>

<script>
$(document).ready(function() {
	raoh.init();
	raoh.portfolio.init();
});
</script>

<?php include("inc/analytics.php"); ?>
</body>
</html>