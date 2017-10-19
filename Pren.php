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
	
<h2> Modulo di registrazione </h2>
<hr/ >
Inserisci i dati e spedisci il modulo
<form action="<?php echo $_SERVER['PHP_SELF']; ?>"method="post">
Nome <input type="text" name="nome" size="20">
<br />
Cognome <input type="text" name="cognome" size="20">
<br />
E-mail <input type="text" name="email" size="30">
<br />
Cellulare <input type="text" name="cell" size="10">
<br />
<input type="submit" name="invio" value="Prenota Posto" />
<input type="reset" name="cancella" value="Anulla" />
</form>
<hr />

<?php 
$fileSomma = fopen ("prenotazioni.txt", "r");
			while(!feof ($fileSomma)){
			$line= fgets($fileSomma);
			$somma=$line;
	}
	fclose ($fileSomma);

if((isset($_POST["invio"]))&&($somma>0)){
$file= fopen("prenotazioni.txt", "a");

$nome=$_POST["nome"];
fwrite( $file, $_POST["nome"] . "\t");
$cognome=$_POST["cognome"];
fwrite( $file, $_POST["cognome"] . "\t");
$email=$_POST["email"];
fwrite( $file, $_POST["email"] . "\t");
$cell=$_POST["cell"];
fwrite( $file, $_POST["cell"] . "\n");
fclose ($file);
echo  "Conferma della registrazione: <br />";
echo  "<br />";
echo "La prenotazione di $nome $cognome è stata registrata correttamente con l'indirizzo di posta elettronica $email e il numero di cellulare $cell. <br />";


$fileSomma = fopen ("prenotazioni.txt", "r");
			while(!feof ($fileSomma)){
			$line= fgets($fileSomma);
			$somma=$line;
			if($somma==10){
				$somma=10;
			}
			$somma=$somma-1;
	}
	fclose ($fileSomma);
	
	$fileSomma = fopen ("prenotazioni.txt", "w");
		fwrite ($fileSomma, $somma);
	fclose ($fileSomma);
}
?>


	<footer>
	<p>ITIS E.Divini San Severino Marche</p>
	<p>Sophia Trivellini e Natalia Chiariello 5&deg;G </p>
	<hr>
	<p>Contatti utili: numero cell. 3478067675, email sophia.trivellini@divini.org / natalia.chiariello@divini.org</p>
	</footer>
</body>
</html>