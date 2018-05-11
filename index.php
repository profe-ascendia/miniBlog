<?php 	
	
	require 'inc/head.php';
	echo '<div id="contenedor">';
		require 'inc/cabecera.php'; 
?>
		<main class="container separador">
			<div class="one-third column" id="izq">
				<?php echo creaListaEnlaces();?>
			</div>
			<div class="two-thirds column" id="der">
				<?php 
					if(isset($_GET["post"])){
						$titulo=$_GET["post"];
						echo formatearArchivo($titulo);
					}
					//Mostrar el contenido por defecto
				?>
			</div>
		</main>
		

<?php 
		require 'inc/pie.php'; 

	echo '</div>'; //Fin del contenedor
?>
</body>
</html>