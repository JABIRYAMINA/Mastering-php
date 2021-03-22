<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
	<section class="content">

		<aside class="col-xs-4">
		<?php Navigation();?>
			
			
		</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

	
	<?php 
//-1 fonction mathématique:
$x=[1.6,2,7];
echo max($x)."<br>"; 
//2:
echo(abs(-6.7))."<br>"; 
//3
$x=-1.6;
echo abs($x)."<br>"; // Affiche 1.6;
echo ceil($x)."<br>"; // Affiche -1;

//-2 fonction de chaîne:
$majuscule="amina";
echo ucfirst($majuscule)."<br>"; 
//2

echo strlen("php")."<br>"; 
//3

$miniscule="AMINA";
echo strtolower($miniscule)."<br>"; 


//-3 fonction array:
$color = array("white", "pink", "gray");
echo count($color)."<br>";
//2
$tableau=array("amina","oumayma","samira");
print_r(array_count_values($tableau))."<br>"; 




/*  
	Étape 1: utilisez une fonction mathématique prédéfinie ici et faites-en écho

	Étape 2: utilisez une fonction de chaîne prédéfinie ici et faites-en écho

	Étape 3: Utilisez une fonction Array prédéfinie ici et faites-en écho 

 */

	
?>





</article><!--MAIN CONTENT-->
<?php include "includes/footer.php" ?>