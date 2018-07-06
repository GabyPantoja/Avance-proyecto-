<?php


	$nombre =$_GET["nombre"];
	$apellido_paterno =$_GET ["apellido_paterno"];
	$apellido_materno=$_GET ["apellido_materno"];
	$correo=$_GET ["correo"];
	$telefono=$_GET ["telefono"];
	
	
	echo "Nombre ".$nombre." </br>";
	echo "Apellido paterno ".$apellido_paterno." </br>";
	echo "Apellido materno ".$apellido_materno." </br>";
	echo "correo ".$correo ."</br>";
	echo "telefono ".$telefono."</br>";
	
	
	
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
			$query="INSERT INTO usuarios (id_usuario,nombre, apellido_paterno, apellido_materno, correo, telefono)
			VALUES (NULL, '".$nombre ."', '".$apellido_paterno."', '".$apellido_materno."', '".$correo."', '".$telefono."')" ;
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