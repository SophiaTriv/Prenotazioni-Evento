<!doctype html>
<html>
	<head>
		<title> Registrazione utente </title>
		<meta charset="UTF-8">
		<link rel="stylesheet" type="text/css" href="stile.css">
	</head>
<body>
<header>
		<h1>Torneo videoludico</h1>
	</header>
	
	<ul>
	<li><a href="http://172.18.0.177/utente1/Prenotazioni/home.html">Home </a></li>
	<li><a href="http://172.18.0.177/utente1/Prenotazioni/Pren.php">Prenotazione/Iscrizione  </a></li>
	<li><a href="http://172.18.0.177/utente1/Prenotazioni/Elenco.php">Elenco Prenotazioni </a></li>
	</ul>

<?php

$file= fopen("prenotazioni.txt", "r");
if(!$file){
	echo "<p> Impossibile aprire il file remoto. </p>";
	exit;
}
echo"<h2> Elenco delle prenotazioni </h2>";
while(!feof ($file)){
	$line = fgets($file);
	echo $line . "<br />";
}
fclose ($file);

	$fileSomma = fopen ("prenotazioni.txt", "r");	
	while(!feof ($fileSomma)){
		$line= fgets($fileSomma);
		echo "Posti disponibili: ".$line."<br />";
	}
	fclose ($fileSomma);
	?>
?>

	<footer>
	<p>ITIS E.Divini San Severino Marche</p>
	<p>Sophia Trivellini e Natalia Chiariello 5&deg;G </p>
	<hr>
	<p>Contatti utili: numero cell. 3478067675, email sophia.trivellini@divini.org / natalia.chiariello@divini.org</p>
	</footer>
</body>
</html>