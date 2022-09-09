<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<link href='https://fonts.googleapis.com/css?family=Oswald:400,300,700' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="estilos.css">
	<title>Paginacion</title>
</head>
<body>
	<div class="contenedor">
		<h1>Articulos</h1>
		<!--aquí se colocan los DIFERENTES ARTÍCULOS -->
		<section class="articulos">
			<ul> <!-- aunque solo haya un elemento se va a ir repetiendo porque se trata de bucle foreach -->  
				<?php foreach ($articulos as $articulo): ?> <!-- al ser un bucle foreach se va mostrando cada uno, está haciendo el recorrido -->
					<li><?php echo $articulo['id'] . '.- ' . $articulo['articulo']; ?></li>
				<?php endforeach; ?>
			</ul>
		</section>

		<div class="paginacion">
			<ul>
				<!-- Establecemos cuando el boton de "Anterior" estara desabilitado -->
				<?php if($pagina == 1): ?>
					<li class="disabled">&laquo;</li>
				<?php else: ?> <!--Si la clase es desactivado -->
					<li><a href="?pagina=<?php echo $pagina - 1 ?>">&laquo;</a></li>
				<?php endif; ?> <!-- aquí utiliza el enlace para restar-->

				<!--Ejecutamos un ciclo para mostrar las paginas -->
				<?php 
					for($i = 1; $i <= $numeroPaginas; $i++){
						if ($pagina === $i) {
							// se está refiriendo a la página donde nos encontramos en ese momento. 
							//Una cosa es el número total de página y la otra es la página donde estoy. Es diferente el contenido de lo que me va a mostrar. (con el GET eso se va a ver. 
							echo "<li class='active'><a href='?pagina=$i'>$i</a></li>";
						} else {
							echo "<li><a href='?pagina=$i'>$i</a></li>";
						}
					}
				 ?>

				<!-- Establecemos cuando el boton de "Siguiente" estara desabilitado -->
				<?php if($pagina == $numeroPaginas): ?>
					<li class="disabled">&raquo;</li>
				<?php else: ?>
					<li><a href="?pagina=<?php echo $pagina + 1 ?>">&raquo;</a></li>
				<?php endif; ?>
					
			</ul>
		</div>
	</div>
</body>
</html>