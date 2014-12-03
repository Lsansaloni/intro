<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>REGISTRE</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
    
    <?php
    $nom = $_POST['nom'];
    $llintges = $_POST['llintges'];
    $email = $_POST['email'];
    $constrasenyes = $_POST['constrasenyes'];
    $usuari = $_POST['usuari'];
    ?>
    
    <h1>Gracis per la teva informació</h1>
    <p>El teu nom es: <?php echo $nom. " ", $llintges;?></p>
    <p>El teu usuari: <?php echo $usuari;?></p>
   	<p>El teu email es: <?php echo $email;?></p>
	<p>La teva contrasenya es: <?php echo $constrasenyes;?></p>
<?php
$dbc = mysqli_connect('172.16.2.41', 'lsansaloni', 'lluc', 'lolamen_DB')
or die('Error connecting to MySQL server.');
$query = "INSERT INTO log_in (nom,llintges,usuari,constrasenyes,email) VALUES ( '$nom', '$llintges','$usuari', '$constrasenyes', '$email')";
echo "$query<br>";
$result = mysqli_query($dbc, $query)
or die('Error querying database.');

?>

</body>

</html>
