<?php include "functions.php" ?>
<?php include "includes/header.php" ?>
<section class="content">

	<aside class="col-xs-4">

		<?php Navigation();?>
			
			
	</aside><!--SIDEBAR-->

<article class="main-content col-xs-8">

	
	<?php  
//création de classe
class Chien {
//propriétés:
     public $couleur_des_yeux;
     public $nez;
     public $couleur_du_fourrure;

// Methods
    function AfficherTous($affichage) {
 
		$this->animal = $affichage;
    }
    function get_name() {
      return $this->animal;
    }
}
 //objet 
  $couleur_des_yeux = new Chien();
  $nez = new Chien();
  $couleur_du_fourrure = new Chien();
  
  $couleur_des_yeux->AfficherTous('vert,');
  $nez->AfficherTous('long,');
  $couleur_du_fourrure->AfficherTous('blanc.');


  echo $couleur_des_yeux->get_name();
  echo "<br>";
  echo $nez->get_name();
  echo "<br>";
  echo  $couleur_du_fourrure->get_name();
  echo "<br>";

	/*  
	Étape 1: Créez une classe appelée Chien

	Étape 2: Définissez certaines propriétés pour le Chien, l'exemple, la couleur des yeux, le nez ou la couleur de la fourrure

	Étape 4: Créez une méthode nommée AfficherTout qui fait écho à toutes les propriétés

	Étape 5: Instanciez la classe / créez l'objet et appelez-le pitbull

	Étape 6: Appelez la méthode AfficherTout
	
	*/
	
	?>





</article><!--MAIN CONTENT-->

<?php include "includes/footer.php" ?>