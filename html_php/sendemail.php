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
	$subject=$_POST['subject'];
	$msg=$_POST['msg'];
	
	if (!empty($subject) && !empty($smg)) {
	
	echo "subjesct: $subject y $msg</br>";
	$dbc = mysqli_connect('172.16.2.41', 'lsansaloni', 'lluc', 'elvis_store')
	or die ('error connecting to Mysql server.');
	$query="SELECT firts_name, last_name,email from email_list ORDER BY last_name, firts_name";
	$result = mysqli_query($dbc, $query);
	?>
	<table border="1" cellpadding="0" cellspacing="0">
		<tr>
			<td>firts name </td>
			<td>lasts name </td>
			<td>email</td>
			<td>subject</td>
			<td>missatge</td>
		</tr>
	<?php
	$i=0;
	while ($row = mysqli_fetch_array($result)){
		$i++;
	?>
	
	<tr>
		<td><?= $i ?></td>
		<td><?= $row['firts_name']?></td>
		<td><?= $row['last_name']?></td>
		<td><?= $row['email']?></td>
		<td><?= $subject?></td>
		<td><?= $msg?></td>
	</tr>
	<?php
	}
	?>
	</table>
	<?php
	}else{
			echo "el misatge i el subject estan buits";
		}
	?>
	
	

	
</body>

</html>
