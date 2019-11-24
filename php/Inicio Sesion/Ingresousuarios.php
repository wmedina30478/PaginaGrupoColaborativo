<?php
//****************FIELDSET DATOS DE REGISTRO****************
$conexion = mysqli_connect("localhost", "root", "", "soluciones_medicas");
//Recibir datos y almacenarlos en variables
$usuario=$_POST["usuario"];
$contrasena=$_POST["contrasena"];
$repcontrasena=$_POST["repcontrasena"];
//Consulta para insertar datos
$insertar="INSERT INTO Ingresousuarios (Nombre_Usuario, Contraseña_Usuario, Repcontrasena_Usuario) VALUES ('$usuario','$contrasena','$repcontrasena')";
//Verificara si el usuario esta registrado
$verificar_usuario = mysqli_query($conexion, "select * from Ingresousuarios where Nombre_Usuario = '$usuario'");
if (mysqli_num_rows($verificar_usuario) > 0){
	echo '<script>
	       alert("El usuario ya esta registrado");
           window.history.go(-1);
            </script>';
	exit;
}
//Ejecutar consulta
$resultado=mysqli_query($conexion, $insertar);
//Mensaje si hay o no error de conexión BD
if(!$resultado){
	echo '<script>
	       alert("Error de Registro de Datos");
	       window.history.go(-1);
            </script>';
}else{
    
	echo '<script>
	       alert("Su registro fue exitoso");
           window.history.go(-1);
            </script>';
}
   
//Cerra conexion
mysqli_close($conexion);
?>