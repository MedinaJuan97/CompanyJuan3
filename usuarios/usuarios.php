<?php

//print_r($_POST);
//echo $_POST['txtId'];
//echo "<br/>";
//echo $_POST['txtNombre'];
//echo "<br/>";
//echo $_POST['txtPuesto'];
//echo "<br/>";
//echo $_POST['txtUsuario'];
//echo "<br/>";
//echo $_POST['txtContrasena'];
//echo "<br/>";

$txtId=(isset($_POST['txtId']))?$_POST['txtId']:"";
$txtNombre=(isset($_POST['txtNombre']))?$_POST['txtNombre']:"";
$txtPuesto=(isset($_POST['txtPuesto']))?$_POST['txtPuesto']:"";
$txtUsuario=(isset($_POST['txtUsuario']))?$_POST['txtUsuario']:"";
$txtContrasena=(isset($_POST['txtContrasena']))?$_POST['txtContrasena']:"";

$accion=(isset($_POST['accion']))?$_POST['accion']:"";



$accionAgregar="";
$accionModificar=$accionEliminar=$accionCancelar="disabled";
$mostrarModal=false;

include ("../conexion/conexion.php");

switch ($accion) {
	case "btnAgregar":
			$sentencia=$pdo->prepare("INSERT INTO Usuarios(Nombre,Puesto,Usuario,Contrasena) 
			VALUES (:Nombre,:Puesto,:Usuario,:Contrasena)");

			$sentencia->bindParam(':Nombre',$txtNombre);
			$sentencia->bindParam(':Puesto',$txtPuesto);
			$sentencia->bindParam(':Usuario',$txtUsuario);
			$sentencia->bindParam(':Contrasena',$txtContrasena);
			$sentencia->execute();

	break;
	case "btnModificar":

			$sentencia=$pdo->prepare("UPDATE Usuarios SET
			Nombre=:Nombre,
			Puesto=:Puesto,
			Usuario=:Usuario,
			Contrasena=:Contrasena WHERE
			Id=:Id");

			$sentencia->bindParam(':Nombre',$txtNombre);
			$sentencia->bindParam(':Puesto',$txtPuesto);
			$sentencia->bindParam(':Usuario',$txtUsuario);
			$sentencia->bindParam(':Contrasena',$txtContrasena);
			$sentencia->bindParam(':Id',$txtId);
			$sentencia->execute();

			header('Location: listado.php');

		echo $txtId;
		echo "Presionaste btnModificar";
	break;
	case "btnEliminar":

			$sentencia=$pdo->prepare("DELETE FROM Usuarios WHERE Id=:Id");
			$sentencia->bindParam(':Id',$txtId);
			$sentencia->execute();
			header('Location: listado.php');

		echo $txtId;
		echo "Presionaste btnEliminar";
	break;
	case "btnCancelar":
			header('Location: listado.php');
	break;

	case "Seleccionar":
		$accionAgregar="disabled";
		$accionModificar=$accionEliminar=$accionCancelar="";
		$mostrarModal=true;
	break;




}

    $sentencia= $pdo->prepare("SELECT * FROM `Usuarios`");
    $sentencia->execute();
    $listaUsuarios=$sentencia->fetchAll(PDO::FETCH_ASSOC);

    //print_r($listaUsuarios);


?>