<?php 
	require 'config.php';

function listarArchivos(){
	$archivos=scandir(RUTA_POSTS);
	$salida="";
 	for ($i=0; $i < count($archivos); $i++) { 
 		if($archivos[$i]!=='.' && $archivos[$i]!=='..'){
 			$salida.= "<a href=index.php?post=$archivos[$i]>$archivos[$i]</a><br>";
 		}
 	}

 	return $salida;
}

function calculaNombreArchivo($titulo){
	$minusc=strtolower($titulo);
	$sinEspacios=str_replace(" ", "-", $minusc);
	$nombreArchivo=RUTA_POSTS.$sinEspacios.EXTENSION;

	return $nombreArchivo;
}

function escribirArchivo($titulo,$contenido){

	$archivo = fopen($titulo, 'w+') or die("No se puede crear el archivo");
	$resp=fwrite($archivo, $contenido);
	fclose($archivo);
}

function leerArchivo($titulo){
	if(file_exists($titulo)){
		$archivo = fopen($titulo, 'r');
		$contenido = fread($archivo,filesize($titulo));
		fclose($archivo);
	}
	else{
		$contenido="No existe el archivo $titulo";
	}

	return $contenido;
}

function crearEnlaces($titulo){
	$contenido=calculaNombreArchivo($titulo).",$titulo".PHP_EOL;
	$manejador=fopen(RUTA_POSTS.NOMBRE_MENU, 'a');
	$resp=fwrite($manejador, $contenido);
	fclose($manejador);

}

function creaListaEnlaces(){
	$salida="Sin entradas";
	if(file_exists(RUTA_POSTS.NOMBRE_MENU)){
		$lineas=file(RUTA_POSTS.NOMBRE_MENU);
		if(count($lineas)==0){return $salida; }
		$salida="";
		for($i=0;$i<count($lineas);$i++){
			$parte=explode(',', $lineas[$i]);
			$salida.= "<a href=index.php?post=$parte[0]>$parte[1]</a><br>";
		}
	}

	return $salida;
		
	}


 ?>
