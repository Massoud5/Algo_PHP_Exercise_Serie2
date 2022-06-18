<h1>Exercice 2</h1>

<p>
    Soit le tableau suivant :<br>
    $capitales = array<br>
    ("France"=>"Paris","Allemagne"=>"Berlin","USA"=>"Washington","Italie"=>"Rome");<br>
    Réaliser un algorithme permettant d’afficher le tableau HTML suivant (notez que le 
    nom du pays<br>s’affichera en majuscule et que le tableau est trié par ordre 
    alphabétique du nom de pays) grâce à<br> une fonction personnalisée.<br>
    Vous devrez appeler la fonction comme suit : afficherTableHTML($capitales);<br>
</p>

<style>

    table {
        border-collapse: collapse;
    }

    th, td {
        border: 1px solid black;
        width: 120px;
        height: 30px;
        text-align: left;
        padding-left: 8px;
    }

</style>

<?php

$capitales = [

    "France"=>"Paris",
    "Allemagne"=>"Berlin",
    "USA"=>"Washington",
    "Italie"=>"Rome"
];

echo afficherTableHTML($capitales);

function afficherTableHTML ($capitales){

    ksort($capitales);
    
    $result = "
    <table>

        <thead>
            <tr>
                <th>Pays</th>
                <th>Capitale</th>
            </tr>
        </thead>
        <tbody>";
    
    foreach($capitales as $pays => $capitale){
       $result .= "<tr>
                    <td>".strtoupper($pays)."</td>
                    <td>$capitale</td>
                </tr>";
    }

    $result .=  "</tbody></table>";

    return $result;
     
}