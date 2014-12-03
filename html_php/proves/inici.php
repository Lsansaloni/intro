<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>LOGIN</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
	
	<?php
	$nom=$_POST['nom'];
	$constrasenyes=$_POST['constrasenyes'];

	$dbc = mysqli_connect('172.16.2.41', 'lsansaloni', 'lluc', 'lolamen_DB')
		or die('Error al conectar al servidor Mysql');
	$query = "SELECT nom,constrasenyes FROM log_in WHERE nom='$nom'";
	$result = mysqli_query($dbc,$query);
	$row = mysqli_fetch_array($result);
	if($row){
		//AIXÒ VOL DIR QUE L'USUARI EXISTEI I PODEM COMPROVAR SI EL PASSWORD ÉS CORRECTE
		if ($constrasenyes==$row['constrasenyes']){
				echo "login correcto </br>";
					echo "Bienvenido $User ";
					echo "Ahora que has puesto tu contraseña bien puedes ver videos de gatitos sin fin";
			}else 
			{
		echo "login incorrecte </br>";
			}
		}else{
		//AIXÒ VOL DIR QUE L'USUARI NO EXISTEIX I PODRÌEM DONAR L'OPCIÓ DE QUE ES DONÀS D'ALTA O TORNÀS FER LOGIN
		echo "Usuario desconocido <br/>";
			}?>



</body>

</html>
