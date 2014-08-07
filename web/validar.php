
<?php

    
	require("connect_db.php");
    
	$email=$_POST['email'];
	$password=$_POST['password'];








	$sql=mysql_query("SELECT * FROM usuario WHERE email='$email'");
	if($f=mysql_fetch_array($sql)){
		if($password==$f['password']){
			header("Location: index2.php");
		}else{
			echo '<script>alert("CONTRASEÑA INCORRECTA")</script> ';
		
			echo "<script>location.href='index.php'</script>";
		}
	}else{
		
		echo '<script>alert("ESTE USUARIO NO EXISTE, PORFAVOR REGISTRESE PARA PODER INGRESAR")</script> ';
		
		echo "<script>location.href='index.php'</script>";	

	}



		


?>