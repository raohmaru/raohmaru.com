<?php include("inc/head.php"); ?>
<title>Página no encontrada | raohmaru.com</title>
<meta name="description" content="Página no encontrada. El mogwai pregunta: ¿qué buscas?">
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/vendor/modernizr-3.3.1.min.js"></script>
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