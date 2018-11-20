<?php
/**
 * Created by PhpStorm.
 * User: HP
 * Date: 20/11/2018
 * Time: 15:01
 */
include 'Vehicule.php';
include 'Voiture.php';
include 'Avion.php';

$focus= new Voiture ('Focus','14/10/2010',50000,150000,4);
$fiat500= new Voiture ('Fiat 500','15/08/2018',34000,30000,2);
$boeing= new Avion ('Boeing','17/12/2017',10000000,9500000,3);
$airbus= new Avion('Airbus','16/04/2016',8000000,7500000,4);

$focus->affiche();
$tv = $focus->taxeVente();

echo "<br> Taxe sur vente de focus $tv DT <br>";
$fiat500->affiche();
$tv = $fiat500->taxeVente();
echo "<br> Taxe sur vente de Fiat 500 $tv DT<br>";
$boeing->affiche();
$airbus->affiche();
?>