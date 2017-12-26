<?php include("inc/head.php"); ?>
<title>Acerca de | raohmaru.com</title>
<meta name="description" content="Biografía y trayectoria profesional de Raúl Parralejo">
<meta name="keywords" content="acerca,biografia,vida,profesional,programador,web,aplicaciones,juegos" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="canonical" href="https://raohmaru.com/about">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/libs/modernizr-3.3.1.min.js"></script>
</head>

<body class="section about">
<?php include("inc/canvas.php"); ?>
<div id="container">	
	<?php
	$menu_selected = 'about';
	include("inc/menu.php");
	?>
	
	<section id="main" role="main">		
		<div id="content">
			<h2>Raúl Parralejo Nieto</h2>
			<article>
				<div id="about-short" class="about-descr">
					<p>Programador creativo especializado en el <strong>desarrollo de aplicaciones web (frontend) y juegos</strong> para escritorio y móvil.</p>
					<p>Áreas de conocimiento:</p>
					<ul class="default">
						<li><strong>Maquetación HTML y HTML5</strong>, cumpliendo los estándares y optimización para SEO.</li>
						<li>Control de la presentación con <strong>CSS 2.1, CSS3 y SASS</strong>.</li>
						<li>Desarrollo web <strong>accesible</strong>, soporte <strong lang="en">cross-browser</strong>, <strong lang="en">responsive web design</strong>.</li>
						<li><strong>Programación JavaScript</strong>, utilizando los principales <i lang="en">frameworks</i> y librerias.</li>
						<li>Programación en <strong>lenguajes de servidor</strong> (PHP, Ruby, Python, node.js) y bases de datos (MySQL).</li>
						<li>Desarrollo de juegos y aplicaciones multimedia en <strong>Adobe Flash</strong> y <strong>ActionScript</strong>, para escritorio y plataformas móviles (con PhoneGap).</li>
					</ul>
					<p>Desde <time>2001</time> dedicado al desarrollo para el mundo online, trabajando en proyectos de distina envergadura y aportando nuevas experiencias para el usuario.</p>
				</div>
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

<?php include("inc/analytics.php"); ?>
</body>
</html>