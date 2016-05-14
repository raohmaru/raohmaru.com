<?php
require 'inc/bootstrap.php';
require 'inc/class/Portfolio.php';

$portfolio = new Portfolio();
$meta_title = "";
$meta_description = "Proyecto o aplicación web desarrollado por Raúl Parralejo.";
$title = "404: Proyecto desconocido";

if( $w = $portfolio->GetObject( $_GET['w'] ) )
{
	$meta_title = $w->T . " - ";
	$meta_description = $w->A2;
	$title = $w->T;
}
else
{
	header("HTTP/1.1 404 Not Found");
}
?>
<?php include("inc/head.php"); ?>
<title><?php echo $meta_title; ?>Portafolio | raohmaru.com</title>
<meta name="description" content="<?php echo $meta_description ; ?>">
<meta name="robots" content="nofollow" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/vendor/modernizr-2.5.3.min.js"></script>
</head>

<body class="section portfolio-work">
<?php include("inc/canvas.php"); ?>
<div id="container">	
	<?php
	$menu_selected = 'portfolio';
	include("inc/menu.php");
	?>
	
	<section id="main" role="main">		
		<div id="content">
			<article>
				<?php if( $w ) { ?>
				<div id="tags">
					<a href="/portfolio" rel="contents"><?php echo $w->t; ?></a>
				</div>
				<?php } ?>
				
				<hgroup>
					<h2><?php echo $title; ?></h2>
					<?php if( $w ) { ?>
						<h3><?php echo $w->A2; ?></h3>
					<?php } ?>
				</hgroup>
					
				<div id="portfolio-work-descr" class="portfolio-desc clearfix">
					<?php if( $w ) { ?>
						<img src="<?php echo $w->I; ?>" id="portfolio-work-img" alt="Una muestra del proyecto" />
						<?php echo $w->D; ?>
					<?php } else { ?>
						<p>Parece que buscas un proyecto que (por el momento) no existe.</p>
						<p>¿Quizá quieras <a href="/contact" rel="section">proponerme algún proyecto </a>?</p>
					<?php } ?>
				</div>
				
				<aside class="clearfix">
					<h3>Otros trabajos</h3>
					<?php echo $portfolio->BuildRandom(3, $w ? $w->L : ''); ?>
				</aside>
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

<script>
$(document).ready(function() {
	raoh.init();
});
</script>

<?php include("inc/analytics.php"); ?>
</body>
</html>