<h1>Exercice 9</h1>

<p>
    Créer une fonction personnalisée permettant d’afficher des boutons radio avec un 
    tableau de<br> valeurs en paramètre ("Monsieur","Madame","Mademoiselle").<br>
    <br>
    Exemple :<br>
    <code>afficherRadio($nomsRadio);</code><br>
    <br>
</p>

<?php

$nomsRadio = ["Monsieur","Madame","Mademoiselle"];

echo afficherRadio($nomsRadio);

function afficherRadio($array){

    $result = "<form action='#'>";

                foreach($array as $value){
                    $result .= "
                    <input type='radio' id='".strtolower($value)."' 
                    name='civility' value='".strtolower($value)."'>
                    <label for='".strtolower($value)."'>$value</label><br>";
                }
    $result .= "</form>";

    return $result;
}