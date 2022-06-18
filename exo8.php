<h1>Exercice 8</h1>

<p>
    Soit l’URL suivante : http://my.mobirise.com/data/userpic/764.jpg
    Créer une fonction personnalisée permettant d’afficher l’image N fois à l’écran.<br>
    <br>
    Exemple :<br>
    <code>repeterImage($url,4);</code><br>
    <br>
</p>

<?php

$imageURL = "http://my.mobirise.com/data/userpic/764.jpg";

echo repeterImage($imageURL,4);

function repeterImage($url, $repetition){

    $result = "<figure>";
    
                foreach(range(1, $repetition) as $nb){
                    $result .= "<img src='$url' alt='doggy'>";
                }

    $result.= "</figure>"; 

    return $result;
}
