<h1>Exercice 15</h1>

<p>
    En utilisant les ressources de la page http://php.net/manual/fr/book.filter.php, 
    vérifier si une adresse e-mail a <br>le bon format.
<br>
    L’adresse contact@elan est une adresse e-mail invalide<br>
</p>

<?php

$mail1 = "elan@elan-formation.fr";
$mail2 = "contact@elan";


function mailValidation($mail){
    if (filter_var($mail, FILTER_VALIDATE_EMAIL)){
        return "$mail ==> est valide<br>";
    }

    else{
        return "$mail ==> n'est pas valide<br>";
    }

}

echo mailValidation($mail1);
echo mailValidation($mail2);