<h1>Exercice 13</h1>

<p>
    Créer une classe Voiture possédant les propriétés suivantes : <code>marque</code>, 
    <code>modèle</code>, <code>nbPortes</code> et <br><code>vitesseActuelle</code> ainsi 
    que les méthodes <code>demarrer( )</code>, <code>accelerer( )</code> et <code>
    stopper( )</code> en plus <br>des accesseurs (<code>get</code>) et mutateurs 
    (<code>set</code>) traditionnels. La vitesse initiale de chaque véhicule<br>
    instancié est de 0. Une méthode personnalisée pourra afficher toutes les 
    informations d’un <br>véhicule.<br>
    <br>
    
    v1 ➔ "<code>Peugeot</code>","<code>408</code>",<code>5</code><br>
    v2 ➔ "<code>Citroën</code>","<code>C4</code>",<code>3</code><br>
    <br>

    Coder l’ensemble des méthodes, accesseurs et mutateurs de la classe tout en 
    réalisant des jeux de<br> tests pour vérifier la cohérence de la classe Voiture. 
    Vous devez afficher les tests et les éléments<br>suivants :<br>
    <br>

    <bold>Bonus :</bold> ajouter une méthode <code>ralentir(vitesse)</code> dans la classe Voiture.
</p>

<?php

class Voiture 
{
    private string $_marque;
    private string $_modele;
    private int $_nbPortes;
    private int $_vitesseActuelle;
    private  bool $_statut;

    public function __construct($marque, $modele, $nbPortes) {
        $this -> _marque = $marque;
        $this -> _modele = $modele;
        $this -> _nbPortes = $nbPortes;
        $this -> _vitesseActuelle = 0;
        $this -> _statut = false;
    }

    public function getMarque() {
        return $this -> _marque;
    }
    public function getModele() {
        return $this -> _modele;
    }
    public function getNbPortes() {
        return $this -> _nbPortes;
    }
    public function getVitesseActuelle() {
        return $this -> _vitesseActuelle;
    }
    
    public function setMarque($marque) {
        return $this -> _marque = $marque;
    }
    public function setModele($modele) {
        return $this -> _modele = $modele;
    }
    public function setNbPortes($nbPortes) {
        return $this -> _nbPortes = $nbPortes;
    }
    public function setVitesseActuelle($vitesseActuelle) {
        return $this -> _vitesseActuelle = $vitesseActuelle;
    }

    public function demarrer() {
        if($this -> _statut){
            return "Le véhicule " . $this -> __toString() . " est déjà démarré <br>";
        }
        else {
            $this->_statut = true;
            return "Le véhicule " . $this -> __toString() . " démarre <br>";
        }
    }

    public function accelerer($vitesse) {
        if ($this -> _statut){
            $this -> _vitesseActuelle += $vitesse; 
            return "Le véhicule " . $this -> __toString() . " accélère de $vitesse km/h<br>";
        }
        else {
            return "Pour accélerer, il faut démarrer le véhicule ". $this -> __toString() ." !<br>";
        }
    }

    public function vitesse() {

        return "La vitesse du Véhicule " . $this -> __toString() . " est de : " . max($this -> getVitesseActuelle(), 0) . " km/h<br>";
    }

    public function stopper() {
        $this -> _vitesseActuelle = 0;  
        $this -> _statut = false;
        return "Le véhicule " . $this -> __toString() . " est stoppé<br>";

    }

    public function ralentir($vitesse) {
        if ($this -> _statut){
            $result = $this -> _vitesseActuelle -= $vitesse;
            $negativeToZero = max($result, 0);

            return "Le véhicule " . $this -> __toString() . " ralentit à $negativeToZero km/h<br>";
        }
        else {
            return "Le véhicule ". $this -> __toString() ." n'est pas démarré<br>";
        }
    }

    public function __toString(){
        return $this -> _marque." ".$this -> _modele." ";
    }

    public function getInfo($vehicN) {

        if ($this -> _statut){
            $statut = "démarré";
        }
        else {
            $statut = "à l'arrêt";
        }
        
        return "
            Infos véhicule $vehicN<br>
            ************************<br>
            Nom et modèle du véhicule: " . $this -> _marque . " " . $this -> _modele . "<br>
            Nombre de portes: ". $this -> _nbPortes . "<br>
            Le véhicule ". $this -> _marque . " est $statut <br>
            Sa vitesse actuelle est de : " . $this -> _vitesseActuelle . " km/h<br>
        ";
    }
}

$v1 = new Voiture("Peugeot", "408", 5);
$v2 = new Voiture("Citroën", "C4", 3);

echo $v1 -> demarrer();
echo $v1 -> accelerer(50);
echo $v2 -> demarrer();
echo $v2 -> accelerer(20);
echo $v2 -> stopper();
echo $v2 -> accelerer(0);
echo $v1 -> vitesse();
echo $v2 -> vitesse(); 
echo $v2 -> ralentir(20); 


echo"<br>";
echo"<br>";

echo $v1 -> getInfo("1");

echo"<br>";
echo"<br>";

echo $v2 -> getInfo("2");