
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
    $when_it_happened = $_POST['whenithappened'];
    $how_long = $_POST['howlong'];
    $alien_description = $_POST['aliendescription'];
    $fang_spotted = $_POST['fangspotted'];
    $email = $_POST['email'];
	$firts = $_POST['firstname'];
	$last = $_POST['lastname'];
	$how = $_POST['howmany'];
	$did = $_POST['whattheydid'];
	$other = $_POST['other'];
	$smg = $firts. ' was abducted '. $when_it_happened. ' and was gone for '. $how_long. '.'.
	'Number of aliens:'. $how. 'Aliens description: '. $alien_description. 'what they  did: '. 
	$did. 'Fang spotted: '. $fang_spotted. 'other comments '. $other;
    ?>
    
		
    <h1>Gracis per la teva informació</h1>
    <p>El teu nom es: <?php echo $firts. " ". $last;?></p>
    <p>Temps alla: <?php echo $how;?></p>
    <p>Va passar: <?php echo $did;?></p>
    <p>El teu comentari ha estat: <?php echo $other;?></p>
    <p>You where abducted <?php echo $when_it_happened;?> and where gone for <?php echo $how_long;?>  </p>
    <p>Descripció dels aliens: <?php echo $alien_description;?></p>
    <p>Estaba el ca alla? <?php echo $fang_spotted;?></p>
	<p>El teu email es: <?php echo $email;?></p>
	
 
</body>

</html>
