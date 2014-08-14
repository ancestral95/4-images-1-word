<html>
	<head>
		<link rel="stylesheet" href="style.css"/>
		<title> 4 Images 1 Word </title>
	</head>
	<body>
		<?php
			$conn=mysql_connect("http://4image1word.libemax.com/api/api.php","admin","libemax");
			if(!$conn) {
				echo("errore connessione server");
				exit();
			}

			$db=mysql_select_db("4images1word");
			if(!$db) {
				echo("errore connessione db");
				exit();
			}

			$cerca="SELECT * FROM 4images1word"; 

			$ris=mysql_query($cerca);
			if(!$ris) {
				echo("errore query");
				exit();
			}

			$riga=mysql_fetch_array($ris);
			if(!$riga) {
				echo("tab vuota");
				exit();
			}

			While($riga) {
				$cod=$riga['ID']; 
				$n=$riga['User'];
				echo("codice prodotto= $cod<br>");
				echo("nome prodotto= $n<br>");
				$riga=mysql_fetch_array($ris);
			}
			mysql_close($conn);
		?>
	</body>
</html>
