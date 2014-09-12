<?php
$con = mysqli_connect("50.31.138.79", "diegoxt","perro562",'diegoxt_safemans');
if ($con->connect_errno)
{
       echo "Fallo al conectar a MySQL: (" . connect_errno . ") " . connect_error;
       exit();
}else{

		echo "coneccion exitosa";

}
     
?>