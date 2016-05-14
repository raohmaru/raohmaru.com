<?php include("inc/head.php"); ?>
<title>Contacto | raohmaru.com</title>
<meta name="description" content="Datos de contacto de Raúl Parralejo, y formulario para contactar">
<meta name="keywords" content="contacto,email,linkedin,twitter,blog" />

<!-- Mobile viewport optimized: h5bp.com/viewport -->
<meta name="viewport" content="width=device-width">
<link rel="canonical" href="http://raohmaru.com/contact">
<link rel="stylesheet" href="/css/style.css">

<!-- More ideas for your <head> here: h5bp.com/d/head-Tips -->

<!-- All JavaScript at the bottom, except this Modernizr build.
   Modernizr enables HTML5 elements & feature detects for optimal performance.
   Create your own custom Modernizr build: www.modernizr.com/download/ -->
<script src="/js/libs/modernizr-2.5.3.min.js"></script>
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
				
				<h2 class="contact-sym" title="Teléfono">.<span style="font-size:23px">)</span>)</h2>
				<p>+34 625 026 050</p>
				
				<h2 class="lc contact-sym" title="CV en LinkedIn">in</h2>
				<p><a href="http://es.linkedin.com/in/raulpn" target="_blank" rel="me external">es.linkedin.com/in/raulpn</a></p>
				
				<h2 class="contact-sym" title="Twitter">#</h2>
				<p><a href="http://twitter.com/raulparralejo" target="_blank" rel="external">twitter.com/raulparralejo</a></p>
				
				<h2 class="lc contact-sym" title="Twitter">b!</h2>
				<p><a href="http://raohmaru.com/blog/">raohmaru.com/blog</a></p>

				<h2 class="contact-sym" title="Dónde">≈</h2>
				<address><a href="http://osm.org/go/xUZ7g6CA-?m=" target="_blank" rel="external">Cornellà de Llobregat</a> (Barcelona)</address>
			</article>
			
			
			<!--<aside id=contact-aside>
				<?php if(isset($_GET['ok'])) { ?>
					
					<h3><b>¡Enviado!</b><br><br>En breve recibirás una contestación.</h3>
				
				<?php } else { ?>
				
					<?php if(isset($_GET['error'])) { ?>
						<p id=contact-error><strong>¡Uops! Ha fallado algo en el envío...</strong></p>
					<?php } else { ?>					
						<h3>También puedes contactar o enviar comentarios a través de este formulario.</h3>
					<?php } ?>
					
					<form action="/contact-send" method=post enctype="application/x-www-form-urlencoded" id=contact-form>
						<label for=username>Nombre</label><br>
						<input type=text name=username id=username /><br>
						<label for=email>E-mail</label><br>
						<input type=text name=email id=email /><br>
						<label for=comment>Comentario</label><br>
						<textarea name=comment id=comment></textarea>
						<p id=contact-send><input type=submit value=Enviar class=action-button /></p>
					</form>
					
					<div id=contact-message>
						<p></p>
						<div><button type=button class=action-button>OK</button></div>
					</div>
					
				<?php } ?>
			</aside>-->
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

<script>
$(document).ready(function() {
	raoh.init();
	// raoh.contact.init();
});
</script>

<?php include("inc/analytics.php"); ?>
</body>
</html>