<?php 	
	require 'inc/head.php'; 
	require 'inc/cabecera.php'; ?>
<div class="container">
<?php 
	$titulo=RUTA_POSTS.$_GET["post"];
	echo leerArchivo($titulo);
?>
</div>
<?php require 'inc/pie.php';  ?>	 
</body>
</html>