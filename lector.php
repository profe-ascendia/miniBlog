<?php
	require 'inc/head.php';
 	require 'inc/cabecera.php'; ?>
<div class="container">
	<?php 

		$titulo=calculaNombreArchivo($_POST["titulo"]);
		crearEnlaces($_POST["titulo"]);
		$contenido = $_POST["titulo"]."<br><br>". $_POST["cuerpo"];
		escribirArchivo($titulo,$contenido);
		echo leerArchivo($titulo);

	 ?>
	 	
	 </div>
<?php require 'inc/pie.php';  ?>	
</body>
</html>