<?php include("inc/head.php"); ?>
<title>raohmaru.com</title>
<meta name="description" content="Sitio web de Raúl Parralejo. Programación y desarrollo de aplicaciones web y videojuegos">
<meta name="keywords" content="desarrollo,programación,frontend,web,html,html5,css,javascript,flash,actionscript,móvil,juegos" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/libs/modernizr-3.3.1.min.js"></script>
</head>

<body class="home" data-raoh-init="home">
<?php include("inc/canvas.php"); ?>
<div id="container">
	<section id="main" role="main">
		<img src="/img/r.png" width="199" height="240" alt="Monograma de Raúl Parralejo" id="home-logo" />
		<nav id="menu" role="navigation">
			<ul>
				<li id="menu-about" class="menu-anim-start"><a href="/about" rel="author">Acerca de</a></li>
				<li id="menu-portfolio" class="menu-anim-start"><a href="/portfolio" rel="section">Portafolio</a></li>
				<li id="menu-contact" class="menu-anim-start"><a href="/contact" rel="section">Contacto</a></li>
			</ul>
		</nav>
	</section>
	
	<?php include("inc/footer.php"); ?>
</div>

<?php include("inc/js-vendor.php"); ?>

<!-- scripts concatenated and minified via build script -->
<script src="/js/plugins.js"></script>
<script src="/js/script.js"></script>
<!-- end scripts -->

<?php include("inc/analytics.php"); ?>
</body>
</html>