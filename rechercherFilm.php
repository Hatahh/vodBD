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
		
		<br/>
		<br/>
		
		<?php 

			try {
			  //$bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
				$bd = new mysqli( 'localhost', 'adminvod', 'azerty', 'vod' ) ;
			} catch ( PDOException $e ) {
				die( 'Erreur : ' . $e->getMessage() ) ;
			}			
			
			$valeur = $_GET['valeur'] ;
			
		  //$query = sprintf("select * from Film where titre = '$valeur'") ;
		  //$query = "select * from Film where titre = '$valeur'" ;
			
			$sql = "select * from Film where titre = '$valeur'" ;
			
		  //$result = mysql_query( $query ) ;
		  //$result = mysql_query($db, "select * from Film where titre = '$valeur'" ) ;
		  
		    $result = $bd->query( $sql ) ;

				echo "<table>" ;	
				echo "<tr>" ;
				echo "<th>Nom du film</th><th>Année</th><th>Producteur</th>" ;
				echo "</tr>" ;
				
				if ($result->num_rows > 0) {
					
					while($row = $result->fetch_assoc()) {
						
						echo "<tr>" ;
						echo "<td>".$row["titre"]."</td><td>".$row["annee"]."</td><td>".$row["realisateur"]."</td>" ;
						
						}
					} else {
						echo "<td>La recherche n'a pas aboutie</td>" ;
					}
					
				$bd->close();

		?>

	</body>
	
</html>
