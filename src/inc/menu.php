<?php
if(!isset($menu_selected))
	$menu_selected = '';
?>
	<nav id="menu" role="navigation">
		<a href="/" id="menu-logo" rel="home" title="Página principal">Página principal</a>
		<ul>
			<li id="menu-about"><h1><a href="/about" <?php if($menu_selected == 'about') echo 'class="selected"' ?> rel="author" title="Acerca de">Acerca de</a></h1></li>
			<li id="menu-portfolio"><a href="/portfolio" <?php if($menu_selected == 'portfolio') echo 'class="selected"' ?> rel="section" title="Portafolio">Portafolio</a></li>
			<li id="menu-contact"><a href="/contact" <?php if($menu_selected == 'contact') echo 'class="selected"' ?> rel="section" title="Contacto">Contacto</a></li>
		</ul>
	</nav>