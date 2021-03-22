<?php include "functions.php" ?>
<?php include "includes/header.php" ?>

	<section class="content">

	<aside class="col-xs-4">

	<?php Navigation();?>
			
	</aside><!--SIDEBAR-->


<article class="main-content col-xs-8">

<?php  
//1-condition facultatif:
$greenship="sale2";
if($greenship=="sale"){
  echo"love";

}elseif($greenship=="sale1"){
	echo"I love you";

}else{
	echo"I love greenchip :p<br>";
}

//2-forloop:
	for($i=0;$i<10;$i++){
		echo $i;
	}

//3-switch:
	$number=5;
	switch ($number) {
		case 5:
		break;	
			echo "regim";
		case 4:
		break;
			echo "bon alimentation";
		case 3:
		break;
			echo "hydtatation de la peau";
		case 2:
		break;	
			echo"sport";
		case 1:
		break;
		default;	
			echo"jouer";
	}
/*  

Étape 1: Créez une condition facultatif avec if, elseif et else pour enfin afficher la chaîne en disant, "I love greenchip :p"

Étape 2: Créez un forloop qui affiche 10 nombres

Étape 3: Créez une instruction switch qui teste à nouveau une condition avec 5 cas 

 */

	
?>






</article><!--MAIN CONTENT-->
	
<?php include "includes/footer.php" ?>