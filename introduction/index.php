<?php
#importation de notre class Ecole
require_once 'Ecole.class.php';
#importation de notre class Eleves
require_once 'Eleves.class.php';
#importation de notre class Classes
require_once 'Classes.class.php';

/**
 * Creation d'une instance de la classe Ecole.
 * Ici, notre variable $Ecole est un objet de la class Ecole en ce sens, elle as accès à
 * l'ensemble des variables et fonctions qui la compose.
 */

/*-------------------------#création d'une école----------------------------*/
$Ecole = new Ecole(
    'WF3 Rouen',
    'Place saint-Marc',
    'Alexandre Martini'
);
/*--------------------------#création d'eleves--------------------------------------------- */
$Eleves1 = new Eleves(
    'cordier',
    'rodolphe',
    '26'
);

$Eleves2 = new Eleves(
    'Bosson',
    'Gauthier',
    '64'
);

$Eleves3 = new Eleves(
    'theo',
    'Dacosta',
    '11'
);
/*---------------------------------creation de classes---------------------------------------------------------*/
$Classes1 = new Classes (
    'Front'
);
$Classes2 = new Classes(
    'Back'
);
$Classes3 = new Classes(
    'fullstack'
);



#affachage de l'objet Ecole
var_dump($Ecole);

# afficher le nom de l'école
# : cannot acces private proprety
# echo $Ecole->NomEcole;

echo '<br>'. $Ecole->getNomEcole();

#je veux changer le nom de l'école
$Ecole->setNomEcole('Webforce 3 Rouen ltd');

echo '<br>'.$Ecole->getNomEcole();

echo '<br>'.$Eleves1->getNomEleves();

echo '<br>'.$Classes3->getNomClasses();

# on affecte nos eleves a leur classe
$Classes1->AjouterUnEleve($Eleves1);
$Classes2->AjouterUnEleve($Eleves2);
$Classes3->AjouterUnEleve($Eleves3);

#aperçu d'une d'une classe
echo '<pre>';
print_r($Classes1);
echo '</pre>';

# on affecte une Classe a l'école
$Ecole->AjouterUneClasse($Classes1);
$Ecole->AjouterUneClasse($Classes2);
$Ecole->AjouterUneClasse($Classes3);

#Aperçu de l'ecole
echo '<pre>';
print_r($Ecole);
echo '</pre>';

# Afficher mes classes et leurs eleves
 echo '<ol>';
 #parcourir les classes
/**
 * je recupere toutes les classes de mon ecole
 */
$lesclasses = $Ecole->getClasses();
foreach ($lesclasses as $objClasse){
echo '<li>';
echo  $objClasse->getNomClasses();
echo '<ul>';
/*on recupere les eleves d'une classe*/

$leseleves = $objClasse->getEleves();
foreach ($leseleves as $objeleves){
    echo '<li>';
    echo $objeleves->getNomcomplet();
    echo '</li>';
}

echo '</ul>';
echo '</li>';
}
  echo '</ol>';
