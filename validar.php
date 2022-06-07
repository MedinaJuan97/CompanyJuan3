<?php 
$usuario=$_POST['usuario'];
$contraseña=$_POST['contraseña'];
session_start();
$_SESSION['usuario']=$usuario;

//$conexion=mysqli_connect("localhost","root","jua123","Company");
include('db.php');

$consulta="SELECT*FROM Login where Usuario='$usuario' and Contrasena='$contraseña'";
$resultado=mysqli_query($conexion,$consulta);

$filas=mysqli_num_rows($resultado);

if($filas){
	header("location:usuarios/control.php");
}else{
	?>
	<?php  
	include("index.php");
	?>
	<div class="text-md-center">
		<br>
	<h3 class="bad">ERROR EN LA AUTENTICACIÓN</h3>
	</div>
	<?php
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>