<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?
	 	$conn = mysqli_connect('localhost','ruben','ruben123');
		mysqli_select_db($conn, 'world');
		$consulta = "SELECT city.Name as city , country.Name as pais
					FROM city, country
					where countrycode = '".$_POST["pais"]."' and city.countrycode = country.code ;";
		$resultat = mysqli_query($conn, $consulta);
		if (!$resultat) {
     			$message  = 'Consulta invàlida: ' . mysqli_error() . "\n";
     			$message .= 'Consulta realitzada: ' . $consulta;
     			die($message);
 		}
 		while( $registro = mysqli_fetch_assoc($resultat) ){
					echo "<label>".$registro['city']."</label> - <label>".$registro['pais']."</label></br>";
				}
 		?>
</body>
</html>