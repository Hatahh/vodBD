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
		
			<?php 
		
				try {
				  //$bd = new PDO( 'mysql:host=localhost;dbname=vod', 'adminvod' , 'azerty' ) ;
					$bd = new mysqli( 'localhost', 'adminvod', 'azerty', 'vod' ) ;
				} catch ( PDOException $e ) {
					die( 'Erreur : ' . $e->getMessage() ) ;
				}
		
                $titre = $_POST['nomfilm'];
                $annee = $_POST['anneefilm'];
                $realisateur = $_POST['prod'];

				$sql = "insert into Film (titre, annee, realisateur) values ('$titre', '$annee', '$realisateur')" ;
				
				if ( $bd->query( $sql ) === true ) {
					echo "Film ajouté" ;
				} else {
					echo "erreur" ;
				}		
					
				$bd->close();
				
			?>

	</body>
	
</html>
