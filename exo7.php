<h1>Exercice 7</h1>

<p>
    Créer une fonction personnalisée permettant de générer des cases à cocher. On pourra 
    préciser dans le tableau associatif si la case est cochée ou non.<br>
    <br>
    Exemple :<br>
    <code>genererCheckbox($elements);</code><br>
    <br>
</p>

<?php


$elements = [
    "Choix 1" => "",
    "Choix 2" => "checked",
    "Choix 3" => ""
];

echo genererCheckbox($elements);


function genererCheckbox($array){

    $result = "<form action='#'>";

                foreach($array as $choix => $value){
                    $result .= "
                    <input type='checkbox' id='".str_replace(' ', '', strtolower($choix))."' 
                    name='choice' $value>
                    <label for='".str_replace(' ', '', strtolower($choix))."'>$choix
                    </label><br>";
                }
    $result .= "</form>";

    return $result;
    
}