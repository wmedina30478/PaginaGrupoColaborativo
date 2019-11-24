<?php
$usuario=$_POST['usuario'];
$contrasena=$_POST['contrasena'];

//conectar a la base de datos
include("../cn.php");

$consulta="SELECT Nombre_Usuario,Contraseña_Usuario FROM ingresousuarios WHERE Nombre_Usuario ='$usuario' and Contraseña_Usuario='$contrasena'";
$resultado=mysqli_query($conexion, $consulta);

$filas=mysqli_num_rows($resultado);

if($filas>0) {
	header("location:../../index.html");
}
else {
    echo '<script>
	       alert("Verifique su usuario o contraseña");
      <script>';
}
mysqli_free_result($resultado);
mysqli_close($conexion);
?>