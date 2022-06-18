<h1>Exercice 12</h1>

<p>
    La fonction <code>var_dump($variable)</code> permet d’afficher les informations 
    d’une variable.<br>
    <br>
    Soit le tableau suivant :<br>
    <code>$tableauValeurs=array(true,"texte",10,25.369,array("valeur1","valeur2"));</code><br>
    A l’aide d’une boucle, afficher les informations des variables contenues dans le tableau.<br>
</p>

<?php

$tableauValeurs= [true, "texte", 10, 25.369, ["valeur1","valeur2"]];

// var_dump($tableauValeurs);

foreach($tableauValeurs as $value){
    var_dump($value);
};