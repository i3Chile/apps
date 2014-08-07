nombre, apellido, rut, email, profe, fecha, estado,empresa

<?php
error_reporting(0);
session_start();
$con = new mysqli("localhost", "root","" , "safemans1");
if ($con->connect_errno)
{
       echo "Fallo al conectar a MySQL: (" . $con->connect_errno . ") " . $con->connect_error;
       exit();
}
@mysqli_query($con, "SET NAMES 'utf8'");
if ($_POST['nombre'] == null || $_POST['apellido']|| $_POST['rut']|| $_POST['email']|| $_POST['profe']|| $_POST['fecha']|| $_POST['estado']|| $_POST['empresa'] == null)
{
    echo '<span>Por favor complete todos los campos.</span>';
}
else
{
    $nombre = mysqli_real_escape_string($con, $_POST['nombre']);
    $apellido = mysqli_real_escape_string($con, $_POST['apellido']);
    $rut = mysqli_real_escape_string($con, $_POST['rut']);
    $email = mysqli_real_escape_string($con, $_POST['email']);
    $profe = mysqli_real_escape_string($con, $_POST['profe']);
    $fecha = mysqli_real_escape_string($con, $_POST['fecha']);
    $estado = mysqli_real_escape_string($con, $_POST['estado']);
    $empresa = mysqli_real_escape_string($con, $_POST['empresa']);

   $sql = "INSERT INTO `detalle_usuario`(`RUT`, 
                                        `NOMBRE`, 
                                        `APELLIDO`, 
                                        `PROFECION`, 
                                        `FECHA_NACIMIENTO`, 
                                        `EMAIL`, 
                                        `ESTADO_CIVIL`, 
                                        `EMPRESA`) VALUES ('".$rut."',
                                                            '".$nombre."',
                                                            '". $apellido."',
                                                            '".$profe."',
                                                            '".$fecha."',
                                                            '".$email."',
                                                            '".$estado."',
                                                            '".$empresa."')";

mysql_query($sql);
echo "<span>datos actualizados exitosamente</span>';

?>