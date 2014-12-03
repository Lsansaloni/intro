<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
	"http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="en" lang="en">

<head>
	<title>sense títol</title>
	<meta http-equiv="content-type" content="text/html;charset=utf-8" />
	<meta name="generator" content="Geany 1.22" />
</head>

<body>
	 <?php
    $firts_name = $_POST['firts_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    ?>
    
    <h1>Gracis per la teva Subscripció</h1>
    <p>El teu nom es: <?php echo $firts_name. " ", $last_name;?></p>
    <p>El teu email es: <?php echo $email;?></p>
	
<?php
$dbc = mysqli_connect('172.16.2.41', 'lsansaloni', 'lluc', 'elvis_store')
or die('Error connecting to MySQL server.');
$query = "INSERT INTO email_list (firts_name,last_name,email) VALUES ( '$firts_name', '$last_name', '$email')";
echo "$query<br>";
$result = mysqli_query($dbc, $query)
or die('Error querying database.')
?>
	
</body>

</html>
