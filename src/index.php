<?php include("inc/head.php"); ?>
<title>raohmaru.com</title>
<meta name="description" content="Sitio web de Raúl Parralejo. Programación y desarrollo de aplicaciones web y juegos">
<meta name="keywords" content="desarrollo,programación,frontend,web,html,html5,css,javascript,flash,actionscript,móvil,juegos" />

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">

<link rel="stylesheet" href="/css/style.css">

<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

<!-- All JavaScript at the bottom, except this Modernizr build.
   Modernizr enables HTML5 elements & feature detects for optimal performance.
   Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="/js/libs/modernizr-2.5.3.min.js"></script>
</head>

<body class="home">
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


<!-- JavaScript at the bottom for fast page loading -->

<?php include("inc/js-vendor.php"); ?>

<!-- scripts concatenated and minified via build script -->
<script src="/js/plugins.js"></script>
<script src="/js/script.js"></script>
<!-- end scripts -->

<script>
$(document).ready(function() {
	raoh.init();
	raoh.home.init();
});
</script>

<?php include("inc/analytics.php"); ?>
</body>
</html>