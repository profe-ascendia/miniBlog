<?php 	
	require 'inc/head.php';
	require 'inc/cabecera.php'; ?>
	<?php 
		if(isset($_POST["titulo"])){
			$titulo=calculaNombreArchivo($_POST["titulo"]);
			crearEnlaces($_POST["titulo"]);
			$contenido = $_POST["titulo"]."##". $_POST["cuerpo"];
			escribirArchivo($titulo,$contenido);
			echo "guardado";
			$resultado=leerArchivo($titulo);
			$partes=explode('##', $resultado);
	}

?>
	<div class="container">
		<form action="" method="post" class="twelve column">
			<div>
			<label for="tit">Título del post</label>
			<input id="tit" type="text" name="titulo" maxlength="255" required value="<?php if(isset($_POST["titulo"])){echo $partes[0];
				}
				else { echo '';
				}
				?>">
			</div>
			<div>
			<label for="cuerpo">Artículo</label>
			<textarea name="cuerpo" id="cuerpo" cols="50" rows="50" required ><?php 
			if(isset($_POST["titulo"])){
				echo $partes[1];}?></textarea>
			</div>
			<input type="submit" value="Enviar">
		</form>
	</div>
<?php require 'inc/pie.php';  ?>
</body>
</html>
