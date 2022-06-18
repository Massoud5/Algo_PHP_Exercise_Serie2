<h1>Exercice 10</h1>

<p>
    En utilisant l’ensemble des fonctions personnalisées crées précédemment, créer 
    un formulaire <br>complet qui contient les informations suivantes : champs de texte 
    avec nom, prénom, adresse e-mail, <br>ville, sexe et une liste de choix parmi 
    lesquels on pourra sélectionner un intitulé de formation : <br>« Développeur 
    Logiciel », « Designer web », « Intégrateur » ou « Chef de projet ».<br>
    <br>
    Le formulaire devra également comporter un bouton permettant de le soumettre à<br> 
    un traitement de validation (submit).<br>
</p>

<?php

$coordonnees =  ["Nom", "Prenom", "Adresse e-mail", "Ville", "Sexe"];
$poste = ["Développeur Logiciel", "Designer web", "Intégrateur", "Chef de projet"];

echo afficherForm($coordonnees, $poste);



function afficherForm($array1, $array2) {
    $result = "
            <form action= '#'>";

            foreach($array1 as $input){
                $result .= "
                <label for='".strtolower($input)."'>".$input." :</label><br>
                <input type='text' id='".strtolower($input)."' name='".strtolower($input)."'><br>";
            }

    $result .= "<br>
                <label for='poste'>Poste: </label>
                <select name='postes' id='poste'>";

                foreach($array2 as $value){
                    $result .= "<option value='$value'>$value</option>"; 
                };
            
    $result.= "
                </select><br>";
    
    $result .= "<button type ='submit'>Submit</button>
            </form>";

    return $result;
}