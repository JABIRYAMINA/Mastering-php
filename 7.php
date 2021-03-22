<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
    

	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


	<article class="main-content col-xs-8">
	
	
	
	<?php 
//1-la création de la base de données sous le nom :d'exercice7
	
//2-
	//création de la connexion:
	    $servername = 'localhost';
		$username = 'root';
		$password = '';
		$basededonnées ='exercice7';
		
	// Établir la connexion
		$connexion = mysqli_connect($servername, $username, $password,$basededonnées);
		
	//Vérification de la connexion
		if($connexion){
			echo 'Connexion réussie'."<br>";
		}else{
		
			echo'pas de connexion' ;
		}	
	
	//2-la création du tableau:
		$mysql = "CREATE TABLE departements (
		DNO INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
		DNOM VARCHAR(20) NOT NULL,
		DIR VARCHAR(20) NOT NULL,
		VILLE VARCHAR(30) NOT NULL)";
	
		if (mysqli_query($connexion, $mysql)) {
	 		 echo "la création de table est bien faite"."<br>";
		}else {
	  		 echo "la table n'est pas créée"."<br>" . mysqli_error($connexion);
	}
		mysqli_close($connexion);

//3-:
	$servername = 'localhost';
	$username = 'root';
	$password = '';
	$basededonnées ='exercice7';
	
	// Établir la connexion
	$connex = mysqli_connect($servername, $username, $password,$basededonnées);
	
	//Vérification de la connexion
	if($connex){
		echo 'Connexion réussie'."<br>";
	}else{
	
		echo'pas de connexion' ;
	}
	
//l'insértion des données:
	$sql = "INSERT INTO departements (DNOM, DIR, VILLE)
	VALUES ('Amina', 'Developpeur', 'OUJDA');";
	$sql .= "INSERT INTO departements (DNOM, DIR, VILLE)
	VALUES ('Oumayma', 'Developpeur', 'NADOR');";
	

	if (mysqli_multi_query($connex, $sql)) {
	  echo "L'enregistrement créé ";
	} else {
	  echo "l'enregistrement n'a pas créé: " . $sql . "<br>" . mysqli_error($connex);
	}
	
	mysqli_close($connex);
	

	   
	/* 
	Étape 1 - Créer une base de données dans PHPmyadmin

	Étape 2 - Créez un tableau comme celui de la conférence

	Étape 3 - Insérez des données

	Étape 4 - Connectez-vous à la base de données et lisez les données 
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>
