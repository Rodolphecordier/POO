<?php
/**
 * Created by PhpStorm.
 * User: Admin
 * Date: 12/02/2018
 * Time: 11:28
 */

class Eleves
{
    private $NomEleves,
            $PrenomEleves,
            $age;

    /**
     * Eleves constructor.
     * @param $NomEleves
     * @param $PrenomEleves
     * @param $age
     */
    public function __construct(

        $NomEleves,
        $PrenomEleves,
         $age
)
    {
     $this->NomEleves           = $NomEleves;
     $this->PrenomEleves        = $PrenomEleves;
     $this->age                 = $age;
    }

    /**
     * @return mixed
     */
    public function getAge()
    {
        return $this->age;
    }

    /**
     * @return mixed
     */
    public function getNomEleves()
    {
        return $this->NomEleves;
    }

    /**
     * @return mixed
     */
    public function getPrenomEleves()
    {
        return $this->PrenomEleves;
    }

    /**
     * @param mixed $age
     */
    public function setAge($age): void
    {
        $this->age = $age;
    }

    /**
     * @param mixed $NomEleves
     */
    public function setNomEleves($NomEleves): void
    {
        $this->NomEleves = $NomEleves;
    }

    /**
     * @param mixed $PrenomEleves
     */
    public function setPrenomEleves($PrenomEleves): void
    {
        $this->PrenomEleves = $PrenomEleves;
    }
public function getNomcomplet(){
        return $this->NomEleves.''.$this->PrenomEleves;
}

}