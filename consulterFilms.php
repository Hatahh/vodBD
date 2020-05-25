<!DOCTYPE html>
<html lang="fr">
	
    <head>
        <title></title>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
		<link href="style/vod.css" rel="stylesheet" type="text/css">
    </head>
    
    <body>
	
		<ul>
			<li><a class="active" href="vod.html">Accueil</a></li>
			<li><a href="consulterFilms.php">Consulter</a></li>
			<li><a href="saisieTitreRecherche.html">Rechercher</a></li>
			<li><a href="saisieFilm.html">Ajouter</a></li>
			<li><a href="saisieTitreSuppression.html">Supprimer</a></li>
		</ul>
	
		<h3>Liste des films</h3>
	
			<?php
		
				try {
				  //$bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
					$bd = new mysqli( 'localhost', 'adminvod', 'azerty', 'vod' ) ;
				} catch ( PDOException $e ) {
					die( 'Erreur : ' . $e->getMessage() ) ;
				}
		
				$sql = 'select * from Film' ;
				$resultat = $bd->query( $sql ) ;
				
				echo "<table>" ;	
				echo "<tr>" ;
				echo "<th>Nom du film</th><th>Année</th><th>Producteur</th>" ;
				echo "</tr>" ;
				
				if ($resultat->num_rows > 0) {
					
					while($row = $resultat->fetch_assoc()) {
						
						echo "<tr>" ;
						echo "<td>".$row["titre"]."</td><td>".$row["annee"]."</td><td>".$row["realisateur"]."</td>" ;
						
						}
					} else {
						echo "<td></td><td></td><td></td>" ;
					}
					
				$bd->close();
		
			?>
								   
		<br/>
		<br/>

	</body>
</html>
