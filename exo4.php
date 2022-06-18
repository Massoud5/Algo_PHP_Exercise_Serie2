<h1>Exercice 4</h1>

<p>
    A partir de l’exercice 2, ajouter une colonne supplémentaire dans le tableau HTML 
    qui contiendra <br>le lien hypertexte de la page Wikipédia de la capitale (le lien 
    hypertexte devra s’ouvrir dans un <br>nouvel onglet et le tableau sera trié par ordre 
    alphabétique de la capitale).<br>
    On admet que l’URL de la page Wikipédia de la capitale adopte la forme :<br>
    https://fr.wikipedia.org/wiki/<br>
    <br>
    Le tableau passé en argument sera le suivant :<br>
    <code>$capitales = array ("France"=>"Paris","Allemagne"=>"Berlin",<br>
    "USA"=>"Washington","Italie"=>"Rome","Espagne"=>"Madrid");</code><br>
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
                <th>Lien Wiki</th>
            </tr>
        </thead>
        <tbody>";
    
    foreach($capitales as $pays => $capitale){
       $result .= "<tr>
                    <td>".mb_strtoupper($pays)."</td>
                    <td>$capitale</td>
                    <td><a href='https://en.wikipedia.org/wiki/$capitale' target='_blank'>Lien</td>
                </tr>";
    }
    $result .=  "</tbody></table>";

    return $result;
     
}
