<?php
require 'inc/bootstrap.php';
require 'inc/class/Portfolio.php';
$portfolio = new Portfolio();
?>
<?php include("inc/head.php"); ?>
<title>Portafolio | raohmaru.com</title>
<meta name="description" content="Proyectos desarrolladas por Raúl Parralejo: HTML, Flash, Juegos, animación, programación.">
<meta name="keywords" content="trabajos,proyectos,web,html,flash,juego,aplicacion" />

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">

<link rel="canonical" href="http://raohmaru.com/portfolio">

<link rel="stylesheet" href="/css/style.css">

<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

<!-- All JavaScript at the bottom, except this Modernizr build.
   Modernizr enables HTML5 elements & feature detects for optimal performance.
   Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="/js/libs/modernizr-2.5.3.min.js"></script>
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


<!-- JavaScript at the bottom for fast page loading -->

<?php include("inc/js-vendor.php"); ?>

<!-- scripts concatenated and minified via build script -->
<script src="/js/plugins.js"></script>
<script src="/js/script.js"></script>
<!-- end scripts -->
<script src="/js/modules/iscroll.js"></script>

<script>
$(document).ready(function() {
	raoh.init();
	raoh.portfolio.init();
});
</script>

<?php include("inc/analytics.php"); ?>
</body>
</html>