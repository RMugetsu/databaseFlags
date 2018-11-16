<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
	<?
	 	$conn = mysqli_connect('localhost','ruben','ruben123');
		mysqli_select_db($conn, 'world');
		$consulta = "SELECT * FROM country;";
		$resultat = mysqli_query($conn, $consulta);
		if (!$resultat) {
     			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
     			$message .= 'Consulta realitzada: ' . $consulta;
     			die($message);
 		}
 		?>
 		<form method="post" action="filtrados.php">
	 		<?
		 		while( $registre = mysqli_fetch_assoc($resultat) ){
					echo "<input type='radio' name='pais' value=".$registre['Code']."> <img src='imagenes/".$registre['Name'].".png' width='20px'>".$registre['Name']."</br>";
				}
	 		?>
	 		<input type="submit" value="Enviar">
 		</form>
</body>
</html>