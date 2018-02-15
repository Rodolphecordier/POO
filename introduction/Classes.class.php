<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 11:36
 */

class Classes
{
    private $NomClasses,
            $Eleves = [];


     #Alt+Insert permet de genéré constructeur, getteurs et et setteurs
public function __construct($NomClasses)
{
    $this->NomClasses       = $NomClasses;

}

    /**
     * @return mixed
     */
    public function getNomClasses()
    {
        return $this->NomClasses;
    }

    /**
     * @param mixed $NomClasses
     */
    public function setNomClasses($NomClasses)
    {
        $this->NomClasses = $NomClasses;
    }
    public function getEleves(){
        return $this->Eleves;
    }

    /**
     * @param Eleve $Eleves
     */
    public function AjouterUnEleve( Eleves $Eleves)
    {
        $this->Eleves[] = $Eleves;
    }
}

