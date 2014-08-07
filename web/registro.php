<?php

    function solostring($nombre)
    {
        if(filter_var($nombre,FILTER_VALIDATE_INT))
            echo'ingreso correcto'
            else{
            
            echo'no ingrese numeros'
            mysql_close($conexion);
   
        }
    }

    	function mailrep($email,$nombre,$password,$rpass)
        {
       
	$email=$_POST['email'];
    $nombre=$_POST['nombre'];
	$password= $_POST['password'];
	$rpass=$_POST['rpass'];
    echo $email;

    echo $nombre;

    echo $password;
        
	require("connect_db.php");
    
	$checkemail=mysql_query("SELECT * FROM usuario WHERE email='$email'");
	$check_mail=mysql_num_rows($checkemail);
		if($password==$rpass){
			if($check_mail>0){
				echo ' <script language="javascript">alert("Atencion, ya existe el mail designado para un usuario, verifique sus datos");</script> ';
			}elseif(checkadress()){
				
				require("connect_db.php");
				mysql_query("INSERT INTO usuario VALUES('$nombre','$email','$password')");
				//echo 'Se ha registrado con exito';
				echo ' <script language="javascript">alert("Usuario registrado con éxito");</script> ';
				mysql_close($conexion);
			
			
		}else{
			echo '<script languaje="javascript">alert("Las contraseñas son incorrectas");</script>';
		}
     }
}
    function checkadress($emailaddr)
    {
        if (filter_var($emailaddr,FILTER_VALIDATE_EMAIL))
        	//echo "Direccion de email ".$emailaddr." valida.<br/>";
        {
      echo ' <script language="javascript">alert("direccion de email".$emailaddr. "con éxito");</script> ';
        }else
        {
        	echo "Direccion de email".$emailaddr."invalida<br/>";
        }
    
?>