<h1>Exercice 14</h1>

<p>
    Créer une classe Voiture possédant 2 propriétés (marque et modèle) ainsi qu’une classe VoitureElec qui hérite (<i>extends</i>) de la classe Voiture et qui a une propriété supplémentaire (autonomie).<br>
    <br>
    Instancier une voiture « classique » et une voiture « électrique » ayant les caractéristiques suivantes :
    <br>
    Peugeot 408 :<code>$v1 = new Voiture("Peugeot","408");</code><br>
    BMW i3 150 :<code>$ve1 = new VoitureElec("BMW","I3",100);</code><br>
    <br>

    Votre programme de test devra afficher les informations des 2 voitures de la façon suivante :
    <br>
    <code>echo $v1->getInfos()."<'br'>";</code><br>
    <code>echo $ve1->getInfos()."<'br'>";</code><br>
    
</p>

<?php

class Voiture 
{
    protected string $_marque; // if not protected, i should use getter in the child method.
    protected string $_modele;


    public function __construct($marque, $modele){
        $this -> _marque = $marque;
        $this -> _modele = $modele;
    }

    public function getMarque(){
        return $this -> _marque; 
    }
    public function getmodele(){
        return $this -> _modele; 
    }

    public function getInfos() {
        return  "Véhicule classique de la marque ". $this -> _marque . 
                " modèle " . $this -> _modele;
    }

}

class VoitureElec extends Voiture
{
    
    private string $_autonomie;


    public function __construct($marque, $modele, $autonomie){
        parent::__construct($marque, $modele);
        $this -> _autonomie = $autonomie;
    }

    public function getAutonomie(){
        return $this -> _autonomie; 
    }

    public function getInfos() {
        return  "Véhicule Electrique de la marque ". $this -> _marque . 
                " modèle " . $this -> _modele . " avec une autonomie de : " 
                . $this -> _autonomie . " km";
    }

}

$v1 = new Voiture("Peugeot", "408");
$ve1 = new VoitureElec("BMW", "I3", 100);



echo $v1 -> getInfos() . "<br>";
echo $ve1 -> getInfos() . "<br>";