<h1>Exercice 1</h1>

<p>
    Créer une fonction personnalisée convertirMajRouge() permettant de transformer <br> 
    une chaîne de caractère passée en argument en majuscules et en rouge.<br>
    Vous devrez appeler la fonction comme suit : convertirMajRouge($texte) ;<br>
</p>

<style>
    .red {
        color: red;
        text-transform: uppercase;
    }
</style>

<?php

$texte1 = "Mon texte en paramètre";

function convertirMajRouge($texte){
    return "<p class='red'>".$texte."</p>";
}

echo convertirMajRouge($texte1);