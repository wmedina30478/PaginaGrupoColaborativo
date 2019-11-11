<?php
//****************FIELDSET DATOS DE REGISTRO****************
include 'cn.php';
//Recibir datos y almacenarlos en variables
$nombre=$_POST["nombre"];
$identificacion=$_POST["identificacion"];
$fecha=$_POST["fecha"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
if(isset($_POST['registro'])){
//Consulta para insertar datos
$insertar="INSERT INTO Paciente(Nombres, Numero_Identificacion, Fecha_Nacimiento, Numero_Contacto, Correo_Electronico) VALUES ('$nombre','$identificacion','$fecha','$telefono','$correo')";
//Ejecutar consulta
$resultado=mysqli_query($conexion, $insertar);
//Mensaje si hay o no error de conexión BD
if(!$resultado){
	echo '<script>
	       alert("Error de Registro de Datos");
	       window.history.go(-1);
            </script>';
}else{
    
    //@LUIS--Este Script, hace que regrese una pagina atras esto con el fin de que no redirecciones a la pagina del formulario <form action= "php/register.php">, el error esta en que redirecciona pero no deja pasar al formulario FIELDSET SELECCIONA LOS SINTOMAS
    
	echo '<script>
	       window.history.go(-1);
            </script>';
}
    }
//Cerra conexion
mysqli_close($conexion);
?>


<?php
//****************FIELDSET SELECCIONA LOS SINTOMAS****************
include 'cn.php';
//Recibir datos y almacenarlos en variables(Name="INPUT" y "SELECT").
$enfermedad=$_POST["enfermedad"];
$accidente=$_POST["accidente"];
$lesiones=$_POST["lesiones"];
$sintomas=$_POST["sintomas"];
$medicamento=$_POST["medicamento"];
//Name de INMPUT = type="submit".
if(isset($_POST['enviarsintomas'])){
//Consulta para insertar datos.
$insertar="INSERT INTO Sintomas(Sufre_Alguna_Enfermedad, Accidentes_Recientes, Lesiones_Recientes, Presenta_Algun_Sintoma, Medicamentos_Digeridos_Recientemente) VALUES ('$enfermedad','$accidente','$lesiones','$sintomas','$medicamento')";
//Ejecutar consulta.
$resultado=mysqli_query($conexion, $insertar);
//Mensaje si hay o no error de conexión BD.
if(!$resultado){
	echo '<script>
	       alert("Error de Registro de Datos");
	       window.history.go(-1);
            </script>';
}else{
    
    //@LUIS--Este Script, hace que regrese una pagina atras esto con el fin de que no redirecciones a la pagina del formulario <form action= "php/register.php">, el error esta en que redirecciona pero no deja pasar al formulario FIELDSET DIAGNOSTICO
    
	echo '<script>
	       window.history.go(-1);
            </script>';
}
    }
//Cerra conexion
mysqli_close($conexion);
?>


<?php
//****************FIELDSET DIAGNOSTICO****************
include 'cn.php';
//Recibir datos y almacenarlos en variables
$nombre=$_POST["nombre"];
$identificacion=$_POST["identificacion"];
$fecha=$_POST["fecha"];
$telefono=$_POST["telefono"];
$correo=$_POST["correo"];
if(isset($_POST['registro'])){
//Consulta para insertar datos
$insertar="INSERT INTO Paciente(Nombres, Numero_Identificacion, Fecha_Nacimiento, Numero_Contacto, Correo_Electronico) VALUES ('$nombre','$identificacion','$fecha','$telefono','$correo')";
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
	       alert("SU DIAGNOSTICO ES...");
            </script>';
}
    }
//Cerra conexion
mysqli_close($conexion);
?>