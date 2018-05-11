<?php 	
	require 'inc/head.php';
	require 'inc/cabecera.php'; ?>
	<div class="container">
		<form action="lector.php" method="post" class="twelve column">
			<div>
			<label for="tit">Título del post</label>
			<input id="tit" type="text" name="titulo" maxlength="255" required>
			</div>
			<div>
			<label for="cuerpo">Artículo</label>
			<textarea name="cuerpo" id="cuerpo" cols="50" rows="50" required >
				
			</textarea>
			</div>
			<input type="submit" value="Enviar">
		</form>
	</div>
<?php require 'inc/pie.php';  ?>
</body>
</html>