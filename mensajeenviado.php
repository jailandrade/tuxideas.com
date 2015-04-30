<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<link rel="stylesheet" href="css/start.css">
<link rel="stylesheet" href="css/tuxideas.css">
<link type="text/plain" rel="author" href="http://tuxideas.com/humans.txt">
<title>Tuxideas</title>
</head>
<body>
<div class="site home">
  <header class="site-header">
    <div class="site-name">
      <img class="site-logo" src="img/logo.png" alt="" title="Created by Julien Deveaux from The Noun Project">
      <h1 class="title"><a href="#">Tuxideas</a></h1>
    </div>
    <nav class="site-navigation" role="navigation">
      <ul class="site-menu">
        <li><a href="#top">Home</a></li>
        <li><a href="#services">Servicios</a></li>
        <li><a href="#work">Trabajo</a></li>
        <li><a href="#team">Equipo</a></li>
        <li><a href="#contact">Contacto</a></li>
      </ul>
    </nav>
  </header>
  <div class="site-message site-section">
  <div class="site-section-container">
	<?php
		$to = 'jailandrade@gmail.com';
		$subject = $_POST['subject'];
		$body = 'Hola mi nombre es: ' . $_POST['name'] . ' mi email es: ' . $_POST['email'] . 'y mi mensaje es: ' . $_POST['message'];

		mail($to, $subject, $body);

		echo "<p>Gracias por escribirnos " . $_POST['name'] . " en breve le responderemos</p>";
	?>
	</div>
	</div>
	<footer class="site-footer">
	<div class="site-section-container">
		<div class="site-section-content">
	    <div class="left">
	      <div class="social-networks">
	        <a class="icon twitter" href="http://twitter.com/tuxideas" target="_blank"></a>
	        <a class="icon github" href="http://github.com/tuxideas" target="_blank"></a>
	      </div>
	      <div class="copyright">
	        <p>Todos los derechos reservados &copy; 2011 - 2015 Tuxideas</p>
	      </div>
	    </div>
	    <div class="right">
	      <div class="made-with-love">
	        <p>Hecho con <img src="img/noun_1308_cc.png" alt="Love" title="Heart Icon created by John Caserta for The Noun Project"> y HTML5</p>
	      </div>
	    </div>
		</div>
	</div>
	</footer>
</div>
</body>
</html>
