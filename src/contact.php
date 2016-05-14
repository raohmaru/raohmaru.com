<?php include("inc/head.php"); ?>
<title>Contacto | raohmaru.com</title>
<meta name="description" content="Datos de contacto de Raúl Parralejo, y formulario para contactar">
<meta name="keywords" content="contacto,email,linkedin,twitter,blog" />
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="canonical" href="http://raohmaru.com/contact">
<link rel="apple-touch-icon" href="apple-touch-icon.png">
<link rel="stylesheet" href="/css/style.css">
<script src="/js/libs/modernizr-3.3.1.min.js"></script>
</head>

<body class="section" id="contact">
<?php include("inc/canvas.php"); ?>
<div id="container">
	<?php
	$menu_selected = 'contact';
	include("inc/menu.php");
	?>
	
	<section id="main" role="main">
		<div id="content">			
			<article>
				<h2 class="contact-sym" title="E-mail">@</h2>
				<p>
					<script type="text/javascript">
					(function(s){
						document.write(s.replace(/[a-zA-Z]/g, function(c){return String.fromCharCode((c<="Z"?90:122)>=(c=c.charCodeAt(0)+13)?c:c-26);}));
					})("<?php echo str_rot13("<a href='mailto:raul@raohmaru.com' rel='nofollow'>raul@raohmaru.com</a>"); ?>");					
					</script>
					<noscript><a href="&#x6d;&#00097;&#000105;&#108;&#x74;&#x6f;&#x3a;&#x72;&#00097;&#x75;&#000108;&#00064;&#x72;&#97;&#111;&#x68;&#109;&#x61;&#000114;&#000117;&#x2e;&#99;&#111;&#000109;" >&#x72;&#x61;&#x75;&#x6c;&#x40;&#000114;&#x61;&#x6f;&#000104;&#x6d;&#x61;&#114;&#000117;&#00046;&#00099;&#x6f;&#000109;</a></noscript>
				</p>
				
				<h2 class="lc contact-sym" title="CV en LinkedIn">in</h2>
				<p><a href="http://es.linkedin.com/in/raulpn" target="_blank" rel="me external">es.linkedin.com/in/raulpn</a></p>
				
				<h2 class="contact-sym" title="Twitter">#</h2>
				<p><a href="http://twitter.com/raulparralejo" target="_blank" rel="external">twitter.com/raulparralejo</a></p>
				
				<h2 class="lc contact-sym" title="Twitter">b!</h2>
				<p><a href="http://raohmaru.com/blog/">raohmaru.com/blog</a></p>

				<h2 class="contact-sym" title="Dónde">≈</h2>
				<address><a href="http://osm.org/go/xUZ7g6CA-?m=" target="_blank" rel="external">Cornellà de Llobregat</a> (Barcelona)</address>
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
	// raoh.contact.init();
});
</script>

<?php include("inc/analytics.php"); ?>
</body>
</html>