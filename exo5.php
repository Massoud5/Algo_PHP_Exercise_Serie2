<h1>Exercice 5</h1>

<p>
    Créer une fonction personnalisée permettant de créer un formulaire de champs<br> 
    de texte en précisant le nom des champs associés.<br>
    <br>
    Exemple :<br>
    <code>$nomsInput = array("Nom","Prénom","Ville");<br>
    afficherInput($nomsInput);</code><br>
    <br>
</p>

<?php

$nomsInput =  ["Nom", "Prenom", "Ville"];

function afficherInput($nomsInput) {
    $result = "
        <form>";

            foreach($nomsInput as $input){
                $result .= "
                <label for='".strtolower($input)."'>".$input." :</label><br>
                <input type='text' id='".strtolower($input)."' name='".strtolower($input)."'><br>";
            }
    
    $result .= "</form>";
    return $result;
}

echo afficherInput($nomsInput);