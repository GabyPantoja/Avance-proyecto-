<?php


	
	$descripcion_pieza =$_GET ["descripcion_pieza"];
	$existencia_pieza=$_GET ["existencia_pieza"];
	$catalogo=$_GET ["catalogo"];
	$proveedor=$_GET ["proveedor"];
	
	

	echo "Descripcion  ".$descripcion_pieza." </br>";
	echo "Existencia de piezas".$existencia_pieza." </br>";
	echo "catalogo ".$catalogo."</br>";
	echo "proveedor ".$proveedor."</br>";
	
	
	
		$servername="localhost"; 
		$username="root";
		$password=""; 
		$database="inventarios"; 
		
		//2.- conectarme a la bd
		$bandera_conexion=true;
		$conexion=mysqli_connect($servername, $username, $password,$database);
		
		//validar conexion
		if($conexion){
			echo "Conexion exitosa</br>";
		}
		else {
			echo "Conexion fallida</br>";
			$bandera_conexion=false;
		}
		
		//2.Ejecutando consulta
	
	
		if($bandera_conexion==true){
			echo "Ejecutanndo query </br>";
			//2.1 Estableciendo el query a ejecutar
			$query="INSERT INTO refacciones (id_refaccion,descripcion_pieza, existencia_pieza, catalogo, proveedor)
			VALUES (NULL,'".$descripcion_pieza."', '".$existencia_pieza."', '".$catalogo."', '".$proveedor."')" ;
			echo $query."</br>";
			//2.2 Ejecutando consulta
			$bandera_resultados=true;
			$resultados=mysqli_query($conexion,$query);
			if($resultados){ //si hubo resultados
			echo"Consulta ejecutada con exito </br>";
			
			}
			else {
				echo "Consulta no ejecutada </br>";
			}
		}
		
?>