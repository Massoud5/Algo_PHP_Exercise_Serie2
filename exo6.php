<h1>Exercice 6</h1>

<p>
    Créer une fonction personnalisée permettant de remplir une liste déroulante à 
    partir d'un tableau de valeurs.<br>
    <br>
    Exemple :<br>
    <code>$elements = array("Monsieur","Madame","Mademoiselle");<br>
    alimenterListeDeroulante($elements);</code><br>
    <br>
</p>

<?php

$elements = ["Monsieur","Madame","Mademoiselle"];
echo alimenterListeDeroulante($elements);

function alimenterListeDeroulante($array) {
    $result = "
        <form action='#'>
            <label for='civilite'>Civilité: </label>
            <select name='civilite' id='civilite'>";

                foreach($array as $value){
                    $result .= "<option value='$value'>$value</option>"; 
                };
            
    $result.= "
            </select>
        </form>";

    return $result;
};