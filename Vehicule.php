<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/11/2018
 * Time: 14:52
 */

Abstract class Vehicule
{
private $marque;
private $dateAchat;
private $prixAchat;
private $prixCourant;

    /**
     * @return mixed
     */
    public function getMarque()
    {
        return $this->marque;
    }

    /**
     * @param mixed $marque
     */
    public function setMarque($marque): void
    {
        $this->marque = $marque;
    }

    /**
     * @return mixed
     */
    public function getDateAchat()
    {
        return $this->dateAchat;
    }

    /**
     * @param mixed $dateAchat
     */
    public function setDateAchat($dateAchat): void
    {
        $this->dateAchat = $dateAchat;
    }

    /**
     * @return mixed
     */
    public function getPrixAchat()
    {
        return $this->prixAchat;
    }

    /**
     * @param mixed $prixAchat
     */
    public function setPrixAchat($prixAchat): void
    {
        $this->prixAchat = $prixAchat;
    }

    /**
     * @return mixed
     */
    public function getPrixCourant()
    {
        return $this->prixCourant;
    }

    /**
     * @param mixed $prixCourant
     */
    public function setPrixCourant($prixCourant): void
    {
        $this->prixCourant = $prixCourant;
    }

    /**
     * Vehicule constructor.
     * @param $marque
     * @param $dateAchat
     * @param $prixAchat
     */
    public function __construct($marque, $dateAchat, $prixAchat, $prixCourant)
    {
        $this->marque = $marque;
        $this->dateAchat = $dateAchat;
        $this->prixAchat = $prixAchat;
        $this->prixCourant = $prixCourant;
    }

    public function affiche(){
        echo "<br> Véhicule $this->marque acheté le $this->dateAchat au montant de $this->prixAchat DT et vaut actuellement $this->prixCourant DT <br>";
    }
    public abstract function SeDeplacer();
    public function __destruct()
    {
        // TODO: Implement __destruct() method.
    echo "<br> Véhicule $this->marque détruit<br>";
    }
}
?>






