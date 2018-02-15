<?php
/**creation d'une classe Ecole :
 * Une classe Php esr une entité regroupant des variables et des fonctions.
 *chacune de ses fonctions aurat accès aux variables et cette entité.
 */

class Ecole
{
    #déclaration des propriétés de notre classe Ecole
    private $NomEcole,
            $AdresseEcole,
            $DirecteurEcole,
            $Classes = [];

    #afin de pouvoir attribuer une valeur à mes differentes variables, je vais mettre en place un constructeur.

    /**
     * Ecole constructor.
     * @param $NomEcole
     * @param $AdresseEcole
     * @param $DirecteurEcole
     */
    public function __construct(
        $NomEcole,
        $AdresseEcole,
        $DirecteurEcole) {

        # Ici, nous allons attribuer une valeur aux proprièté de la class.
        # la valeur est passé grace au constructeur.

        $this->NomEcole         = $NomEcole;
        $this->AdresseEcole     = $AdresseEcole;
        $this->DirecteurEcole   = $DirecteurEcole;
    }


    /*--------------------------------------------------------guetteurs-------------------------------------------------------------*/
    /**
     * @return mixed
     */
    public function getAdresseEcole()
    {
        return $this->AdresseEcole;
    }

    /**
     * @return mixed
     */
    public function getNomEcole()
    {
        return $this->NomEcole;
    }

    /**
     * @return mixed
     */
    public function getDirecteurEcole()
    {
        return $this->DirecteurEcole;
    }

    /**
     * @return array
     */
    public function getClasses()
    {
        return $this->Classes;
    }
    /*-------------------------------------------setters--------------------------------------------*/
    /**
     * @param mixed $NomEcole
     */
    public function setNomEcole($NomEcole)
    {
        $this->NomEcole = $NomEcole;
    }

    /**
     * @param mixed $AdresseEcole
     */
    public function setAdresseEcole($AdresseEcole)
    {
        $this->AdresseEcole = $AdresseEcole;
    }

    /**
     * @param mixed $DirecteurEcole
     */
    public function setDirecteurEcole($DirecteurEcole)
    {
        $this->DirecteurEcole = $DirecteurEcole;
    }

    /**
     * @param array $Classes
     */
    public function AjouterUneClasse(Classes $Classes)
    {
        $this->Classes[] = $Classes;
    }
}