<!DOCTYPE html>
<html lang="es">
<head><meta http-equiv="Content-Type" content="text/html; charset=gb18030">
  
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta name="description" content="Login +58MINING">
  <meta name="author" content="Miguel Fraga ,Diego Di Salvatore and Gabriel Taccone">

  <title>+58MINING</title>

  <link rel="stylesheet" href="CSS/bootstrap.min.css">
  <link rel="stylesheet" href="CSS/EstilosC30days.css">
  <link rel="stylesheet" href="CSS/animate.css">
</head>

<body>

<!-- (Sección 1) Contenedor con el contador e imágen de fondo -->
<section class="container-fluid cuadroTotal">
	<div class="row sectionCont">
		<div class="col-md-2 col-lg-2"></div>
		<div class="col-md-8 col-lg-8">
			<div id="p1" class="contador animated">
    			<p id="p2" class="text-center animated postext"><?php echo $params['days']; ?></p>
    			<p class="text-center dayC"> DAYS </p>
    		</div>
  		</div>		
  		<div class="col-md-2 col-lg-2"></div>
	</div> 
</section>

  <script src="JS/jquery.js"></script>
  <script src="JS/bootstrap.min.js"></script>
  <script src="JS/jquery.easing.min.js"></script>
  <script src="JS/efectEntry.js"></script>
</body>
</html>