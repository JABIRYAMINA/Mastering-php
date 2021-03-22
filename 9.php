<?php include "functions.php" ?>
<?php include "includes/header.php" ?>



	<section class="content">

		<aside class="col-xs-4">

		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


			<article class="main-content col-xs-8">
			
		
	
<?php 
       

//1:lien 

//2:cookie
$name = "user";
$value = "Amina";
setcookie($name, $value, time() + (3600 * 24 * 7)); 
if(!isset($_COOKIE[$name])) {
	echo "cookie " . $name;
  } else {
	echo "Cookie" ."<br>". $name . "<br>";
	echo "Value is: " . $_COOKIE[$name]."<br>";
  } 
//3:session:
session_start();
$_SESSION['malade']="sinusitefrontale";
echo "bonjour"."<br>" .$_SESSION['malade'];

/*  
	Étape 1 - Créez un lien indiquant Cliquez ici et définissez le lien href pour passer certains paramètres et utiliser le super global GET pour le voir

	Étape 2 - Définissez un cookie qui expire dans une semaine

	Étape 3 - Démarrez une session et définissez-la sur la valeur, quelle que soit la valeur souhaitée. */

	if ( isset( $_GET['lien'])){
    
		$nom = $_GET['Amina']; 
	echo $_GET['nom'];	
	   
   
	   }

	?>
     
	<form method="GET">
	<a name="lien" href="9.php?nom=Amina">Cliquer ici</a>
	</form>
	






</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>