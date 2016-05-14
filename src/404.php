<?php include("inc/head.php"); ?>
<title>Página no encontrada | raohmaru.com</title>
<meta name="description" content="Página no encontrada. El mogwai pregunta: ¿qué buscas?">

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="/css/style.css">

<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

<!-- All JavaScript at the bottom, except this Modernizr build.
   Modernizr enables HTML5 elements & feature detects for optimal performance.
   Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="/js/libs/modernizr-2.5.3.min.js"></script>
</head>

<body class="section e404">
<?php include("inc/canvas.php"); ?>
<div id="container">
	<?php
	include("inc/menu.php");
	?>
	
	<section id="main" role="main">
		<div id="e404-hello">
			<p>Sr. usuario,<br />supongo</p>
		</div>
		<img src="/img/404-v2.png" width="199" height="240" alt="?" id="e404-logo" />
	</section>
	
	<?php include("inc/footer.php"); ?>
</div>


<!-- JavaScript at the bottom for fast page loading -->

<?php include("inc/js-vendor.php"); ?>

<!-- scripts concatenated and minified via build script -->
<script src="/js/plugins.js"></script>
<script src="/js/script.js"></script>
<!-- end scripts -->

<script>
$(document).ready(function() {
	raoh.init();
	raoh.e404.init();
});
</script>

<?php include("inc/analytics.php"); ?>
</body>
</html>