<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>untitled</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.23.1" />
</head>

<body>
    
    <?php
    $nom = $_POST['nom'];
    $llinatges = $_POST['llinatges'];
    $email = $_POST['email'];
    $contrasenya = $_POST['contrasenya'];
    $usuari = $_POST['usuari'];
    ?>
    
<?php
$dbc = mysqli_connect('172.16.2.41', 'lsansaloni', 'lluc', 'aliendatabase')
or die('Error connecting to MySQL server.');
$query = "INSERT INTO log_in (nom, llinatges, email,contrasenya) " .
"VALUES ( '$nom, '$llinatges','$email', '$contrasenya', '$usuari')";
$result = mysqli_query($dbc, $query)
or die('Error querying database.');
echo "$dbc, $query"
mysqli_close($dbc);
?>
    <h1>Gracis per la teva informació</h1>
    <p>El teu nom es: <?php echo $non. " ". $llinatges;?></p>
    <p>El teu usuari: <?php echo $usuari;?></p>
   	<p>El teu email es: <?php echo $email;?></p>
	
 
</body>

</html>
