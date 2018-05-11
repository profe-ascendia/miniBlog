<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
		$prueba=fopen('ejemplo.txt','w+');
		$resp=fwrite($prueba, "Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eius eligendi, libero iusto ducimus modi, voluptas exercitationem laudantium animi deleniti perferendis, est omnis fugiat ab quas itaque, quasi maiores consequatur autem.");
		fclose($prueba);
	 ?>

	 <?php 
	 	$prueba=fopen('ejemplo.txt', 'r');
	 	$resp=fread($prueba, filesize('ejemplo.txt'));
	 	fclose($prueba);
	 	echo $resp;

	  ?>

</body>
</html>